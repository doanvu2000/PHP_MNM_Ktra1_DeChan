<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TiemChung;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function registerVaccination(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'address' => 'required',
            'priority' => 'required'
        ]);

        TiemChung::create($request->all());

        return redirect('/home')->with('success', 'Bạn đã đăng ký tiêm, kiểm tra Email để theo dõi lịch tiêm của bạn!');
    }

    public function getList()
    {
        $list = DB::table('tiemchungs')->join('users', 'users.id', '=', 'tiemchungs.user_id')->get();
        $tiemchungs = TiemChung::all();

        return view('/danhsachdangky', compact('list'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
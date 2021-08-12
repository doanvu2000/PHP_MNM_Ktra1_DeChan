@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Đăng ký tiêm chủng') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <form action="dang-ky-tiem" method="post">
                        @csrf
                        <input class="form-control form-control-lg" name="user_id" value="{{ Auth::user()->id }}" hidden type="text">
                        <p>Địa chỉ nơi đăng ký tiêm: </p>
                        <input class="form-control form-control-lg" name="address" type="text">
                        <p class="mt-3">Đối tượng ưu tiên:</p>
                        <input class="form-control form-control-lg" name="priority" type="text">
                        <button type="submit" class="btn btn-primary mt-3">Đăng ký tiêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

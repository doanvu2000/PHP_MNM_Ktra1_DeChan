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

            <div class="text-center">Danh sách tiêm chủng</div>
                <table class="table caption-top">
                  <th>STT</td>
                  <th>Họ tên</th>
                  <th>Địa chỉ</td>
                  <th>Đối tượng ưu tiên</td>

                  <tbody>
                    @foreach ($list as $tiem)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td> 
                                {{ $tiem->name }}
                            </td>
                            <td> 
                                {{ $tiem->address }}
                            </td>
                            <td> 
                                {{ $tiem->priority }}
                            </td>
                           
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
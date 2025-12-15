@extends('layouts.app')
@section('content')

<h3>Danh sách sinh viên:</h3>

<form method="post" action=" {{ route('sinhvien.store') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputPassword1">Họ Tên</label>
        <input name="ten_sinh_vien" type="text" class="form-control" placeholder="Nguyen Van A..">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Nhập email">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>


<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên Sinh Viên</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhSachSV as $i=>$sv)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $sv['ten_sinh_vien'] }}</td>
            <td>{{ $sv['email'] }}</td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
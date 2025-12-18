@extends('layouts.app')

@section('title', 'Trang classes')

@section('content')

<div class="container"><a href="{{ route('classes.create') }}" type="button" class="btn btn-primary">Thêm lớp học</a></div>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Grade_level</th>
                <th scope="col">Grade_Number</th>
                <th scope="col">Created_at</th>
                <th scope="col">Update_at</th>
                <th scope="col">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $c)
            <tr>
                <td scope="rol">{{ $c->id }}</td>
                <td scope="rol">{{ $c->grade_level }}</td>
                <td scope="rol">{{ $c->grade_number }}</td>
                <td scope="rol">{{ $c->created_at }}</td>
                <td scope="rol">{{ $c->updated_at }}</td>
                <td scope="rol">
                    <a href="{{ route('classes.edit', $c->id) }}" class="btn btn-warning btn-sm">
                        Sửa
                    </a>

                    <form action="{{ route('classes.destroy', $c->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Bạn có chắc muốn xóa lớp này không?')">
                            Xóa
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
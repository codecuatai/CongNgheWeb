@extends('layouts.app')

@section('title', 'Trang classes')

@section('content')

<div class="container"><a href="{{ route('students.create') }}" type="button" class="btn btn-primary">Thêm Học Sinh</a></div>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Parent Phone</th>
                <th scope="col">Class ID</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td scope="rol">{{ $student->id }}</td>
                <td scope="rol">{{ $student->first_name }}</td>
                <td scope="rol">{{ $student->last_name }}</td>
                <td scope="rol">{{ $student->date_of_birth }}</td>
                <td scope="rol">{{ $student->parent_phone }}</td>
                <td scope="rol">{{ $student->class_id }}</td>
                <td scope="rol">{{ $student->created_at }}</td>
                <td scope="rol">{{ $student->updated_at }}</td>
                <td scope="rol">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                        Sửa
                    </a>

                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $student->id }}">
                        Xóa
                    </button>
                    <!-- Modal xác nhận xóa -->
                    <div class="modal fade" id="deleteModal{{ $student->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $student->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $student->id }}">Xác nhận xóa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc chắn muốn xóa đồ án này không?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
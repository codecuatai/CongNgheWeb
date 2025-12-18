@extends('layouts.app')

@section('title', 'Trang computer')

@section('content')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Computer</b></h2>
                    </div>

                    <div class="col-sm-6">
                        <a href="{{ route('computers.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Thêm máy tính mới</span></a>

                    </div>
                </div>
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Computer Name</th>
                        <th>Model</th>
                        <th>Hệ Điều Hành</th>
                        <th>Processor</th>
                        <th>Memory</th>
                        <th>Availible</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->computer_name }}</td>
                        <td>{{ $computer->model }}</td>
                        <td>{{ $computer->operating_system }}</td>
                        <td>{{ $computer->processor }}</td>
                        <td>{{ $computer->memory }}</td>
                        <td>{{ $computer->available }}</td>
                        <td>
                            <a href="{{ route('computers.edit', $computer->id) }}" class="btn btn-primary">Sửa</a>

                            <!-- Nút xóa kèm modal xác nhận -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $computer->id }}">
                                Xóa
                            </button>

                            <!-- Modal xác nhận xóa -->
                            <div class="modal fade" id="deleteModal{{ $computer->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $computer->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $computer->id }}">Xác nhận xóa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc chắn muốn xóa đồ án này không?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                            <form action="{{ route('computers.destroy', $computer->id) }}" method="POST" style="display:inline;">
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
            </table>

        </div>
    </div>
</div>
</div>

@endsection
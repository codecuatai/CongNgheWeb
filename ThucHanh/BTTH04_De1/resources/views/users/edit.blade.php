@extends('layouts.app')
@section('content')
<!-- Modal thêm người dùng -->
<div class="container">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="userModalLabel">Sửa người dùng</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="userForm" method="POST" action="{{ route('users.update', $user['id']) }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" id="username" value="{{ $user['username'] }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{ $user['email'] }}" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" class="form-select" id="role" required>
                        <option value="">Chọn Vai Trò</option>
                        <option value="admin" {{ $user['role'] == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $user['role'] == 'user' ? 'selected' : '' }}>User</option>
                        <option value="moderator" {{ $user['role'] == 'moderator' ? 'selected' : '' }}>Moderator</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Nhập mật khẩu mới nếu có">
                </div>
                <button type="submit" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
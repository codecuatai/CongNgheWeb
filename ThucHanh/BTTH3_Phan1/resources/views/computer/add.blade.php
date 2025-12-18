@extends('layouts.app')

@section('title', 'Thêm add computer')

@section('content')
<div class="card-body container">
    <form method="POST" action="{{ route('classes.store') }}">
        @csrf


        <div class="form-group">
            <label for="formGroupExampleInput">Computer name</label>
            <input name="computer_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Tên máy tính">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Model</label>
            <input name="model" type="text" class="form-control" id="formGroupExampleInput" placeholder="Mẫu máy tính">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Operating System</label>
            <input name="operating_system" type="text" class="form-control" id="formGroupExampleInput" placeholder="Hệ điều hành">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Processor</label>
            <input name="procesor" type="text" class="form-control" id="formGroupExampleInput" placeholder="Vi xử lý">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Memory</label>
            <input name="memory" type="number" class="form-control" id="formGroupExampleInput" placeholder="Bộ nhớ">
        </div>

        <div class="mb-3">
            <label class="form-label">Trạng thái hoạt động</label>
            <select name="available" class="form-select" required>
                <option value="">-- Chọn khối --</option>
                <option value="1">Hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">
                Lưu lớp học
            </button>
        </div>

    </form>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Thêm lớp học')

@section('content')
<div class="card-body container">
    <form method="POST" action="{{ route('classes.store') }}">
        @csrf

        {{-- Grade level --}}
        <div class="mb-3">
            <label class="form-label">Grade Level</label>
            <select name="grade_level" class="form-select" required>
                <option value="">-- Chọn khối --</option>
                <option value="Kindergarten">Kindergarten</option>
                <option value="Pre-K">Pre-K</option>
            </select>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Room number</label>
            <input name="grade_number" type="number" class="form-control" id="formGroupExampleInput" placeholder="Phòng Học Số">
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">
                Lưu lớp học
            </button>
        </div>

    </form>
</div>
@endsection
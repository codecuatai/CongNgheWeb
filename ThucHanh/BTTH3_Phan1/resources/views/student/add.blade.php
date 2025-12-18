@extends('layouts.app')

@section('title', 'Thêm Học Sinh')

@section('content')
<div class="card-body container">
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">First Name</label>
            <input name="first_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="--Ten Cua Sinh Vien--">
        </div>

    </form>
</div>
@endsection
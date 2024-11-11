@extends('admin.layout.layout')
@section('admin_page_title')
Create Category
@endsection
@section('admin_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create Category</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <label for="category_name" class="fw-bold mb-2">Give Name of Your Category</label>
                    <input type="text" class="form-control" placeholder="Category name">
                    <button type="submit" class="btn btn-primary w-100 mt-2">Add Category</button>
                </form>
            </div>
        </div>
@endsection
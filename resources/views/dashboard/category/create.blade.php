@extends('dashboard')
@section('contentDashboard')
<div class="container py-4">
    <h1>Create new Category</h1>
    <!-- form -->
    <form class="py-4" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" name="title" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <div class="col-12 mt-4">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
    </form>
</div>
@stop
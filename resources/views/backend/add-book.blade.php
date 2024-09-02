@extends('backend.master')

@section('content')

<!-- !PAGE CONTENT! -->
<div class="container-fluid p-0">
    <div class="position-relative">
        <!-- Image Background -->
        <img src="../images/library-front-wp.jpeg" class="img-fluid w-100" style="height: 600px; object-fit: cover;" alt="Library Image">

        <!-- Form Container -->
        <div class="position-absolute top-50 start-50 translate-middle" style="width: 80%; max-width: 600px;">
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-center mb-4">Adding Book Details</h2>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <form method="post" action="{{ route('addBook') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">Book Name</label>
                        <input id="id" name="id" class="form-control" type="hidden" placeholder="Enter Book Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="bookName" class="form-label">Book Name</label>
                        <input id="bookName" name="bookName" class="form-control" type="text" placeholder="Enter Book Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="authorName" class="form-label">Author Name</label>
                        <input id="authorName" name="authorName" class="form-control" type="text" placeholder="Enter Author Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Book Category</label>
                        <input id="category" name="category" class="form-control" type="text" placeholder="Enter Book Category" required>
                    </div>
                    <div class="mb-3">
                        <label for="totalNoOfBooks" class="form-label">Total Number of Books</label>
                        <input id="totalNoOfBooks" name="totalNoOfBooks" class="form-control" type="number" placeholder="Enter Total Book Number" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-lg w-100">Add Book</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
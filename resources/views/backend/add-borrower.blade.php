@extends('backend.master')

@section('content')

<!-- !PAGE CONTENT! -->
<div class="container-fluid p-0" style="margin-left: 50px; width: 1200px">
    <!-- Image with Form on Top -->
    <div class="position-relative">
        <img src="../images/library-front-wp.jpeg" class="img-fluid w-100" style="height: 600px; object-fit: cover;" alt="Library Image">

        <!-- Form Container -->
        <div class="position-absolute top-50 start-50 translate-middle" style="width: 80%; max-width: 600px;">
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-center mb-4">Adding Borrower Details</h2>
                <form action="{{ route('addBorrower') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="bookId" class="form-label">Book ID</label>
                        <input id="bookId" name="bookId" class="form-control" type="number" placeholder="Enter Book ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="stdId" class="form-label">Student ID</label>
                        <input id="stdId" name="stdId" class="form-control" type="number" placeholder="Enter Student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="librnId" class="form-label">Librarian ID</label>
                        <input id="librnId" name="librnId" class="form-control" type="number" placeholder="Enter Librarian ID" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-lg w-100">Add Borrower</button>
                </form>

                <div class="alert alert-warning mt-3 d-none" role="alert">
                    <strong>Warning!</strong> You have entered wrong Book ID or Student ID. Please try again!
                    <button type="button" class="btn-close" aria-label="Close" onclick="this.parentElement.classList.add('d-none');"></button>
                </div>

                <div class="alert alert-success mt-3 d-none" role="alert">
                    <strong>Successfully!</strong> Added Borrower!
                    <button type="button" class="btn-close" aria-label="Close" onclick="this.parentElement.classList.add('d-none');"></button>
                </div>

                <div class="alert alert-info mt-3 d-none" role="alert">
                    <strong>Info!</strong> Requested Book isn't Available!
                    <button type="button" class="btn-close" aria-label="Close" onclick="this.parentElement.classList.add('d-none');"></button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
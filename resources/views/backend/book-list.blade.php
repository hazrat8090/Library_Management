@extends('backend.master')

@section('content')

<!-- !PAGE CONTENT! -->
<div class="container-fluid p-0">

    <header id="header">
        <div class="w3-container">
            <form action="{{ route('searchBook') }}" method="get">
                <div id="searchBook" class="corner">
                    <input type="text" id="bookName" name="bookName" placeholder="Enter Book Name" style="padding:8px">
                    <input type="submit" style="padding:8px">
                </div>
            </form>

        </div>
    </header>

    <div class="position-relative">
        <!-- Image Background -->
        <img src="../images/library-front-wp.jpeg" class="img-fluid w-100" style="height: 500px; object-fit: cover;" alt="Library Image">
        <!-- Table Container -->
        <div class="position-absolute top-50 start-50 translate-middle" style="width: 80%; max-width: 800px;">
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-center mb-4">Book List</h2>

                @if(isset($books) && $books->isNotEmpty())
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Book ID</th>
                            <th>Book Name</th>
                            <th>Author Name</th>
                            <th>Category</th>
                            <th>Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->category }}</td>
                            <td>{{ $book->total }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p class="text-center">No book details to display. Please search for a book.</p>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
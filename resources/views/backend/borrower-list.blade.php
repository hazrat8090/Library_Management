@extends('backend.master')
@section('content')

<div class="w3-row-padding w3-padding-16">
    <div class="w3-col m6">
        <img src="../images/library-front-wp.jpeg" width="1035" height="430">
        <!-- Borrower List Modal -->
        <div id="borrowerList" class="w3-modal" style="display: block; padding-top: 150px">
            <div class="w3-modal-content w3-animate-zoom" style="padding:4\32px">
                <div class="w3-container w3-white w3-center">
                    <i onclick="document.getElementById('borrowerList').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
                    <h2 class="w3-wide">Viewing Borrower List</h2>
                    <table class="w3-table">
                        <tr>
                            <th>Borrower ID</th>
                            <th>Book ID</th>
                            <th>Student ID</th>
                            <th>Librarian ID</th>
                            <th>Date of Borrow</th>
                            <th>Status</th>
                        </tr>
                        @foreach ($borrowerList as $borrower)
                        <tr>
                            <td><span>{{ $borrower->id }}</span></td>
                            <td><span> {{ $borrower->bookId }} </span></td>
                            <td><span> {{ $borrower->studentId }} </span></td>
                            <td><span> {{ $borrower->librarianId }} </span></td>
                            <td><span> {{ $borrower->created_at }} </span></td>
                            <td><span> false </span></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@extends('backend.master')

@section('content')

<style>
    .image-container {
        position: relative;
        width: 1050px;
        margin: 0 auto;
    }

    .background-image {
        width: 1100px;
        height: 600px;
    }

    .form-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%, 0);
        width: 80%;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .table-container {
        overflow-x: auto;
    }
</style>


<header id="header">
    <div class="w3-container">
        <form method="get" action=" {{ route('searchStudent') }} ">
            @csrf
            <div id="searchBook" class="corner">
                <input type="number" id="studentId" name="studentId" placeholder="Enter Student ID" style="padding:8px">
                <button type="submit" class="btn btn-primary"> serach </button>
            </div>
        </form>

    </div>
</header>
<div class="container">
    <div class="image-container">
        <img src="../images/library-front-wp.jpeg" class="background-image" alt="Library Image">

        @if($student)
        <div id="resultStudent" class="modal-content">
            <button type="button" class="close close-btn" onclick="document.getElementById('resultStudent').style.display='none'" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="text-center">Student Information</h2>
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student Phone</th>
                            <th>Student Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div id="resultStudent" class="modal-content">
            <h2 class="text-center">No Student Found</h2>
        </div>
        @endif
    </div>
</div>
@endsection
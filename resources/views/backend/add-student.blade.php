@extends("backend.master")
@section('content')

<style>
    /* add student page */
    .image-container {
        position: relative;
        width: 1050px;
        margin: 0 auto;
    }

    .background-image {
        width: 1150px;
        height: 600px;
    }

    .form-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        /* Adjust width as necessary */
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        /* Optional: Add a semi-transparent background */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        /* Optional: Add a shadow for better visibility */
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="image-container">
                <img src="../images/library-front-wp.jpeg" class="background-image" alt="Library Image">

                <div class="form-container">
                    <h2 class="text-center">Adding Student Details</h2>
                    <form action="{{ route('addStudent') }}" method="post">
                        @csrf <!-- Add this to include CSRF token -->
                        <div class="form-group">
                            <label for="studentId">Student ID</label>
                            <input id="studentId" name="studentId" class="form-control" type="number" placeholder="Enter Student ID" required>
                        </div>
                        <div class="form-group">
                            <label for="studentName">Student Name</label>
                            <input id="studentName" name="studentName" class="form-control" type="text" placeholder="Enter Student Name" required>
                        </div>
                        <div class="form-group">
                            <label for="studentAddr">Student Address</label>
                            <input id="studentAddr" name="studentAddr" class="form-control" type="text" placeholder="Enter Student Address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input id="phone" name="phone" class="form-control" type="number" placeholder="Enter Student Phone Number" required>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Add Student</button>
                        @if(session('success'))
                        <div class="alert alert-success mt-3">
                            <strong>Successfully!</strong> {{ session('success') }}
                        </div>
                        @endif
                        @if($errors->any())
                        <div class="alert alert-warning mt-3">
                            @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </div>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // JavaScript to show/hide alerts
    function showAlert(type) {
        document.getElementById(type + 'Alert').classList.remove('d-none');
    }
</script>


@endsection
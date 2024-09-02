<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-image: url('../../../images/1445.jpg'); background-size:cover; background-attachment:fixed; background-repeat:no-repeat; background-position: center;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light py-4">
                <div class="card shadow-sm bg-warning ">
                    <div class="card-header bg-gradient-primary text-white text-center py-4">
                        <h4 class="mb-0 bg-success fs-50">Librarian Registration Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control rounded-pill" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control rounded-pill" placeholder="Enter your email" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control rounded-pill" placeholder="Enter your password" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control rounded-pill" placeholder="Confirm your password" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block rounded-pill">Register</button>
                        </form>
                    </div>
                    <div class="card-footer text-center bg-light">
                        <a href="{{ route('login') }}" class="text-primary">Already have an account? Login here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
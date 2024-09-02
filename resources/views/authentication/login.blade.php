<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"
        charset="ISO-8859-1">
    <title>Log In</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        h1 {
            color: #4CAF50;
        }

        button:hover {
            opacity: 0.8;
        }

        .container {
            padding: 16px;
        }

        p {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 2px solid #888;
            width: 30%;
            /* Could be more or less, depending on screen size */
        }

        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        .alert {
            padding: 10px;
            background-color: #ff9800;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
</head>

<body>
    <h1>
        <center>Librarian Login Form</center>
    </h1>
    <form action="{{ route('login') }}" class="modal-content animate"
        method="post">
        @csrf
        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="text" id="email" placeholder="Enter Email" name="email" autofocus="autofocus" required>
            <label for="password"><b>Password</b></label>
            <input type="password" id="password" placeholder="Enter Password" name="password" autofocus="autofocus" required>
            @if(session('error'))

            <div class="alert warning">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> <strong>Warning!</strong>
                <strong>Warning!</strong> {{ session('error') }}

                You have entered wrong email or password. Please try again!
            </div>
            @endif
            <button type="submit">Login</button>
        </div>

        <a href="{{ route('register') }}" style="text-decoration:underline;">
            <p>create an account?</p>
        </a>

    </form>

</body>

</html>
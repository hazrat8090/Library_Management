<title>Library Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js">

<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-33%, -35%);
        opacity: 0.8
    }

    .corner {
        position: absolute;
        top: 10%;
        left: 80%;
        transform: translate(-10%, -80%);
        opacity: 0.8
    }
</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container">
            <img src="../images/avatar.jpg" style="width:45%;" class="w3-round"><br>
            <table>
                <tr>
                    <td>
                        <h5>LibName</h5>
                    </td>
                </tr>
                <tr>
                    <td><span>Email</span></td>
                </tr>
                <tr>
                    <td><span>Designation</span></td>
                </tr>
            </table>
            <hr>
        </div>
        <div class="w3-bar-block">
            <a href=" home " onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a>
            <a href="{{ route('showStudentForm' )}} " class="w3-bar-item w3-button w3-padding"><i class="fa fa-group w3-margin-right"></i>ADD STUDENT</a>
            <a href="{{ route('searchStudent') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search w3-margin-right"></i>SEARCH STUDENT</a>
            <a href="{{ route('showBookForm') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-address-book w3-margin-right"></i>ADD BOOK</a>
            <a href=" {{ route('searchBook') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search w3-margin-right"></i>SEARCH BOOK</a>
            <a href="{{ route('bookList') }}" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('bookList').style.display='block'"><i class="fa fa-address-card w3-margin-right"></i>BOOK LIST</a>
            <a href="{{ route('showBorrower') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user w3-margin-right"></i>ADD BORROWER</a>
            <a href=" {{ route('borrowerList') }} " class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('borrowerList').style.display='block'"><i class="fa fa-address-card w3-margin-right"></i>BORROWER LIST</a>
            <a href="{{ route('updateReturn') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-send w3-margin-right"></i>UPDATE RETURN</a>
            <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out w3-margin-right"></i>LOG OUT</a>
        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header id="home">
            <div class="w3-container">
                <h1 style="color:#5EA69C"><b>Library Management System</b></h1>

                <div class="w3-section w3-bottombar w3-padding-16"></div>
            </div>
        </header>


        @yield('content')

        <div class="w3-black w3-center w3-padding-12 w3-down">Developed by <a href="mailto:abdulqaderazd1378@gmail.com" title="W3.CSS" target="_blank" class="w3-hover-opacity">Hazrat Sultani</a></div>

    </div>

    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.width = "300px";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("myOverlay").style.display = "none";
        }
    </script>
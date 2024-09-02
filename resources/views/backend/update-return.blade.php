@extends('backend.master')
@section('content')

<!-- Images of Me -->
<div class="w3-row-padding w3-padding-16">
    <div class="w3-col m6">
        <img src="../images/library-front-wp.jpeg" width="1135" height="530" style="margin-left: 50px;">
        <form action="{{ route('updateBorrwer') }}" method="post">
            @csrf
            <div id="updateReturn" class="centered">
                <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
                    <div class="w3-container w3-white w3-center">
                        <h2 class="w3-wide">Updating Book Return Status</h2>
                        <p><input id="borrowerId" name="borrowerId" class="w3-input w3-border" type="number" placeholder="Enter Borrower ID" required></p>
                        <button type="submit" class="w3-button w3-padding-large w3-red w3-margin-bottom">Update</button>
                        <div class="alert warning" style="display: none;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> <strong>Warning!</strong>
                            You have entered wrong BorrowerId. Please try again!
                        </div>
                        <div class="alert warning" style="display: none;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> <strong>Successfully!</strong>
                            Updated Borrower!
                        </div>
                        <div class="alert warning" style="display: none;">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> <strong>Info!</strong>
                            Book already returned!
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- End page content -->
@endsection
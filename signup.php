<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekart-signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="login-style.css">
    <script src="login.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" class="container" method="post">
        <div class="box">
            <div class="row">
                <div class="col-sm-5 col-xs-1 box1">
                    <div class="inline-text">
                        <h1>Look's like you're
                             new here!</h1>
                        <p>
                            Signup with you're mobile to get started
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 px-5 pt-5 box2">
                    <!-- <h4>Sign in to your account</h4> -->
                    <!-- <div class="user-id user-data">
                        <input type="email" name="username" placeholder="Enter your name" class="form-control my-3 p-4"  id="username" required=""/>
                         <label for="email">Enter e-mail/ Mobile number</label>
                    </div> -->
                    <div class="user-id user-data">
                        <input type="email" name="email" placeholder=" Enter Mobile number" class="form-control my-3 p-4"  id="username" required=""/>
                        <!-- <label for="email">Enter e-mail/ Mobile number</label> -->
                    </div>
                    <div class="user-id user-data">
                        <input type="password" name="password" placeholder="Enter Password" class="form-control my-3 p-4" id="password" required=""/>
                        <!-- <label>Enter Password</label> -->
                    </div>
                    <div class="user-id user-data">
                        <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control my-3 p-4" id="password" required=""/>
                        <!-- <label>Enter Password</label> -->
                    </div>
                    <!-- <div class="user-id user-data">
                        <input type="password" name="" placeholder="Enter Password" class="form-control my-3 p-4" id="password" required=""/>
                        <label>Enter Password</label>
                    </div> -->
                    <div class="user-id">
                        <p>By continuing, you agree to E-kart's Term of use and Privacy Policy.</p>
                    </div>
                    <!-- <span><a href="#">Forgot?</a></span> -->
                    <div class="user-id button">
                        <input type="submit" name="user_register" id="" value="Register">
                    </div>
                    <!-- <div class="user-id">
                        <p>OR</p>
                    </div> -->
                    <!-- <div class="user-id button">
                        <input type="reset" name="" id="" value="Request OTP">
                    </div> -->
                    <div class="user-id">
                        <p class="footer"><a href="#">Existing user? Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>


<!-- php -->

<?php
if(isset($_POST['user_register']))
{
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $confirm_user_password = $_POST['confirm_password'];

$select_query= "Select * from `user_table` where user_email ='$user_email'";
$result = mysqli_query($con, $select_query);
$row_count = mysqli_num_rows($result);
if ($row_count>0) {
    echo "<script>alert('register successfull')</script>";
}
elseif ($user_password!=$confirm_user_password) {
    echo "<script>alert('Passwords dont match')</script>";
}
else {
    $insert_query = "insert into `user_table` (user_password, user_email) values ('$hash_password', '$user_email')";
    $sql_execute = mysqli_query($con, $insert_query);   
}

if($sql_execute){
    echo "<script>alert('Data inserted succesfully')</script>";
}
else{
    die(mysqli_error($con));
}

}
?>
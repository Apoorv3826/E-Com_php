
<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>
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
                        <h1>Login</h1>
                        <p>Get access to your orders,<br>
                             Wishlist and <br>
                             Recommedations
                            </p>
                    </div>
                </div>
                <div class="col-lg-7 px-5 pt-5 box2">
                    <h4>Sign in to your account</h4>
                    <div class="user-id user-data">
                        <input type="email" placeholder="Enter E-mail/ Mobile number" class="form-control my-3 p-4" name="user_username" id="username" required=""/>
                        <!-- <label for="email">Enter e-mail/ Mobile number</label> -->
                    </div>
                    <div class="user-id user-data">
                        <input type="password" name="user_password" placeholder="Enter Password" class="form-control my-3 p-4" id="password" required=""/>
                        <!-- <label>Enter Password</label> -->
                    </div>
                    <div class="user-id">
                        <p>By continuing, you agree to E-kart's Term of use and Privacy Policy.</p>
                    </div>
                    <!-- <span><a href="#">Forgot?</a></span> -->

                    <div class="user-id button">
                        <input type="submit" name="user_login" id="" value="Login" onclick="validate()">
                    </div>
                    <!-- <div class="user-id">
                        <p>OR</p>
                    </div> -->
                    <!-- <div class="user-id button">
                        <input type="reset" name="" id="" value="Request OTP">
                    </div> -->
                    <div class="user-id">
                        <p class="footer"><a href="signup.php">New to E-kart? Create an account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<?php
if (isset($_POST['user_login'])) {

    $user_username =$_POST['user_username'];
    $user_passwd =$_POST['user_password'];

    $select_query = "Select * from `user_table` where user_email= '$user_username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    if ($row_count>0) {
        if (password_verify($user_passwd, $row_data['user_password'])) {
            echo "<script>alert('login successfull')</script>";
        }
        else {
            echo "<script>alert('Invalid credentials')</script>";
        }
    }
    else {
        echo "<script>alert('credentials')</script>";
    }
}
?>
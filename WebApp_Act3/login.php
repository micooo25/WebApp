<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="design.css">
    <title></title>
</head>
<?php

    if(isset($_POST['submit'])){
    $connect = oci_connect($username,$password,"localhost/XE");
    $username = $_POST['username'];
    $password = $_POST['password'];
    do_query($conn,"SELECT EMPLOYEE_ID * FROM EMPLOYEES WHERE EMPLOYEE_ID = '".$username. "' and EMAIL = '". $password."'");
}  

?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login">
                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <input type="submit" value="Sign In" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                            <a href="javascript:void(0)" class="forgot-pass">Forgot Password</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">Posted By: <a href="http://www.jquery2dotnet.com">Bhaumik Patel</a></div>
</div>
</body>
</html>
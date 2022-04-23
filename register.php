<?php
    session_start();
    include('configuration.php');

    if(isset($_POST['btn-register'])) 
    {
        
        $username = $_POST['user-name'];
        $password = $_POST['user-password'];
        $cf_password = $_POST['cf-password'];
        if($password === $cf_password) 
        {
            $sql = "INSERT INTO `register`(`username`, `password`, `cf_password`) VALUES ('$username','$password','$cf_password')";
            mysqli_query($conn, $sql);
            header('location: register.php');
            $_SESSION['success-msg'] = "Register Successfully!";

        } else {
           $_SESSION['error-msg'] = "Password dose not match!";
        }

    }
?>

<?php
    include('pages/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xpense-Notes | Register</title>
    <link rel="stylesheet" href="assets/styles/login-regis.css">
    <style>
        #btn-register {
            background-color:var(--primary-color);
            color: var(--white-color);
        }
    </style>

</head>
<body>
    <div class="login-xpense-container container">
       <div class="login-box">
           <p>Welcome Back! Please Register</p>
            <form action="" method="Post">
                <input type="text" placeholder="Username" name="user-name" class="form-control mb-3 mt-1" autocomplete="off" required>
                <input type="password" placeholder="Password (8 characters only)" name="user-password" class="form-control mb-3" maxlength="8" required >
                <input type="password" placeholder="Confirm password" name="cf-password" class="form-control mb-3" maxlength="8" required>
                <div class="message-tell-user mb-3">
                    <!-- is error -->
                    <?php
                        if(isset($_SESSION['error-msg']))
                        {
                    ?>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="5" height="4" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div style="font-size: 14px;">
                                <?php echo $_SESSION['error-msg'];?>
                            </div>
                        </div>
                    <?php
                        unset($_SESSION['error-msg']); 
                    }   
                    ?>
                    <!-- end is error -->

                    <!-- is success -->
            
                    <?php
                        if(isset($_SESSION['success-msg']))
                        {
                    ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="5" height="4" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div style="font-size: 14px;">
                                <?php echo $_SESSION['success-msg'];?>
                            </div>
                        </div>
                    <?php
                        unset($_SESSION['success-msg']);
                    }   
                    ?>
                     <!-- end is success -->


                </div>
                <input type="submit" class="form-control mb-3" value="Register" id="btn-register" name="btn-register">
                <p style="text-align:;">Back to <a href="login.php" id="register-link">Log In</a> ?</p>
            </form>
       </div>
    </div>
    
</body>
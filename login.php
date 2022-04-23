<?php
    include('pages/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xpense-Notes | Login</title>
    <link rel="stylesheet" href="assets/styles/login-regis.css">
</head>
<body>
    <div class="login-xpense-container container">
        <?php
            session_start();
            include('configuration.php');
            $query = "SELECT `username`, `password` FROM `register`";
            $res=mysqli_query($conn, $query);
            
            if(isset($_POST['btn-login'])) {
                $user_name=$_POST['username'];
                $user_pass=$_POST['password'];
                if($res->num_rows>0) {
                    while ($row= $res->fetch_assoc()) {
                        if($row['username']==$user_name &&  $row['password']== $user_pass) {
                            $_SESSION['username'] = $row['username'];
                            $_SESSION['password'] = $row['password'];
                            header('location: index.php');

                        }
                        else {
                            $_SESSION['error-msg'] = "Incorrect Username or Password!";
                        }
                    }
                }

            }
        ?>



       <div class="login-box">
           <p>Welcome Back! Please log in</p>
            <form action="" method="Post">
                <input type="text" placeholder="Username" name="username" class="form-control mb-3 mt-1" autocomplete="off" required>
                <input type="password" placeholder="Password (8 characters only)"  name="password" class="form-control mb-3" maxlength="8" required >
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
                </div>
                <input type="submit" class="form-control mb-3" value="Log In" id="btn-login" name="btn-login" >
                <p style="text-align:;">New user? <a href="register.php" id="register-link">Register Now!</a></p>
            </form>
       </div>
    </div>
    
</body>
</html>
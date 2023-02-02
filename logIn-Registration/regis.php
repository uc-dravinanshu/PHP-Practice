<?php
session_start();
require_once("dbConfig.php");
//registration.
if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['uname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $userphone = mysqli_real_escape_string($con, $_POST['userphone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);


    //second thing password protect.
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    //third: check user email is present or not.
    $emails = "SELECT * FROM `registration` WHERE `email`='$email'";
    $query = mysqli_query($con, $emails);

    //third:1 - check email ek se jayada table ke row me agar available ho to.
    $emailcount = mysqli_num_rows($query);

    if($emailcount > 0) {
        echo "email already present";
    } else {
        if($password === $cpassword) {
           //insertquery.
           $insertquery = "INSERT INTO `registration`(`username`, `email`, `mobile`, `password`, `cpassword`) VALUES ('$username','$email','$userphone','$pass','$cpass')";
           $iquery = mysqli_query($con, $insertquery);
            if($iquery) {
               ?>
                <script>
                  alert('inserted successfully');
                  window.location.href ="regis.php";
                </script>
                 
               <?php
            } else {
                ?>
                  <script>
                    alert('not inserted');
                    window.location.href ="regis.php";
                  </script>
                  
                <?php
            }
        } else {
            echo "p";
            ?>
              <script>
                alert('password is not matching');
                window.location.href ="regis.php";
              </script>
            <?php  
        }
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    
    <div class="container mt-5 border border-2 border-dark">
        <div class="row">
            <div class="col-lg-6">
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <h4 class="text-center mt-3">create account</h4>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="uname"><i class="bi bi-envelope"></i></span>
                    <input type="text" id="uname" name="uname" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="uname">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-useremail"><i class="bi bi-envelope"></i></span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Useremail" aria-label="Useremail" aria-describedby="basic-useremail">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-Userphone"><i class="bi bi-telephone"></i></span>
                    <input type="text" id="userphone" name="userphone" class="form-control" placeholder="Userphone" aria-label="Userphone" aria-describedby="basic-Userphone">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-Createpassword"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Createpassword" aria-label="Createpassword" aria-describedby="basic-Createpassword">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-repeatpassword"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Repeatpassword" aria-label="Repeatpassword" aria-describedby="basic-repeatpassword">
                  </div>
                  <div class="mb-3">
                    <div class="d-grid">
                      <button class="btn btn-primary" type="submit" name="submit">Create Account</button>
                    </div>
                  </div>
                  <div class="mb-3 text-center">
                    <span class="">Have an account? <a href="login.php">Login</a> </span>
                  </div>
               </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
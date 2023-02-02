<?php
session_start();
require('dbConfig.php');
 if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //second: match the emails.
    $email_search = "SELECT * FROM `registration` WHERE `email`='$email'";
    $query = mysqli_query($con, $email_search);

    // check email exist or not.
    $email_count = mysqli_num_rows($query);
    if($email_count){
         //password match means verify.
         $email_pass = mysqli_fetch_assoc($query);
         $db_pass = $email_pass['password'];
         $_SESSION['fetch_user'] = $email_pass['username'];

         $pass_decode = password_verify($password, $db_pass);
         if($pass_decode){
             ?>
             <script>
                alert('login successfully');
                window.location.href="home.php";
             </script>
             <?php
         }else{
            echo "passoword is not matching";
         }
    }else{
        echo "invalid email";
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
                  <h4 class="text-center mt-3">Login account</h4>
                  
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-useremail"><i class="bi bi-envelope"></i></span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Useremail" aria-label="Useremail" aria-describedby="basic-useremail">
                  </div>
                  
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-Createpassword"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="enter password" aria-label="Createpassword" aria-describedby="basic-Createpassword">
                  </div>
                  
                  <div class="mb-3">
                    <div class="d-grid">
                      <button class="btn btn-primary" type="submit" name="login">LOGIN Now</button>
                    </div>
                  </div>
                  <div class="mb-3 text-center">
                    <span class="">we Haven't an account? <a href="regis.php">Registration</a></span>
                  </div>
               </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
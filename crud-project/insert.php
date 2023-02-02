<?php
require("db_config.php");

if(isset($_POST['submit'])){
    $sql = "INSERT INTO `students`(`name`, `email`, `password`, `gender`) VALUES ('$_POST[username]', '$_POST[useremail]', $_POST[userpassword], '$_POST[gender]')";
    $query = mysqli_query($con, $sql);
    if($query) {
        echo <<<data
            <script>
              alert("Data inserted successfully");
              window.location.href("index.php");
            </script>
        data;
    } else{
        echo <<<data
            <script>
                alert("Data inserted successfully");
                window.location.href("index.php");
           </script>
        data;
    }

}

?>
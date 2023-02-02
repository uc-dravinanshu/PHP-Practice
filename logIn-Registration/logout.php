<?php
session_start();
session_unset();
session_destroy();
?>
  <script>
    alert('logout successfully');
    window.location.href="login.php";
  </script>
<?php
?>
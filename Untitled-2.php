<?php
session_start();
$reportType = '';
$_SESSION['reportType'] = $_POST['reportType'];
$reportType = $_SESSION['reportType'];

if(isset($reportType)){
} else{
    $reportType = 1;
}
?>

<form action="" method="POST" id="reportSwitch">
    <input checked type="radio" name="reportType" id="leadership" value="1" <?php if($reportType == 1){
        echo 'checked';} ?>>
    <label for="leadership">Leadership</label>
    <input type="radio" name="reportType" id="fundementals" value="2" <?php if($reportType == 2){
        echo 'checked';} ?>>    
    <label for="fundementals">Fundementals</label>
</form>

//how to create check uncheck in session in php? 


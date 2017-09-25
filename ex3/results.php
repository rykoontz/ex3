<?php
function myRegister($user) {
  include_once('classes/'.strtolower($user).'.class.php');
}

spl_autoload_register('myRegister');


$results = new Registered('newuser', 'regular');

echo('First name: '. $_POST['fname']);
echo "<br/>";
echo('Last name: '. $_POST['lname']);
echo "<br/>";
echo('Email Address: ' .$_POST['email']);
echo "<br/>";





?>



<!DOCTYPE html>
<html>
<head>

</head>
<body>


</body>
</html>

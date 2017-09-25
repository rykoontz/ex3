<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include '_includes/config.php';
function myLoad($user) {
  include_once('classes/'.strtolower($user).'.class.php');
}

spl_autoload_register('myLoad');

$registered = new Registered('Regular User','rykoontz');
$admin = new Admin('Administrator', 'dykoontz');


$registered->user_type = 1;
$registered->first_name = 'Ryan';
$registered->last_name = 'Koontz';
$registered->email_address = 'rykoontz@umail.iu.edu';

$admin->user_type = 2;
$admin->first_name = 'Dyan';
$admin->last_name = 'Koontz';
$admin->email_address = 'dykoontz@umail.iu.edu';

echo "User Level: ".$registered->user_level." <br/>";
echo "Registered User ID: ".$registered->user_id." <br/>";
echo "Registered User Type: ".$registered->user_type." <br/>";
echo "Registered First Name: ".$registered->first_name." <br/>";
echo "Registered Last Name: ".$registered->last_name." <br/>";
echo "Registered Email Address: ".$registered->email_address." <br/>";
echo "<br/>";
echo "User Level: ".$admin->user_level." <br/>";
echo "Admin User ID: ".$admin->user_id." <br/>";
echo "Admin User Type: ".$admin->user_type." <br/>";
echo "Admin First Name: ".$admin->first_name." <br/>";
echo "Admin Last Name: ".$admin->last_name." <br/>";
echo "Admin Email Address: ".$admin->email_address." <br/>";
$testAdd = admin::getMath(3,4);
echo "$testAdd is my math";
 ?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <form id="form1" name="form1" method="post" action="results.php">
  <table width="500" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td width="169">First Name:</td>
      <td width="321"><label for="fname"></label>
        <input type="text" name="fname" id="fname" /></td>
    </tr>
    <tr>
      <td>Last Name:</td>
      <td><input type="text" name="lname" id="lname" /></td>
    </tr>
    <tr>
      <td>Email Address:</td>
      <td><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" id="submit" value="Register" /></td>
    </tr>
  </table>
  </form>


</body>
</html>

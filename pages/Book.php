<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$firstName = $email = $mobile = $date = $time = $service = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["FirstName"]);
  $email = test_input($_POST["Email"]);
  $mobile = test_input($_POST["Mobile"]);
  $date = test_input($_POST["Date"]);
  $time = test_input($_POST["Time"]);
  $service = test_input($_POST["Service"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Book Now</h2>
<p><span style="color:red;">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First Name: <input type="text" name="FirstName" value="<?php echo $firstName;?>">
  <span style="color:red;">* <?php echo $firstNameErr;?></span>
  <br><br>
  
  Email: <input type="email" name="Email" value="<?php echo $email;?>">
  <span style="color:red;">* <?php echo $emailErr;?></span>
  <br><br>
  
  Mobile: <input type="text" name="Mobile" value="<?php echo $mobile;?>">
  <span style="color:red;">* <?php echo $mobileErr;?></span>
  <br><br>
  
  Date: <input type="date" name="Date" value="<?php echo $date;?>">
  <span style="color:red;">* <?php echo $dateErr;?></span>
  <br><br>
  
  Time: <input type="time" name="Time" value="<?php echo $time;?>">
  <span style="color:red;">* <?php echo $timeErr;?></span>
  <br><br>
  
  Service: <input type="text" name="Service" list="service" value="<?php echo $service;?>">
  <datalist id="service">
    <option value="For Her: Wash, cut & blow-dry">
    <option value="For Her: Wash & blow-dry">
    <option value="For Her: Fringe trim">
    <option value="Colour: Tint:Full head">
    <option value="Colour: Head highlight">
    <option value="Colour: Balayage / Bespoke">
    <option value="For Him Wash & styling">
    <option value="For Him: Colour blend">
    <option value="For Him: Olaplex without colour">
    <option value="For Him: Full head tint">
  </datalist>

  <input type="submit" name="submit" value="Submit"> 
  <input class="booking-btn" value="Clear"> 
</form>

<?php
echo "<h2>Your Data:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $date;
echo "<br>";
echo $time;
echo "<br>";
echo $service;
?>

</body>
</html>
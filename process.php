<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Advice Shop - Subscribed</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<?php

if (isset($_REQUEST['name'])) {
    echo "<h2>Thank you ". $_REQUEST['name']."</h2>";
}
else {
  echo "<h2>Please subscribe</h2>";
}

function printadvice($username, $count){
  echo "<h3> Hi $username, here are your $count tips:</h3>";
  for ($i = 1; $i <= $count; $i++){
    echo "<p>Tip #$i: Always believe in yourself and keep learning!</p>";  
  }
}

?>


<div id="content">

<?php
  $name = $_REQUEST['name'] ?? '';
  $gender = $_REQUEST['gender'] ?? '';

  //if else
  if ($name == '' | $gender == '') {
    echo 'Fill the neccasary fields';
    echo "<p><a href='subscribe.php'>Go back to subscribe</a></p>";
  }else {
    echo "<h2>Thank you for subscribing, $name!</h2>";
  }
  
  //for gender
  if ($gender== "male") {
    echo "<p>Welcome, sir! Here's your personalised advice package.</p>";
  }else {
    echo "<p>Welcome, ma'am! Here's your personalised advice package.</p>";
  }

  printadvice($name, 3); // or any number of tips you want to show

?>

</p>
</div>
<?php include("inc_footer.php"); ?>
</body>
</html>

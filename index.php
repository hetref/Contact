<?php
//variable setting
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//check input fields
if (empty($name) || empty($email) || empty($message)) {
      echo "Please fill all the fields";
} else {
      mail("shindearyan179@gmail.com", "Web message", $message, "From: $name <$email>");
      echo "<script type='text/javascript'>alert('Your message sent succesfully');
	    window.history.log(-1);
	   </script>";
}

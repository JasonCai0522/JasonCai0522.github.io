<?php
    $myemail = "jasonfleetwood123@gmail.com";

    $email = $_POST['email'] ;
    $message = $_POST['message'] ;
    $name = $_POST['name'] ;
    $subject = $_POST['subject'] ;

    $mailheader = "From:".$name. "<".$email.">/r/n";

    mail("$myemail", "$subject","$message", $mailheader);
?>

<!DOCTYPE html>
<html lang = "en">
<html>
<head>
  <title>Achievements</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="../CSS/styles.css" />

</head>

<body>
  <div class = "dropdown">
    <button class = "dropdownbtn">
      <h2>Menu</h2>
    </button>
      <h2 class = "navigation_content">
        <a href = "../index.html">Home</a>
        <a href = "projects.html">Projects</a>
        <a href = "aboutme.html">About Me</a>
        <a href = "contact/contact.html">Contact</a>
      </h2>
    </div>
  <div>

    <h1> Thank You for the Email </h1>
</body>

<footer>
</footer>

</html>

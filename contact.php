<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us Page</title>
    
    <style>
   body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=email], input[type=tel], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>

</head>

<body>

    <?php include('includes/header.php');?>

    <h3>Contact Form</h3>

<div class="container">
    <form name="sentMessage"  method="post">
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Please enter your name.">

    <label for="contactno">Phone Number</label>
    <input type="tel" id="contactno" name="contactno" placeholder="Please enter your phone number.">

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Please enter your Email Address.">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Please enter your message" style="height:200px"></textarea>

    <input type="submit" name="send" value="Send Message">
  </form>
</div>


<?php include('includes/footer.php');?>

   
</body>

</html>

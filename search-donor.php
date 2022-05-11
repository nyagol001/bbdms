<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System | Search Donor</title>
    
    
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

  select, textarea {
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

<h3>Search Donor</h3>

<div class="container">
    <form name="donar"  method="post">
    <label for="bloodgroup"><b>Blood Group</b></label>
    <select name="bloodgroup" required>
   
</select>

<label for="location">Location</label>
    <textarea id="location" name="location" placeholder="Search By Donor's location" style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>
    

     
  <?php include('includes/footer.php');?>
    

</body>

</html>

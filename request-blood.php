<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOOTRH BloodBank & Donor Management System | Request For Blood</title>
    
    <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  
}

* {
  box-sizing: border-box;
}

.container {
  padding: 100px;
  background-color: white;
}

input[type=text], select[name=gender], select[name=bloodgroup] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

input[type=textarea] {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f1f1f1;
  font-size: 16px;
  resize: none;
  display: inline-block;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.requestbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  position: relative;
}

.requestbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

    </style>


</head>

<body>

<?php include('includes/header.php');?>

<form name="donar" method="post">
<div class="container">
    <h1>Request Blood</h1>
    <p>Please fill in this form to request for Blood</p>
    <hr>

    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>

    <label for="mobileno"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobileno" id="mobileno" required>

    <label for="emailid"><b>Email Id</b></label>
    <input type="text" placeholder="Enter Email" name="emailid" id="emailid" required>
    
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" id="age"  min="18" max="70" required>

    <label for="hospital"><b>Hospital</b></label>
    <input type="text" placeholder="Enter Hospital" name="hospital" id="hospital" required>

    <label for="bldunits"><b>Blood Units</b></label>
    <input type="text" placeholder="Enter Blood Units" name="bldunits" id="bldunits" required>

    <label for="address"><b>Address</b></label>
    <input type="textarea" placeholder="Enter Your Address" name="adress" id="address" required>

    <label for="message"><b>Message</b></label>
    <input type="textarea" placeholder="Enter Message" name="message" id="message" required>


    <label for="gender"><b>Gender</b></label>
    <select name="gender" required>
    <option value="">Select</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>

    <label for="bloodgroup"><b>Blood Group</b></label>
    <select name="bloodgroup" required>
   
</select>

    <hr>

 <button type="submit" class="requestbtn">Request</button>
    

    </div>
</form>   




      
</div>
  <?php include('includes/footer.php');?>
   

</body>

</html>

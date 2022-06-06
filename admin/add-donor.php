<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
$fullname=$_POST['fullname'];
$mobile=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blodgroup=$_POST['bloodgroup'];
$address=$_POST['address'];
$message=$_POST['message'];
$status=1;
$sql="INSERT INTO  tblblooddonars(FullName,MobileNumber,EmailId,Age,Gender,BloodGroup,Address,Message,status) VALUES(:fullname,:mobile,:email,:age,:gender,:blodgroup,:address,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':blodgroup',$blodgroup,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your info submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOOTRH BloodBank & Donor Management System | Become A Donor</title>
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

.registerbtn {
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

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

  </style>

<style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>

<body>


    
<form name="donar" method="post">
<div class="container">
    <h1>Add Donor</h1>
    <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
    <p>Please fill in this form to add a donor</p>
    <hr>

    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>

    <label for="mobileno"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobileno" id="mobileno" required>

    <label for="emailid"><b>Email Id</b></label>
    <input type="text" placeholder="Enter Email" name="emailid" id="emailid" required>
    
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" id="age"  min="18" max="70" required>

    <label for="address"><b>Address</b></label>
    <input type="textarea" placeholder="Enter Your Address" name="address" id="address" required>

    <label for="message"><b>Message</b></label>
    <input type="textarea" placeholder="Enter Message" name="message" id="message" required>


    <label for="gender"><b>Gender</b></label>
    <select name="gender" required>
    <option value="">Select</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>

    <label for="bloodgroup"><b>Blood Group</b></label>
    <div><select name="bloodgroup" required>
    <?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
<div>
  
</select>

    <hr>
	<button type="reset" style="color:black">Cancel</button>
 <button type="submit" name="submit" class="registerbtn">Save Changes</button>
    

    </div>
</form>   
        


    

</body>

</html>

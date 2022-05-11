<head>

<style>


.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #04AA6D;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>

</head>

<body>

<div class="header">
  <h2>JOOTRH Bloodbank Management System</h2>
</div>

<div id="navbar">
  <a class="active" href="index.php">Home</a>
  <a href="#">About</a>
  <a href="#">Why Become donor</a>
  <a href="become-donar.php">Become a Donor</a>
  <a href="search-donor.php">Search Blood</a>
  <a href="request-blood.php">Request Blood</a>
  <a href="contact.php">Contact Us</a>
</div>
    <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

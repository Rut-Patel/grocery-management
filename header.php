<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script language="javascript" src="items.js" type="text/javascript">
</script>
<style>
.fa {
  padding: 10px;
  font-size: 20px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 3px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-inbox {
  background: #dd4b39;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

}
</style>
</head>
<body>
	<?php require "db.php"; ?>
	<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a class="w3-bar-item w3-button" href="index.php">Home</a>
  <a class="w3-bar-item w3-button" href="add.php">Add New Item</a>
  <a class="w3-bar-item w3-button" href="about.php">About</a>
  <a class="w3-bar-item w3-button" href="pdf-gen.php">Shopping List</a>
</div>

<div class="w3-main" style="margin-left:200px">
	<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Grocery Managment/Inventory</h1>
  </div>
</div>
	
<?php
$title = "Add Items";
include("header.php");
if(isset($_POST["add"]) && $_POST["add"]!="") {


    $sql = "INSERT INTO items (itemName, quantity, description,maxquantity, updated) VALUES 
    ('".$_POST['itemName']."','".$_POST['quantity']."','".$_POST['description']."','".$_POST['maxquan']."','".$_POST['date']."')";
	if($row = mysqli_query($conn,$sql)){
		header("Location:index.php");
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>

	<form name="frmItems" method="post" action="" class="w3-container w3-card">
			<input type="text" name="itemName" class="w3-input w3-border" value="" placeholder="Enter the Name of the item" required>

			<input type="number" name="quantity" class="w3-input w3-border" value="" placeholder="Enter the Current Quantity" required>

			<input type="text" name="description" class="w3-input w3-border" value="" placeholder="Enter the Description">
	
			<input type="number" name="maxquan" class="w3-input w3-border" value="" placeholder="Enter the number of Items required">

			<input type="date" name="date" class="w3-input" placeholder="Enter the Date" value="<?php echo(date("Y-m-d")); ?>" readonly>
			<br/>
            <input type="submit" name="add" value="Add Item" class="ww3-button w3-yellow w3-round">
            <br/>

</form>
<?php 
$site = "AddItems";
include("footer.php"); ?>
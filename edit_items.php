<?php
$title = "Add Items";
include("header.php");

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$itemCount = count($_POST["itemName"]);
for($i=0;$i<$itemCount;$i++) {
	$sql .= "UPDATE items set itemName='". $_POST["itemName"][$i] . "', quantity='" . $_POST["quantity"][$i] . "', description='" . $_POST["description"][$i] . "', maxquantity='" . $_POST["maxquantity"][$i] . "', updated='" . $_POST["updated"][$i] . "' WHERE itemId='" . $_POST["itemId"][$i] . "';";
	
}
if (mysqli_multi_query($conn, $sql)) {
  header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location:index.php");

}
?>

<form name="frmitems" class="w3-table" method="post" action="" class="w3-container w3-card-4">
	<div style="width:500px;">
	<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="w3-table">
		<tr class="tableheader">
			<td>Edit Item</td>
		</tr>
<?php
$rowCount = count($_POST["items"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn, "SELECT * FROM items WHERE itemId='" . $_POST["items"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
		<tr>
		<td>
			<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="w3-table">
		</tr>
		<tr>
			<td><label>Item Name</label></td>
			<td>
				<input type="hidden" name="itemId[]" class="txtField" value="<?php echo $row[$i]['itemId']; ?>">
				<input type="text" name="itemName[]" class="txtField" value="<?php echo $row[$i]['itemName']; ?>">
			</td>
		</tr>
		<tr>
			<td><label>Quantity</label></td>
			<td><input type="number" name="quantity[]" class="txtField" value="<?php echo $row[$i]['quantity']; ?>"></td>
		</tr>
		<tr>
			<td><label>Description</label></td>
			<td><input type="text" name="description[]" class="txtField" value="<?php echo $row[$i]['description']; ?>" readonly></td>
		</tr>
		<tr>
			<td><label>Max Quantity</label></td>
			<td><input type="number" name="maxquantity[]" class="txtField" value="<?php echo $row[$i]['maxquantity']; ?>"></td>
		</tr>
		<tr>
			<td><label>Updated</label></td>
			<td><input type="date" name="updated[]" class="txtField" value="<?php echo(date("Y-m-d")); ?>" readonly></td>
		</tr>

		</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="ww3-button w3-yellow w3-round"></td>
</tr>
</table>
</div>
</form>
<?php
$site = "Update Items"; 
include("footer.php"); ?>
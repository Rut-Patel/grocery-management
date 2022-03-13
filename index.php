<?php
$title = "Grocery List";
include("header.php");
$result = mysqli_query($conn, "SELECT * FROM items");
?>
<div class="w3-container">
	<h1> Welcome to the Grocery List. 322 Peps !</h1>
<form name="frmItems" method="post" action="">
	<div class="w3-responsive">
	<table class="w3-table-all w3-large">
		 <thead>
      	  <tr class="w3-orange">
			<th></th>
			<th>Name</th>
			<th>Available Quantity</th>
			<th>Description</th>
			<th>Last Updated</th>
		  </tr>
    	</thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
		<tr class="<?php if(isset($classname)) echo $classname;?> w3-large">
			<td><input type="checkbox" name="items[]" class="w3-check" value="<?php echo $row["itemId"]; ?>" ></td>
			<td><?php echo $row["itemName"]; ?></td>
			<td><?php echo $row["quantity"]; ?></td>
			<td><?php echo $row["description"]; ?></td>
			<td><?php echo $row["updated"]; ?></td>
		</tr>
<?php
$i++;
}
?>
</table>
</div>
	<div class="w3-section w3-center">
	<input type="button" name="update" value="Update" class="ww3-button w3-large" onClick="setUpdateAction();" /> &nbsp &nbsp
				<input type="button" name="delete" value="Delete" class="ww3-button w3-large"  onClick="setDeleteAction();" />
			</div>
</form>
		<div class="w3-section w3-center">
			<a href="add.php" class="ww3-button w3-large">Click here to add record </a>
		</div>
		<div class="w3-section">
			<h4>Please select every item you want to update the quantity. For adding an item to the list please select the link below or access it via navigation bar.</h4>
		</div>

</div>
<?php 
$site = "Home";
include("footer.php"); ?>
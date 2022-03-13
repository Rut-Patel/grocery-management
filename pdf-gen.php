<?php
 
$title = "Your List is being Proccessed";
include("header.php");	
?>
<form name="frnreport" method="post" action="pdf_processing.php" class="w3-container w3-card">
			<br/>
            <input type="submit" name="generate" value="Generate the Report Here" class="ww3-button w3-yellow w3-round">
            <br/>

</form>
<?php 
$site = "Report";
include("footer.php"); ?>
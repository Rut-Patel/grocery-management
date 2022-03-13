

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
<footer>
    <div class="w3-container w3-black w3-padding-16" >
        <div class="w3-right">
      &copy; <?php echo $site ?>,2022
    </div>
    <div class="w3-botton-left">
      <a href="about.php" class="fa fa-facebook"></a>
    <a href="about.php" class="fa fa-instagram"></a>
    <a href="about.php" class="fa fa-pinterest"></a>
    <a href="mailto:patelrut2623@gmail.com" class="fa fa-inbox"></a>
    </div>
    </div>    
</footer>
</div>
</body>
</html><?php close_con($conn);?>
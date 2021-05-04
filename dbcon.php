<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "major";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   if(!$con) {
?>
<script>
alert("Error in Connection");
</script>
<?php
   }
?>
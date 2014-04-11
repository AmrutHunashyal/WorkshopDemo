
 <?php
 
require 'conn.php';

$query1 = "INSERT INTO members VALUES ('$_POST[FirstName]','$_POST[LastName]','$_POST[email]','$_POST[mob_no]');";
$result1=mysql_query($query1);



if($result1)
{
echo "<script>
window.location='index.php';
alert('Successfull Insertion ..');
</script>";

}
else
{
   echo "<script>
alert('ERROR in Registration TRY Again !!');

</script>";
  
}

?>

 </html>

<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"products");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM produtcs");
?>


<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
	$n= mysqli_num_rows($result);
	
?>

<table>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>

		
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["img"]; ?></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php

}


else{
    echo "No result found";
}
?>
 </body>
</html>


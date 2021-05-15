


<?php

$servername= "localhost";   
$username= "root";
$password= "";
$dbname= "TestZad";

$conn= mysqli_connect($servername, $username, $password, $dbname);
$id=$_GET["action"];
$query2="SELECT * FROM Zad WHERE ID='".$id."'";


if(!empty($_POST["ID"]) && isset($_POST["ID"]) ){
	$idEddit=$_POST["ID"];
	$nameEddit=$_POST["name"];
	$emailEddit=$_POST["email"];
	$commentEddit=$_POST["comment"];
	
	
	$queryUpdate = "UPDATE Zad SET Name='".$nameEddit."',Email='".$emailEddit."',Comment='".$commentEddit."' WHERE ID='".$idEddit."'";
    
	$result1=mysqli_query($conn, $queryUpdate);
	
	
	
	if (!$result1) {
        die('Error: ' .mysqli_error());
    }
     else{
     echo "Entry added successfully";
	 unset($idEddit,$nameEddit,$emailEddit,$commentEddit,$_POST);
	 }
	

}
    else{
	
	
	

    $result = mysqli_query($conn, $query2);
$row = mysqli_fetch_assoc($result);

?>
<form action="edit.php" method = "POST" >
  <label>Name
  <input type="text" id="name" value="<?=$row["Name"]?>" name="name"></label><br>
  <label>Email
  <input type="text" id="email" value="<?=$row["Email"]?>" name="email"><br>
  </label>
 <label><p><b>Comment:</b></p>
    <p><textarea rows="10" cols="45" name="comment"><?=$row["Comment"]?></textarea></p>
  </label>
  <input type="hidden" value="<?=$id?>" name="ID">
    <input type="submit" value="Редактирование"><br>  
    
</form>

<?php
}


?>

<?php

$servername= "localhost";   
$username= "root";
$password= "";
$dbname= "TestZad";
$conn= mysqli_connect($servername, $username, $password, $dbname);

if(!empty($_GET["action"])){
	$id=$_GET["action"];
    $queryDel="DELETE FROM Zad WHERE ID='".$id."'";
    
	$result=mysqli_query($conn,$queryDel);
    
	
	if (!$result) {
        die('Error: ' .mysqli_error());
    }
     else{
     echo "ЗАПИСЬ УДАЛЕНА УРАААААААААААА, id=" . $id;
	 unset($id,$result,$_GET);
	 }
}

$query = "SELECT * FROM Zad";
    $result = mysqli_query($conn, $query);
    echo "<table border=1>";
    echo "<tr><th>Name</th><th>Email</th><th>Comment</th><th>File</th></tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		
		echo "<td>" . $row["Name"] . "</td>";
	    echo "<td>" . $row["Email"] . "</td>";
	    echo "<td>" . $row["Comment"] . "</td>";
	    echo "<td>" . $row["File"] . "</td>";
	    echo "<td><a href='edit.php?action=". $row["ID"] ."'>редактировать</td>";
		echo "<td><a href='table.php?action=". $row["ID"] ."'>удалить</td>";
		
		
		
	    echo "</tr>";
	    
	}
	echo "</table>";
	
	
	?>
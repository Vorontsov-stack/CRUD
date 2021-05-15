
<?php
    echo $_FILES['filename']['size'] . '<br>';
	echo $_FILES['filename']['name'] . '<br>';
	echo $_FILES['filename']['tmp_name'] . '<br>';
	
    if(move_uploaded_file($_FILES['filename']['tmp_name'],'uploads/'.$_FILES['filename']['name'])){
		$filename= $_FILES['filename']['name'];
		echo 'Файл скопирован на сервер' . '<br>';
		echo 'Имя файла:';
		echo $_FILES['filename']['name'] . '<br>';
		echo 'Размер файла:';
		echo $_FILES['filename']['size'] . '<br>';
		echo 'Тип файла:';
		echo $_FILES['filename']['type'] . '<br>';
	}else{
		echo 'Файл не скопирован на сервер';
	}

    
$servername= "localhost";   
$username= "root";
$password= "";
$dbname= "TestZad";

$conn= mysqli_connect($servername, $username, $password, $dbname);
    
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $comment = mysqli_real_escape_string($conn,$_POST['comment']);

    $sql = "INSERT INTO Zad (Name, Email, Comment, File) VALUES ('$name', '$email', '$comment', '$filename')";
    $result = mysqli_query($conn, $sql);
    
	if (!$result) {
        die('Error: ' .mysqli_error());
    }
     else{
     echo "Entry added successfully";
	 }
    echo "<br><br><br><br>";

?>
 









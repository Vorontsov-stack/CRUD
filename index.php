 <!DOCTYPE html>
<html>
<head>
<title>Lesson-1</title>
</head>
<body>


<form action="sql.php" method = "POST" enctype="multipart/form-data">
  <label>Name
  <input type="text" id="name" name="name"></label><br>
  <label>Email
  <input type="text" id="email" name="email"><br>
  </label>
 <label><p><b>Comment:</b></p>
    <p><textarea rows="10" cols="45" name="comment"></textarea></p>
  </label>
  <label>File
  <input type="file" id="filename" name="filename"><br>
  </label>
    <input type="submit" value="Отправить"><br>  
    
</form>



<form action="table.php" method = "POST">
<input type="submit" value="Таблица">
</form>









</body>
</html>

<html>
<head>
<title> Upload an image </title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/from/data">
  File:
  <input type="file" name="image" > <input type="submit" value="upload">
</form>
</body>
</html>
<?php
$server="localhost";
$uname="root";
$pw="";
$dbname="project123";

$conn= mysqli_connect($server,$uname,$pw,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  //mysqli_connect("localhost", "root","") or die ("could not connect to the server");
  //mysqli_select_db("project123") or die ("that database could not be found");

  
  $file = $_FILES['image']['tmp_name'];

  if (!isset($file))
     echo "please select file";
  else
  {

     $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
     $image_name = addslashes($_FILES['image']['name']);
     $image_size = getimagesize($_FILES['image']['tmp_name']);

     if($image_size == FALSE)
        echo "that not image ";

     else
     {

         if (!$insert= mysqli_query("INSERT INTO user_info (image) VALUES ('$image')"))
             echo "Problem";

         else
         {

             echo "error";
			 //"image: <p /> your image <p /><img src='view.php?id="id"'>";
         }
     }


 }
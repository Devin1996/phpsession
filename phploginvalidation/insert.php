<?php
include_once 'dbcon.php'


?>
<html>
<head></head>

<body>
<?php

$sql = "INSERT INTO users (id, username, password) VALUES (".$_GET['id'].",'".$_GET['name']."','".$_GET['pw']."')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error insering record: " . $conn->error;
}

$conn->close();
?>

</body>




</html>
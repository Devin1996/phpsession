<?php
include_once 'dbcon.php'


?>
<html>
<head></head>

<body>
<?php

$sql = "UPDATE users SET password = '".$_GET['npw']."' WHERE id =".$_GET['id']." AND password='".$_GET['pw']."'";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

</body>




</html>
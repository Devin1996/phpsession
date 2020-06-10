<?php
include_once 'dbcon.php'


?>
<html>
<head></head>

<body>
<?php

$sql = "DELETE FROM users WHERE id=".$_GET["id"];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

</body>




</html>
<!DOCTYPE html>

<html>
<head>
    <title>Insert into Mysql</title>
    </head>
	<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
		<input type="submit" name="submit" value="submit">
		</form>
<?php
		if(isset($_POST['submit'])){
			if (getimagesize($_FILES['image']['tmp_name'])==FALSE) {
				echo "Failed";
			}
			else {
				$name=addslashes($_FILES['image']['name']);
				$image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
				saveimage($name,$image);
			}
		}

		function saveimage($name, $image){
			$con = mysqli_connect("localhost","root","","testimage");
			$sql="insert into test(name,image) values('$name','$image')";
			$query=mysqli_query($con,$sql);

			if ($query) {
				echo "Success";
			}
			else{
				echo "Not uploaded";
			}
		}
		display();

		function display(){
			$con = mysqli_connect("localhost","root","","testimage");
			$sql="select * from test";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);
			for($i=0; $i < $num ; $i++){
				$result=mysqli_fetch_array($query);
				$img=$result['image'];
				echo '<img src="data:image;base64,'.$img.'">';

			}

		}

		?>

		</body>
		</html>
 <?php
 $id	=$_POST['id'];
 $name	=$_POST['name'];
 $email	=$_POST['email'];
 $phone =$_POST['phone'];
 $password	=$_POST['password'];

 $conn= new mysqli('localhost','root', '','shindorydb');
 if($conn->connect_error){
 	die('Connection Failed : '.$conn->connect_error);

 }else{
 	$stmt = $conn->prepare("insert into registration(id,name,email,phone,password) values(?,?,?,?,?)");
 	$stmt->bind_param("issis",$id,$name,$email,$phone,$password);
 	$stmt->execute();
 	echo "registration successfully...";
 	$stmt->close();
 	$conn->close();
 }
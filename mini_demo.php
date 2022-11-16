 <!DOCTYPE html>
<html>
<head>
<body style="background-color:powderblue;">
<h1 style="border:2px solid Tomato;">TEST</h1>
<form action=""method="POST">
</head>
<body>
<div>
<label>ID</label>
<input type="number" placeholder="Enter ID" name="ID"  required>
</div>
<div>
<label>NAME</label>
<input type="text" placeholder="Enter Name" name="name" required>
</div>
<div>
<left><button type="submit">submit</button></left
</div>
</body>
</html> 
 <?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$servername = "localhost";
$username = "labuser";
$password = "123";
$dbname = "ansil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connected succesfully";

$id = $_POST["ID"];
$name = $_POST["name"];
$sql = "INSERT INTO test(ID,NAME)
VALUES ($id, '$name')";

if (mysqli_query($conn,$sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

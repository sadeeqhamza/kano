<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/mystyle.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
          <div class="navbar-fixed">
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Output</a>
      </div>
    </nav>
  </div>
<?php
$servername = "gazelle.arvixe.com";
$username = "sid0793_sid0793";
$password = "sadiqh2";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$group = $_POST["group"];
$place = $_POST["place"];
$services = $_POST["services"];
$rating = $_POST["rating"];
$lati = $_POST["lati"];
$long = $_POST["long"];

$sql = "SELECT sid0793_kanoDatabase.group.group_id
FROM sid0793_kanoDatabase.group
WHERE sid0793_kanoDatabase.group.group_name = '$group';";

$result = mysqli_query($conn, $sql);
if(!$result){
	die("Not Succesfull!");
}
while ($row = mysqli_fetch_row($result)) {

	$new_group_id = $row[0];
}

$sqlloc .="INSERT INTO `sid0793_kanoDatabase`.`locations` (`group_id`, `place_name`, `services`, `lat`, `lng`, `rating`) VALUES ('$new_group_id','$place','$services','$lati','$long','$rating');";


if ($conn->query($sqlloc) === TRUE) {
    echo "<br> You can now exit";
    echo '<br><br><a href="index.php" class="waves-effect waves-light btn" style="left:50%"><i class="material-icons left"></i>Add More Place</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>

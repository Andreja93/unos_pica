<?php require_once 'functions.php';

$name = $_POST['name'];
$dose = $_POST['dose'];
$price = $_POST['price'];

$sql = "INSERT INTO drink VALUES ('NULL','$name','$dose','$price')";
$query = mysqli_query(db(),$sql);
if ($query) {
    header("Location: index.php");
}

?>
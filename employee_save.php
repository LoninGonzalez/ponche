
<?php
if (!isset($_POST["name"])) {
    exit("No data provided");
}
include_once "functions.php";
$name = $_POST["name"];
saveEmployee($name);
header("Location: employees.php");

if (!isset($_POST["lastname"])) {
    exit("No data provided");
}
include_once "functions.php";
$lastname = $_POST["lastname"];
saveEmployee($lastname);
header("Location: employees.php");

if (!isset($_POST["position"])) {
    exit("No data provided");
}
include_once "functions.php";
$position = $_POST["position"];
saveEmployee($position);
header("Location: employees.php");

if (!isset($_POST["schedule"])) {
    exit("No data provided");
}
include_once "functions.php";
$schedule = $_POST["schedule"];
saveEmployee($schedule);
header("Location: employees.php");

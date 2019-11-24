
<?php



$host="localhost";
//$port=3306;
//$socket="";
$user="root";
$password="root@123";
$dbname="sakila";

$con = new mysqli($host, $user, $password, $dbname)
	or die ('Could not connect to the database server' . mysqli_connect_error());
echo "connected";


$query = "SELECT distinct * from links where LINK IN  (Select link from alumna where NAME IN( SELECT Name FROM geo_tags where BIRTHPLACE = \"Maryland\" OR BIRTHPLACE like \"%New York%\"))";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($field1, $field2);
    while ($stmt->fetch()) {
        printf("%s, %s\n", $field1, $field2);
    }
    $stmt->close();
}
$con->close();



?>
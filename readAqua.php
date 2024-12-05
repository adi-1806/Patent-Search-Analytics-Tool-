<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM aquvsations WHERE AcquiredBy like '" . $_POST["keyword"] . "%' ORDER BY AcquiredBy  LIMIT 0,15";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $country) {
?>
<a href="aquv.php?id=<?php echo $country["SNo"]; ?> "><li onClick="selectCountry('<?php echo $country["AcquiredBy"]; ?>');"><?php echo $country["AcquiredBy"]; ?></li> </a>
<?php } ?>
</ul>
<?php } 
else
{
    echo"<br>";
    echo"<br>";
    echo 'No data';

}
} ?>

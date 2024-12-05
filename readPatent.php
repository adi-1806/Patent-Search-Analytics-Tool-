<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM patent_list_companies WHERE ORGANIZATION like '" . $_POST["keyword"] . "%' OR TECHNOLOGYAREA like '" . $_POST["keyword"] . "%'  ORDER BY ORGANIZATION LIMIT 0,300";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $country) {
?>
<a target="_blank" href="<?php echo $country["URL"]; ?> "><li onClick="selectCountry('<?php echo $country["ORGANIZATION"]; ?>');"><?php echo $country["ORGANIZATION"]; ?></li> </a>
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
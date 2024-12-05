<?php

$con=mysqli_connect("localhost","root","","backend");


?>





<div class="container">
<table class="table col-md-12" border="1">

  <thead class="thead-light">
    <tr>
     
      <th scope="col">SNo</th>
      <th scope="col">CompanyName</th>
      <th scope="col">Companyprofile</th>
      <th scope="col">Country</th>
      <th scope="col">AcquiredYear</th>
      <th scope="col">AcquiredBy</th>   

    </tr>
  </thead>
<tbody>
<?php
$sql=mysqli_query($con,"select * from aquvsations WHERE AcquiredBy like '" . $_GET["keyword"] . "%' ORDER BY AcquiredBy ");
while($result=mysqli_fetch_array($sql))
{
?>
    <tr>
     
      <td><?php echo $result['SNo']; ?></td>
      <td><?php echo $result['CompanyName']; ?></td>
      <td><?php echo $result['Companyprofile']; ?></td>
      <td><?php echo $result['Country']; ?></td>
      <td><?php echo $result['AcquiredYear']; ?></td>
      <td><?php echo $result['AcquiredBy']; ?></td>
      
    </tr>
 <?php } ?>
  </tbody>
</table>
</div>
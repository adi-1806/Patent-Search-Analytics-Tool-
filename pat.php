<?php

$con=mysqli_connect("localhost","root","","backend");


?>





<div class="container">
<table class="table col-md-12" border="1">
  <thead class="thead-light">
    <tr>
     
      <th scope="col">SNO</th>
      <th scope="col">PATENT REF</th>
      <th scope="col">COUNTRY</th>
      <th scope="col">PATENT TITLE</th>
      <th scope="col">ORGANIZATION</th>
      <th scope="col">COMPANY</th>   
      <th scope="col">PUBLISHED DATE</th>   
      <th scope="col">FILED DATE</th>
      <th scope="col">TECHNOLOGYAREA</th>      
      <th scope="col">URL</th>   
    </tr>
  </thead>
<tbody>
<?php
$keyword=$_GET['keyword'];
$sql=mysqli_query($con,"select * from patent_list_companies where ORGANIZATION like '" . $keyword . "%' OR TECHNOLOGYAREA like '" . $keyword . "%'  ORDER BY ORGANIZATION LIMIT 0,10000");
while($result=mysqli_fetch_array($sql))
{
?>
    <tr>
     
      <td><?php echo $result['SNO']; ?></td>
      <td><?php echo $result['PATENT REF']; ?></td>
      <td><?php echo $result['COUNTRY']; ?></td>
      <td><?php echo $result['PATENT TITLE']; ?></td>
      <td><?php echo $result['ORGANIZATION']; ?></td>
      <td><?php echo $result['COMPANY']; ?></td>
      <td><?php echo $result['PUBLICATION DATE']; ?></td>
      <td><?php echo $result['FILED DATE']; ?></td>
      <td><?php echo $result['TECHNOLOGYAREA']; ?></td>
      
      <td><a target="_blank" href="<?php echo $result['URL']; ?>"><?php echo $result['URL']; ?></a></td>
      
    </tr>
 <?php } ?>
  </tbody>
</table>
</div>
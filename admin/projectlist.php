<?php  
include 'header.php';    
?><div class="container">
<div>
        <h2 style="text-align:center:">Project List Dashboard</h1>
    </div>
    <div>
        <a class="btn btn-outline-info" href="addproject.php" target="_blank" rel="noopener noreferrer">Add Project</a>
    </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Img</th>
      <th scope="col">Category</th>
      <th scope="col">Technology</th>
      <th scope="col">Client</th>
      <th scope="col">url</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
  <?php  
include 'db.php';


$query="SELECT * FROM project";
$run=mysqli_query($conn,$query);
if($run)
{
   while($row=mysqli_fetch_assoc($run))
   {
    
?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['title_desc']?></td>
      <td><?php echo $row['img']?></td>
      <td><?php echo $row['category']?></td>
      <td><?php echo $row['technology']?></td>
      <td><?php echo $row['client']?></td>
      <td><?php echo $row['link1']?></td>
      <td><?php echo $row['date']?></td>
 
      <td><button  class="btn btn-danger"type="submit">Delete</button> <button  class="btn btn-info"type="submit">edit</button></td>
    </tr>
    <?php }}?>
  </tbody>
</table>
   </div>
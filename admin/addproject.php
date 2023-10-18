<?php include 'header.php';?>


<div class="container">
    <div>
        <h2 style="text-align:center:">Add Project Details</h1>
    </div>
<form action="postproject.php" method="post"  enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-6 col-sm-12 form-group">
      <input  name="title"  type="text" class="form-control form-group" placeholder="Project title">
      <input name="category" type="text" class="form-control form-group" placeholder="Category">
      <input name="img" type="file" class="form-control form-group" >
      <input name="date"  type="date" class="form-control form-group" placeholder="select date">
      <input name="technology"  type="text" class="form-control form-group" placeholder="Used Technology">
    </div>
    <div class="col-lg-6 form-group">
   
 
    
    <input name="client"  type="text" class="form-control form-group" placeholder="Client Name">
    <input name="link1"  type="text" class="form-control form-group" placeholder="url of project">
    <textarea name="title_desc" type="text" cols="1" rows="3" class="form-control form-group" placeholder=" description"></textarea>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button></a>
</form>
</div>
<!-- < -->
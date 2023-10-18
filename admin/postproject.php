<?php 
if(isset($_POST['submit']))
{   
    include 'db.php';
  
    $title=$_POST['title'];
    $title_desc=$_POST['title_desc'];
    // $img=$_POST['img'];
    $category=$_POST['category'];
    
    $date=date('d-m-y', strtotime($_POST['date']));
    // $date=$_POST['date'];
    $technology=$_POST['technology'];
    $client=$_POST['client'];
    $link1=$_POST['link1'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $file_name=time()."_".basename($_FILES['img']['name']);
    $tmp_name=$_FILES['img']['tmp_name'];
    $target_file="img-project/";
    $target_dir=$target_file.$file_name;

    $query="INSERT INTO `project`(`title`, `title_desc`, `img`, `category`, `date`, `link1`,technology,client) 
    VALUES ('$title','$title_desc','$file_name','$category','$date','$link1','$technology','$client')";
     $run=mysqli_query($conn,$query);

     if(move_uploaded_file($tmp_name,$target_dir))
     {
       echo "<script>alert('Project Add successfully..');window.location.href='projectlist.php';</script>";
     }
     else
     {
       echo "<script>alert('something went wrong');window.location.href='projectlist.php';</script>";
     }
}

    //  old
    
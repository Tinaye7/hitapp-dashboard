<?php
include 'upload.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title> POSTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #00135D;
  overflow-x: hidden;
  padding-top: 20px;
  color: #262626;
}

img{
    margin-left: 10%;
    background-color: white;
    
}

.my-float{
	margin-top:22px;
}
.hidetext {
    -webkit-text-security: circle;
     }


/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6% 8% 6% 16%;
  text-decoration: none;
  font-size: 100%;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.container {
  margin-left: 15%; /* Same as the width of the sidenav */
  font-size: 100; /* Increased text to enable scrolling */
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div class="sidenav">
    <img src="./../images/Hit.png">
    <a href="./../home.html">DashBoard</a>
    <a href="../students/students.html">Students</a>
    <a href="../news/news.html">News</a>
    <a href="../posts/posts.php">Posts</a>
    <a href="../Admin/contact.html">Admin</a>
    
   </div>
<div class="container">
       <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="./../images/Hit.png" alt="" width="240" height="64">
                <h2>CLUB POSTS</h2>
       </div>
   <div class="upfrm">
       <?php if (!empty($statusMsg)){?>
    <p class="status-msg"> <?php echo $statusMsg;?></p> 
    <?php } ?>
      <form action="" method="post" enctype="multipart/form-data">
      Select file to upload:
      <input type= "file" name="file">
      <input type="submit" name="submit" value="Upload">
      </form>
      </div>
      <div class="gallery">
          <div class="gcon">
              <h2> uploaded files</h2>
              <?php
              include 'dbConfig.php';
              $query = $db->query("SELECT * FROM files ORDER BY uploaded_on DESC");

              IF($query->num_rows>0){
                  while($row=$query->fetch_assoc()){
                      $imageURL = 'uploads/'.$row["file_name"];
                      ?>
                      <img src="<?php echo $imageURL;?>" alt=""/>
                      <?php
              
                  }
              }
              else{
                  ?>
                  <p> No file(s) found...</p>
                  <?php
              }
              ?>
      </div>
            </div>
            </div>    
      </body>
</html>
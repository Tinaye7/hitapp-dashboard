<?php
include 'dbConfig.php';

$statusMsg = '';

$targetDir= "C:/xampp/htdocs/stud/posts";
if(isset($_POST ["submit"])){
    if (!empty($_FILES["file"]["name"])){
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath=$targetDir.$fileName;
        $fileType= pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $allowTypes=array ('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType,$allowTypes)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath)){
                $insert =$db->query("INSERT into posts(file_name,uploaded_on) VALUES ('".$fileName."',NOW())");
                if($insert){
                    $statusMsg="The file".$fileName."has been uploaded successfully";
                }else{
                    $statusMsg="file upload failed";
                }
            }else{
                    $statusMsg="there was an error uploading your file";
                }
            }else{
                    $statusMsg='sorry, only certain file formats allowed';
                }
            }else{
                    $statusMsg='please select file to upload';
                }
            }
    
    

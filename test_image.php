<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="test_image.php" method="POST" enctype="multipart/form-data">
  <input type="file" id="lname" name="file"><br><br>
  <button type="submit" name="submit">upload image</button>
</form> 
</body>
</html>


<?php 
if(isset($_POST["submit"]))
{
    $file=$_FILES['file'];
    print_r($file); //to see info relating to file
     $filename=$_FILES["file"]["name"];
     $fileTmpname=$_FILES["file"]["tmp_name"];
     $filesize=$_FILES["file"]["size"];
     $fileerror=$_FILES["file"]["error"];
     $filetype=$_FILES["file"]["type"];
     //file info ends

     /*
      file name be same for two user so giving new name must
      after exploding name into extensions and name file
     */
     $filenamearray=explode('.',$filename);
     $fileExt=strtolower(end($filenamearray));
     //allowed file type to upload
     $allowed=array('jpg','jpeg','png');
     //if file type is present in allowed files then only upload
     if(in_array($fileExt,$allowed))
     {
         if($fileerror==0)//to cheak no error ocuured while uploading
         {
           if($filesize<1000000)//file size should be uploadable
           {
                 $filenewname=uniqid('',true).".".$fileExt;
                 //in above line unique name ,file ext as exploded 
                 $destination='upload/'.$filenewname;
                 move_uploaded_file($fileTmpname,$destination);
                 //to move file it should be stired temp ,thats why tmp name is used
                 //to store info in database
                 $response = file_get_contents("http://127.0.0.1:5000/api/image?source=".$destination);
                 $json = json_decode($response);
                 print_r($json);
                // header("location:test_image.php?sucsess");
                 
           }
           else
           {
            echo "file size too large";
           }
         }
         else
         {
             echo "error in uploadin";
         }

     }
     else
     {
         echo "you cant upload this file type";
     }


}

?>
<?php


?>
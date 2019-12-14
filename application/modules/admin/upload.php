<?php

  if(empty($_FILES['file']))
  {
      exit();
  }
  $errorImgFile = './xfile/blog/failedImg/'.$newfilename;
  $temp = explode(".", $_FILES["file"]["name"]);
  $newfilename = round(microtime(true)) . '.' . end($temp);
  $destinationFilePath = './xfile/blog'.$newfilename ;
  if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){
      echo $errorImgFile;
  }
  else{
      echo $destinationFilePath;
  }

?>

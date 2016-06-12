<?php
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      
      $extensions= array("txt");
      
      if(!in_array($file_ext,$extensions)=== true){
         $errors[]="vali txt file.";
      }
            
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         echo "Laeti yles";
      }else{
		 foreach($errors as $e){
			 echo "<div style='color:red'>".$e."</div>";
		 }
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="file"/>
         <input type="submit"/>
      </form>
      
   </body>
</html>
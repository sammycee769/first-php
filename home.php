<!-- <?php
// $pagetitle="Home Page";
// require_once('assets/header.php');
// ?>
// <?php
// echo $_SERVER["REQUEST_METHOD"]."<br/>";
// ?>
<form action='' method='post'> 
Name:<input type='text' name='john'><br/>
Age:<input type='number' name='age'><br/>
 <input type='submit' value='submit'><br/>
</form>
<?php 
//  if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = $_POST['john'];
//   $age = $_POST['age'];
//   echo "Your name is: ". $name. "<br/>";
//   echo "Your age is: ". $age. "<br/>";
// echo $_POST['john'] . "<br/>";
// echo $_POST['age'] . "<br/>";
 
// $entry = $_POST['john'];
// if(preg_match_all('/^0[789][01]\d{8}$|^\+234[789][01]\d{8}$/', $entry)){
// echo "$entry is a valid number";
// }else{
//   echo "$entry is not a number";
// }
//  }
// ?>
 <!-- File upload -->
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $file = $_FILES["john"];
    echo"<pre>";
    print_r($file);
    echo"</pre>";
    $filesize = 3 * 1024 * 1024;
    if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png'){
        if($file['size'] <= $filesize){
            $filename = uniqid('image_'). "." . pathinfo($file['name'],
            PATHINFO_EXTENSION);
            $filelocation = "uploads/" . $filename;
            move_uploaded_file($file['tmp_name'], $filelocation);
            echo "upload successfully";
        }else{
            echo "File size is too large";
        }
    }else{
        echo $file['type'] . "is not supported";
    }
  }
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="john"/><br/>
    <input type="submit" value="upload"/>
</form>
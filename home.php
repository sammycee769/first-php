<?php
echo $_SERVER["REQUEST_METHOD"]."<br/>";
?>
<form action='' method='post'> 
Name:<input type='text' name='job'><br>
Age:<input type='number' name='age'><br>
 <input type='submit' value='submit'><br>
</form>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['job'];
  $age = $_POST['age'];
  echo "Your name is: ". $name. "<br>";
  echo "Your age is: ". $age. "<br>";
// echo $_POST['job'] . "<br>";
// echo $_POST['age'] . "<br>";
 }
 
?>
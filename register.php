<?php
$pagetitle="User Registration";
require_once("assets/header.php");

$firstnameError="";
?>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = ($_POST["firstname"]);
    $lastname =($_POST["lastname"]);
    $email = ($_POST["email"]);
    $phone = ($_POST["phone"]);
    $DOB = ($_POST["DOB"]);
    $gender = ($_POST["gender"]);
    $password =($_POST["password"]);
    $cpassword = ($_POST["cpassword"]);

    if (empty($firstname)) {
        $firstnameError = "Firstname is required";
    }

    $entry = $_POST['phone'];
if(preg_match_all('/^0[789][01]\d{8}$|^\+234[789][01]\d{8}$/', $entry)){
echo "$entry is a valid number";
}else{
  echo "$entry is not a number<br>";
}
 
    echo "$firstname,$lastname,$email,$phone,$DOB,$gender,$password,$cpassword";
}
?>

<main class="container-fluid col-8 bg-secondary my-5 p-3 rounded">
    <h1>User Registration</h1>
    <form method="post" autocomplete="off">
        <div class="d-flex flex-row gap-3">
            <div class="d-flex flex-column w-100">
                <input type="text" class="form-control" placeholder="firstname" name="firstname"/>
                <span class="text-danger"<?=$firstnameError ?>>
            </div>
            <div class="d-flex flex-column w-100">
            <input type="text" class="form-control" placeholder="lastname" name="lastname" required/>
            </div>
        </div>
        <div class="d-flex gap-3 mt-2" >
            <input type="email" class="form-control" placeholder="email (example@gmail.com)" name="email" required/>
            <input type="tel" class="form-control" placeholder="Phone number(08012345678)" name="phone" required/>
        </div>

        <div class="d-flex gap-3 mt-2">
            <input type="date" class="form-control" placeholder="Date of Birth" name="DOB" required/>
            <select class="form-control" name="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="d-flex gap-3 mt-2">
            <input type="password" class="form-control" placeholder="Password" name="password" required/>
            <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required/>
        </div>

        <div class="mt-4">
            <input type="submit" class="form-control btn btn-primary"value="Register User"/>
        </div>
    </form>
</main>
<?php
include("conn.php");

$NameError = "";
$EmailError = "";
$phone_noError = "";
$pswError = "";
$condition = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = trim($_POST["Name"]);
    $Email = trim($_POST["Email"]);
    $phone_no = trim($_POST["phone_no"]);
    $psw = trim($_POST["psw"]);

    if (empty($Name) ) { 
        $condition = true;
        $NameError = "Please enter  name ";
    }else{
        if(strlen($Name) <= 5)
        $NameError="please select length 5";
    }

    if (empty($Email)){
        $condition = true;
        $EmailError="please enter a valid email";
    } 
    else{
        if(strpos($Email, '@') === false && strpos($Email, '.') === false) 
        $EmailError = "Please enter the @ and . cha";
    }

    if (empty($phone_no)){
        $condition = true;
        $phone_noError="Please enter a valid phone number (more than 10 digits). ";
    } 
    else{
        if( strlen($phone_no) == 13) {
        $phone_noError = "please enter length";
    }

    if (empty($psw) ){
        $condition = true;
        $pswError="please enter length";
    }
    else{
        if( strlen($psw) <= 6)
        $pswError = "Please enter a password (more than 6 characters).";
    }
    

if (!$condition){
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$phone_no=$_POST["phone_no"];
$psw=$_POST["psw"];
  
        $sql = "INSERT INTO signup (Name, Email, phone_no, psw) VALUES ('$Name', '$Email', '$phone_no', '$psw')";
        if ($s->query($sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data";
        }
    }

}
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <h1>Signup</h1>
        <label>Name</label>
        <input type="text" name="Name" required><br>
        <?php
        if(!empty($Name))
         echo $NameError; ?><br>  
        <label>Email</label>
        <input type="email" name="Email" required><br>
        <?php echo $EmailError; ?><br>
        <label>Phone Number</label>
        <input type="text" name="phone_no" required><br>
        <?php echo $phone_noError; ?><br>
        <label>Password</label>
        <input type="password" name="psw" required><br>
        <?php echo $pswError; ?><br>
        <input type="submit">
    </form>
</body>

</html>

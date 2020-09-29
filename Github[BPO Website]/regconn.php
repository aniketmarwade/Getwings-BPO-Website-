
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    
  <?php

$name = $email = $phone = $address = $city = $pincode = $interest = "";

$nameErr = $emailErr = $phoneErr = $addressErr = $cityErr = $pincodeErr = $interestErr ="";

$successMsg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $n = test_input($_POST["name"]);
  $e = test_input($_POST["email"]);
  $a = test_input($_POST["address"]);
  $c = test_input($_POST["city"]);
  $pi = test_input($_POST["pincode"]);
  $p = test_input($_POST["phone"]);
  $i = test_input($_POST["interest"]);

  if (empty($n)){
    $nameErr = "Name is required";
  } 
  else if (!preg_match("/^[a-zA-Z ]*$/",$n)) {
      $nameErr = "Only letters and white space allowed";
    }
    else{
      $name = $n;
  }
  
  if (empty($e)) {
    $emailErr = "Email is required";
  } 
  else if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  else{
      $email = $e;
  }
    
  if (empty($a)) {
    $addressErr = "Address is required";
  } 
  else{
    $address = $a;
  }
  if (empty($p)) {
    $phoneErr = "Phone is required";
  } 
  else{
    $phone = $p;
  }
  if (empty($c)) {
    $cityErr = "city is required";
  } 
  else{
    $city = $c;
  }
  if (empty($pi)) {
    $pincodeErr = "Pincode is required";
  } 
  else{
    $pincode = $pi;
  }
  if (empty($i)) {
    $interestErr = "Interest is required";
  } 
  else{
    $interest = $i;
  }
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "getwings1";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

if(!empty($name) and !empty($email) and !empty($address) and !empty($phone) and !empty($city) and !empty($pincode) and !empty($interest)){
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql ="INSERT INTO registration1 (id, name, email, phone, address, city, pincode, interest) VALUES (NULL,'$name','$email', '$phone', '$address','$city','$pincode','$interest')";
    $res = mysqli_query($conn, $sql);
    if ($res<0) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    else{
        echo"Thank you for your message. I will get back to you soon.";
        ?> <br><a href="career.php">BACK</a> <?php
    }
    mysqli_close($conn);
}
else{
  echo"Please fill the form properly... somthing is missing...!!!";
   ?> 
    <br><a href="career.php">BACK</a> <?php
}



}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

  </body>
  </html>
  
  
  
  
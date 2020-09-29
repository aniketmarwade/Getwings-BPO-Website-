
    <?php

$name = $email = $phone = $msg = "";

$nameErr = $emailErr = $phoneErr = $msgErr = "";

$successMsg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $n = test_input($_POST["name"]);
  $e = test_input($_POST["email"]);
  $m = test_input($_POST["msg"]);;
  $p = test_input($_POST["phone"]);;

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
    
  if (empty($m)) {
    $msgErr = "Message is required";
  } 
  else{
    $msg = $m;
  }
  if (empty($p)) {
    $phoneErr = "Phone is required";
  } 
  else{
    $phone = $p;
  }

  $servername = "sql111.ezyro.com";
  $username = "ezyro_26799414";
  $password = "gxq6tvmfiooy";
  $dbname = "ezyro_26799414_getwings1";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

if(!(empty($name)) and !(empty($email)) and !(empty($msg)) and !(empty($phone))){
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql ="INSERT INTO contact1 (id, name, email, phone, msg) VALUES (NULL,'$name','$email', '$phone', '$msg')";
    $res = mysqli_query($conn, $sql);
    if ($res<0) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    else{
        $successMsg="Thank you for your message. I will get back to you soon.";
    }
    mysqli_close($conn);
}
  



}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
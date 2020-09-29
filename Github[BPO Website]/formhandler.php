
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Wings</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Pacifico&display=swap" rel="stylesheet">

    <!-- M icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- actual m -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--  custom css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" />

    <!-- aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>
<body>
<div id="modal1" class="modal">
        <div class="modal-content">
          <h4 id="info-modal-heading">Modal Header</h4>
          <p id="info-modal-content">A bunch of text</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
      </div>


      <?php 

$n = test_input($_POST["name"]);
$e = test_input($_POST["email"]);
 $p = test_input($_POST["phone"]);
  $m = test_input($_POST["msg"]);


$name = $email = $phone = $msg = "";
$nameErr = $emailErr = $phoneErr = $msgErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($n)) {
    $nameErr = "Name is required";
  } else {
    $name = $n;
  }

  if (empty($e)) {
    $emailErr = "Email is required";
  } else {
    $email = $e;
  }

  if (empty($p)) {
    $phoneErr = "phone no is required";
  } else {
    $phone = $p;
  }

  if (empty($m)) {
    $msgErr = "Something is required here";
  } else {
    $msg = $m;
  }
if((!empty ($name))and(!empty ($email))and(!empty ($phone))and(!empty ($msg))){
  $servername = "localhost";
$username = "root";
$password = "";
$dbname="getwings1";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "INSERT INTO contact1 (name,email,phone,msg)
VALUES ('$name', '$email', '$phone','$msg')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

else{

  echo '<script type="text/javascript">
       window.onload=toggleModal();
       </script>'
      ;
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
    integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ=="
    crossorigin="anonymous"></script>

<!-- aos javascript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>


<!-- M script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- custom js -->
<script src="js/loader.js"></script>

</html>
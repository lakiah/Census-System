<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCensus</title>
</head>

<body>


<div class="navigation">
  <a class="active" href="#"> Home</a> 
  <a href="#">Search</a> 
  <a href="#">Profile</a> 
  <a href="#">Logout</a>
</div>

<br>
<form name="myForm" action="" onsubmit="return validateForm()" method="GET">

  Id: <input type="text" name="id" required>
  Name: <input type="text" name="name" required>
  Age: <input type="text" name="age" required>
  Gender: <input type="text" name="gender" required>
  Religion: <input type="text" name="religion" required>
  Status: <input type="text" name="status" required>
  Address: <input type="text" name="address" required>
  State: <input type="text" name="state" required>


        <input type="Submit" value="Submit" name="">
        <button type="button" name="delete">Delete</button>
        <input type="reset" value="Reset">

</form>

<br>
<label for="amount">What range of Age are you looking for?: </label><br>
<input type="radio" name="amount" value="1">Below 7<br>
<input type="radio" name="amount" value="2">Above 6 and Below 13<br>
<input type="radio" name="amount" value="3">Above 12 and Below 18<br>
<input type="radio" name="amount" value="4">Above 18 and Below 30<br>
<input type="radio" name="amount" value="5">Above 29 and Below 60<br>
<input type="radio" name="amount" value="6">Above 60 and Below 80<br>
<input type="radio" name="amount" value="7">Above 79 and Below 101<br>

<br><label for="amount1">What Gender are you looking for?: </label><br>
<input type="radio" name="amount1" value="1">M<br>
<input type="radio" name="amount1" value="2">F<br>

<br><label for="amount2">What Religion are you looking for?: </label><br>
<input type="radio" name="amount2" value="1">Islam <br>
<input type="radio" name="amount2" value="2">Christian <br>
<input type="radio" name="amount2" value="3">Hindu <br>
<input type="radio" name="amount2" value="4">Buddha <br>
<input type="radio" name="amount2" value="5">Others <br>

<br><label for="amount3">Which Status are you looking for?: </label><br>
<input type="radio" name="amount3" value="1">Single <br>
<input type="radio" name="amount3" value="2">Married <br>
<input type="radio" name="amount3" value="3">Widow <br>
<input type="radio" name="amount3" value="4">Widower <br>

<br><label for="amount4">Which State are you looking for?: </label><br>
<input type="radio" name="amount4" value="1">Johor <br>
<input type="radio" name="amount4" value="2">Kedah <br>
<input type="radio" name="amount4" value="3">Kelantan <br>
<input type="radio" name="amount4" value="4">Malacca <br>
<input type="radio" name="amount4" value="5">Negeri Sembilan <br>
<input type="radio" name="amount4" value="6">Pahang <br>
<input type="radio" name="amount4" value="7">Penang <br>
<input type="radio" name="amount4" value="8">Perak <br>
<input type="radio" name="amount4" value="9">Perlis <br>
<input type="radio" name="amount4" value="10">Sabah <br>
<input type="radio" name="amount4" value="11">Sarawak <br>
<input type="radio" name="amount4" value="12">Selangor <br>
<input type="radio" name="amount4" value="13">Terengganu <br>
<br><br>
      <input type="Submit" value="Submit" name="">
      <input type="reset" value="Reset">

    <h1> Table of census </h1>
    <ul class = "list-group-item">

        @foreach ($data as $data)
        <li class = "list-group-item">
            <span class = "prefix"> Id </span>
            <span class = "label label-success"> {{$data->id}}</span>
        </li>
        <li class = "list-group-item">
            <span class = "prefix"> Name </span>
            <span class = "label label-success"> {{$data->name}}</span>
        </li>
        <li class = "list-group-item">
            <span class = "prefix"> Age </span>
            <span class = "label label-success"> {{$data->age}}</span>
        </li>
        <li class = "list-group-item">
            <span class = "prefix"> Gender </span>
            <span class = "label label-success"> {{$data->gender}}</span>
        </li>
        <li class = "list-group-item">
            <span class = "prefix"> Religion </span>
            <span class = "label label-success"> {{$data->religion}}</span>
        </li>

        <li class = "list-group-item">
             <span class = "prefix"> Status </span>
             <span class = "label label-success"> {{$data->status}}</span>
        </li>
        <li class = "list-group-item">
            <span class = "prefix"> Address </span>
            <span class = "label label-success"> {{$data->address}}</span>
        </li>

        <li class = "list-group-item">
            <span class = "prefix"> State </span>
            <span class = "label label-success"> {{$data->state}}</span>
        </li>

        <br><br>
        @endforeach
    </ul>


</body>

<?php 

if (isset ($_GET["id"])) {

    $id = $_GET['id'];
$name = $_GET['name'];
$age = $_GET['age'];
$gender = $_GET['gender'];
$religion = $_GET['religion'];
$status = $_GET['status'];
$address = $_GET['address'];
$state = $_GET['state'];
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM census_data WHERE id=$id") or die($mysqli->error());
}

if (!empty($id) || !empty($name) || !empty($age) || !empty($gender)|| !empty($religion)|| !empty($status)|| !empty($address)|| !empty($state)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webapp";

    //create connection now
    $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }

    else {
        $SELECT = "SELECT id FROM census_data Where id = ? Limit 1";
        $INSERT = "INSERT Into census_data (id, name, age, gender, religion, status, address, state) values (?, ?, ?, ?, ?, ?, ?, ?)";

        //Prepare Statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("isisssss", $id, $name, $age, $gender, $religion, $status, $address, $state);
            $stmt->execute();
            echo "New record inserted successfully";        }
    

        else {
        echo "Someone already registered using that id, choose a different id";
             }

    $stmt->close();
    $conn->close();
    }

} else {
    echo "All field are required";
    die();
       }

?>

</html>
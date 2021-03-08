<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['username']) && !empty($_GET['username']) && isset($_GET['username'])){
    $insertsql = 'INSERT INTO subscribers (id, username)
    VALUES (NULL, "'. $_GET['username'] . '")';
    if (mysqli_query($conn, $insertsql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertsql . "<br>" . mysqli_error($conn);
    }

}


$readsql = "SELECT * FROM subscribers";

$result = mysqli_query($conn, $readsql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)) {
      echo "<li>id: " . $row["id"]. " - Name: " . $row["username"]. "</li>";
    }
    echo "</ul>";
  
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

<form>
<input type="text" name="username" />
<input type="submit" value="Dodaj usera" />
</form>
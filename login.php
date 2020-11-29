<?php
   require 'functions.php';
      // code...
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password' ");
      $result = mysqli_fetch_array($query);

     if(empty($username) || empty($password)){
	echo "isidulu";
} else {
      if ($result['username'] == $username && $result['password'] == $password) {
         echo "logged";
      } else {
         echo $password;
      }
}
   

?>

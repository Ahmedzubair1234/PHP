<?php include 'header.php'; ?>

<?php 
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($username && $email && $password) {
		$connection = mysqli_connect('localhost','root','','users');
		if (!$connection) {
			die("Not Connected.". mysqli_error());
		}
		$query = "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$password')";
		$result = mysqli_query($connection,$query);
		if ($result) {
			$msg = "Successfully Signed Up";
		}else{
      die("Not Inserted.". mysqli_error());
    }
	}else{
		echo "Please Fillup All Data";
	}
		
}
?>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="login.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Enter Username">
            <label for="floatingInput">Enter Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="submit">
          <hr class="my-4">
          

            <?php 
            if (isset($msg)) {
              echo "<div class='alert alert-success text-center'>$msg</div>";
            }  ?>
          
        
        </form>
      </div>
    </div>
  </div>



<?php include 'footer.php'; ?>
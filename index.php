<?php require 'header.php'; ?>

<?php

$connection = mysqli_connect('localhost','root','','users');

  if (!$connection) {
    die("Not Connected.". mysqli_error());
  }

  $query = "SELECT * FROM user_info";
  $adanprodan = mysqli_query($connection,$query);
  $count = mysqli_num_rows($adanprodan);

  if ($count > 0) {

  ?>

  <div class="container py-5">
  <table class="table">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
  </thead>


  <?php
        while ( $row = mysqli_fetch_assoc($adanprodan)) {
        
        $id = $row['id'];
        $user = $row['username'];
        $eml = $row['email'];
        $pass = $row['password'];

        ?>
        <tbody>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $user; ?></td>
            <td><?php echo $eml; ?></td>
            <td><?php echo $pass; ?></td>
            <td><a href="delete.php">Delete</a></td>
          </tr>
        </tbody>

        <?php 
        
        }

        ?>
      </table>
      </div>
        <?php
  }else{
    echo "<div class='alert alert-danger text-center'>You Don't Have Any Data in Your Database</div>";
  }

  
?>


  

<?php require 'footer.php'; ?>
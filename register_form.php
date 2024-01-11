<?php
   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['save']))
   {
      $firstname = $_POST['fname'];
      $lastname = $_POST['lname'];
      $email = $_POST['email'];
      $phone= $_POST['phone'];
      $address = $_POST['address'];
   
      

      $request = " insert into users(firstname, lastname, email, phone, address) values('$firstname','$lastname',$email','$phone','$address') ";
      mysqli_query($connection, $request); 

      header('location:register.php'); 
      echo 'Saved Data Successfully';
   }
   else{
      echo 'something went wrong please try again!';
   }

?>
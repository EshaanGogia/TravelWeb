<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send']))
   {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $address= $_POST['addr'];


      $request = " insert into person(f_name,l_name,p_address) values('$firstname','$lastname','$address')";
      mysqli_query($connection, $request);
   
     header('location:tp.php'); 
     echo 'Saved Data Successfully';

    } else{
      echo 'something went wrong please try again!';
   }

?>
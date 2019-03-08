<?php 
    //Connect to database.
    $conn  = mysqli_connect('localhost', 'Micheal', '', 'restaurant_experience');

   //Check Connection.
   if(!$conn){
       echo "Connection Error". mysqli_connect_error();
   }

?>
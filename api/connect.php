<?php

   $connect= mysqli_connect("localhost","root","", "voter") or die ("conection filed!");

   if($connect)
   {
    echo "connected!";

   }
   else{
   echo "Not Connected!";
}
?>
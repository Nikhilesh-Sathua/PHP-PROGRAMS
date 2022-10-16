<?php
   $number=568;
   $sum=0;
   do
   {
     $sum=$sum+$number%10;
     $number/=10;
   } 
   while($number>0);
   echo"sum of digit 568 is $sum";
?>
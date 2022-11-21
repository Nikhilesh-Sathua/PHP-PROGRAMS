<?php
class a
{
    function fun1()
    {
        echo "PHP CLASS";
    }
}
class b extends a
{
    function fun2()

      { 
         echo "PHP OOOPS";
      }

 }

    $obj = new b();
    $obj->fun1();
    ?>
 
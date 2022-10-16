<?php   
    echo "<h3>Example for __FUNCTION__</h3>";    
    
    function test(){    
        
        echo 'The function name is '. __FUNCTION__ . "<br><br>";   
    }    
    test();    
      
    //Magic constant used outside function gives the blank output.    
    function test_function(){    
        echo 'NIKHILESH';    
    }    
    test_function();    
    //give the blank output.   
    echo  __FUNCTION__ . "<br><br>";  
?>  
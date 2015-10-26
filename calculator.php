<?php
    
    $result = 0;
    
    // aadressireal on nupu name
    if(isset($_GET["multiply_numbers"])){
        
        $result = multiply($_GET["var_one"], $_GET["var_two"]);
        
    }
    
    function multiply($x,$y){
        
        $answer = $x * $y;
        
        return $answer;
        
    }


?>
<form method="get" >
    <input name="var_one"> * 
    <input name="var_two">
    <input name="multiply_numbers" type="submit">
<form>
<p>Answer is <?=$result;?> </p>
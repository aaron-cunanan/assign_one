<form action="" method="post">
    <h2>
    <b>Finding GCD</b></h2>
    Input first number:<br><br>
    <input type="number" name="FN" value=""><br><br>
    Input second number:<br><br>
    <input type="number" name="SN" value=""><br><br>
    <input type="submit" name="sub" value=" Submit ">
    

</form>
<?php
if(isset ($_POST['sub']))
{ 
    $FN = $_POST["FN"];
    $SN = $_POST["SN"];

    for($i = 1; $i<=$FN && $i<=$SN ; $i++) 
    {  
        if($FN % $i == 0 && $SN % $i ==0)
        $gcd=$i;
    }
        
        echo "GCD = ".$gcd;
    
}



?>
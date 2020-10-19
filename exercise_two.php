<form action="" method="post">
    <h2>
    <b>Calculator</b></h2>
    Input first number:<br><br>
    <input type="number" name="num1" value=""><br><br>
    Input second number:<br><br>
    <input type="number" name="num2" value=""><br><br>
    <input type="submit" name="a" value=" + ">
    <input type="submit" name="m" value=" * ">
    <input type="submit" name="d" value=" / ">
    <input type="submit" name="s" value=" - ">

</form>
<?php
if(isset ($_POST['a']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $add = $num1+$num2;
    echo "SUM: ".$add;
}

if(isset ($_POST['m']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $prod = $num1*$num2;
    echo "PRODUCT: ".$prod;
}

if(isset ($_POST['d']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $quo = $num1/$num2;
    echo "QUOTIENT: ".$quo;
}

if(isset ($_POST['s']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $diff = $num1-$num2;
    echo "DIFFERENCE: ".$diff;
}


?>
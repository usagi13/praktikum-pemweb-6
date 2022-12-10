<html>
<head>
    <title>TUGAS 6 - 119140029</title>
</head>
<body>
    <div style="float:left; padding-left: 10px;padding-right: 10px; color:blue;">
    <h2>Decimal</h2> 
    </div>
    <div style="float:left; padding-right: 10px;color :green;">
    <h2>to</h2>
    </div>
    </div>
    <div style="float:left; padding-right: 10px;color:red;">
    <h2>Roman</h2>
    </div>
    </div>
    <div style="float:left; padding-right: 10px;color:brown;">
    <h2>Converter</h2>
    </div>
</br>
</br>
</br>
</br>
</br>
<form action ="index.php" method="post">
    <h4>Insert yo numba here : <input type="text" name="number"><br></h4>
    <input type="submit" name="submit"value="Go!">
</form>
<br>
<?php
function convert($getnum){
    $getnum = intval($getnum);
    $result = '';
    $ref = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1); 
    foreach($ref as $roman => $nilai){
    $matches = intval($getnum/$nilai);
    $result.= str_repeat($roman,$matches);
    $getnum = $getnum % $nilai;
    }
    return $result;
}

if(isset($_POST['submit'])){
    $getnum = $_POST['number'];
    echo "The decimal of ".$getnum.", in Roman numerical version is ". convert($getnum).'';
}

?>
</body>
</br>
</br>
</br>
<footer style="color : blue;">M. Ammar Fadhila Ramadhan - 119140029</footer>
</html>

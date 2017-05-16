<form method="post">
    <input type="text" name="datt">
    <input type="submit" value="Отправить">   
</form>
<?php
if (!empty($_REQUEST['datt'])){
    $datte = $_REQUEST['datt'];
    $a = explode("-", $datte);
    $d = $a[0];
    $m = $a[1];
    $y = $a[2];
    if (checkdate($m,$d,$y)){
        echo "Датта коректна " , $datte;
    } else echo "Введите правильно датту.";
    
    
}else
    echo 'Введите датту';






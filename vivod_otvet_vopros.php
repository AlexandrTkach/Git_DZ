<form name="sort">
    <select name="sorting">
        <option name="kat1" value="kat1">Категория 1</option>
        <option name="kat2" value="kat2">Категория 2</option>
        <option name="kat3" value="kat3">Категория 3</option>
    </select>
    <input type="submit" value="Отфильтровать">
</form>
<?php
$file = file('vopros_otvet.txt');
if ($_REQUEST['sorting'] == 'kat2') {
    foreach ($file as $value) {
        $exp = explode(",", $value);
        // var_dump($exp[2]);
        if ($exp[2] == '"Категория 2"
'
        ) {
            echo $exp[0] . ' ' . $exp[1] . ' ' . $exp[2] . '<br>';
            
        }
    }
}
if ($_REQUEST['sorting'] == 'kat1') {
    foreach ($file as $value) {
        $exp = explode(",", $value);
        // var_dump($exp[2]);
        if ($exp[2] == '"Категория 1"
'
        ) {
            echo $exp[0] . ' ' . $exp[1] . ' ' . $exp[2] . '<br>';
            
        }
    }
}
if ($_REQUEST['sorting'] == 'kat3') {
    foreach ($file as $value) {
        $exp = explode(",", $value);
        // var_dump($exp[2]);
        if ($exp[2] == '"Категория 3"
'
        ) {
            echo $exp[0] . ' ' . $exp[1] . ' ' . $exp[2] . '<br>';
            
        }
    }
}


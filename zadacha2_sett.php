<?php
if (!empty($_POST['vopros']) && !empty($_POST['otvet'])){
    $vopros = $_POST['vopros'];
    $otvet = $_POST['otvet'];
    $kategory = $_POST['sorting'];
    $mas = [
        'vopros'=> $_POST['vopros'],
        'otvel'=> $_POST['otvet'],
        'kategory'=> $_POST['sorting'],
    ];
    $f = fopen("vopros_otvet.txt", "a+");
    fputcsv($f,$mas);
    fclose($f);
    header('Location: http://sourseit/9zadanie/zadacha2_index.php', false);
}else
    if (empty($_POST['vopros'])){
    echo 'Введите свой вопрос!';
    }
    if (empty($_POST['otvet'])){
        echo 'Напишите ответ!';
    }


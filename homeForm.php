<?php if (isset($_POST) && !empty($_POST)) {
    $error = 1;
    $sucmsg = '';
    if ($_POST['name'] = '') {
        $error = 0;
    }
    $tel = $_POST['tel'];
    if ($_POST['tel']) {
        $error = 0;
    }

    if ($error == 1) {
        $name = $_POST['name'];
        $headers = "From:$name " . "\r\n";
        $sbj = "Новое сообщение из вашего сайта";
        $msg = "Сообщение: \nИмя: $name\nТелефон: $tel";
        if (mail("hr@marketing1.su", "$sbj", $msg, $headers)) {
            $sucmsg = "Успех\nВсе доброго !!!";
        }else{
            echo "Ошибка!!";
        }
    }
}
?>

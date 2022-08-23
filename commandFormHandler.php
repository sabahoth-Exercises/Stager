<?php if (isset($_POST) && !empty($_POST)) {
    $error = 1;
    $question = '';
    $sucmsg = '';


    $name = $_POST['name'];
    if ($_POST['name'] = '') {
        $error = 0;
    }
    $mail = $_POST['email'];
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = 0;
    }
    $tel = $_POST['tel'];
    if ($_POST['tel'] == ' ') {
        $error = 0;
    }
    $address = $_POST['address'];
    if ($_POST['address'] == ' ') {
        $error = 0;
    }
    $time = $_POST['time'];
    if ($_POST['time'] == ' ') {
        $error = 0;
    }
    $type = $_POST['type'];
    if ($_POST['type'] == ' ') {
        $error = 0;
    }
    $mDostavka = $_POST['radio-btn__dostavka'];
    if ($_POST['radio-btn__dostavka'] == ' ') {
        $error = 0;
    }
    $mPlateja = $_POST['radio-btn__plateja'];
    if ($_POST['radio-btn__plateja'] == ' ') {
        $error = 0;
    }
    $question = $_POST['question'];



    if ($error == 1) {
        $headers = "From:$name <$mail>" . "\r\n";
        $sbj = "Новое сообщение из вашего сайта";
        $msg = "Сообщение: \nИмя: $name\nТелефон: $tel\nПочто: $mail\nАдрес: $address\nУдобное время: $time
        \nТип сомоката: $type\nМетод доставки: $mDostavka\nМетод платежа: $mPlateja\nВопрос: $question";
        if (mail("hr@marketing1.su", "$sbj", $msg, $headers)) {
            $sucmsg = "Успех\nВсе доброго !!!";
        }else{
            echo "Ошибка!!";
        }
    }else{
        echo "Ошибка!!";
    }
}

?>

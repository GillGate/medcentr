<?php
	include_once('helpers/validate-number.php');

	$email_to = "gillgate@yandex.ru";
    
	$name = trim($_POST['popup-extended-name']);
	$phone = trim($_POST['popup-extended-phone']);
	$email = trim($_POST['popup-extended-email']);
	$text = trim($_POST['popup-extended-text']);
	$from = trim($_POST['popup-extended-from']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($name == '') {
		$errors['popup-extended-name'] = 'Введите имя!';
	} elseif (strlen($name) < 2) {
		$errors['popup-extended-name'] = 'Имя должно содержать миниммум 2 буквы!';
	}

	if($phone == '') {
		$errors['popup-extended-phone'] = 'Укажите свой телефон!';
	} elseif(!validate_phone_number($phone)) {
		$errors['popup-extended-phone'] = 'Введите корректный номер!';
	}

	if($email == '') {
		$errors['popup-extended-email'] = 'Укажите свой E-mail!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['popup-extended-email'] = 'Введите корректный E-mail!';
	}

	if($text == '') {
		$errors['popup-extended-text'] = 'Заполните поле!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <info@gillgate.bhuser.ru>' . "\r\n" .
    	'Reply-To: info@gillgate.bhuser.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Запись на консультацию';
		$letter   = "$from: \n Имя: $name \n Телефон: $phone \n Почта: $email \n Подробности: $text \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
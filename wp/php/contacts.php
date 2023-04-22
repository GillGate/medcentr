<?php
	include_once('helpers/validate-number.php');

	$email_to = "gillgate@yandex.ru";
    
	$name = trim($_POST['contacts-name']);
	$phone = trim($_POST['contacts-phone']);
	$email = trim($_POST['contacts-email']);
	$question = trim($_POST['contacts-question']);
	$from = trim($_POST['contacts-from']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($name == '') {
		$errors['contacts-name'] = 'Введите имя!';
	} elseif (strlen($name) < 2) {
		$errors['contacts-name'] = 'Имя должно содержать миниммум 2 буквы!';
	}

	if($phone == '') {
		$errors['contacts-phone'] = 'Укажите свой телефон!';
	} elseif(!validate_phone_number($phone)) {
		$errors['contacts-phone'] = 'Введите корректный номер!';
	}

	if($email == '') {
		$errors['contacts-email'] = 'Укажите свой E-mail!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['contacts-email'] = 'Введите корректный E-mail!';
	}

	if($question == '') {
		$errors['contacts-question'] = 'Задайте ваш вопрос!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <info@gillgate.bhuser.ru>' . "\r\n" .
    	'Reply-To: info@gillgate.bhuser.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Запись на консультацию';
		$letter   = "$from: \n Имя: $name \n Телефон: $phone \n Почта: $email \n Вопрос: $question \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
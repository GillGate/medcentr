<?php
	include_once('helpers/validate-number.php');

	$email_to = "gillgate@yandex.ru";
    
	$name = trim($_POST['advice-home-name']);
	$email = trim($_POST['advice-home-email']);
	$from = trim($_POST['advice-home-from']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($name == '') {
		$errors['advice-home-name'] = 'Введите имя!';
	} elseif (strlen($name) < 2) {
		$errors['advice-home-name'] = 'Имя должно содержать миниммум 2 буквы!';
	}

	if($email == '') {
		$errors['advice-home-email'] = 'Укажите свой E-mail!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['advice-home-email'] = 'Введите корректный E-mail!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <info@gillgate.bhuser.ru>' . "\r\n" .
    	'Reply-To: info@gillgate.bhuser.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Запись на консультацию';
		$letter   = "$from: \n Имя: $name \n Почта: $email \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
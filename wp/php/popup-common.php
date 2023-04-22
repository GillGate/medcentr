<?php
	include_once('helpers/validate-number.php');

	$email_to = "gillgate@yandex.ru";
    
	$name = trim($_POST['popup-common-name']);
	$phone = trim($_POST['popup-common-phone']);
	$email = trim($_POST['popup-common-email']);
	$from = trim($_POST['popup-common-from']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($name == '') {
		$errors['popup-common-name'] = 'Введите имя!';
	} elseif (strlen($name) < 2) {
		$errors['popup-common-name'] = 'Имя должно содержать миниммум 2 буквы!';
	}

	if($phone == '') {
		$errors['popup-common-phone'] = 'Укажите свой телефон!';
	} elseif(!validate_phone_number($phone)) {
		$errors['popup-common-phone'] = 'Введите корректный номер!';
	}

	if($email == '') {
		$errors['popup-common-email'] = 'Укажите свой E-mail!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['popup-common-email'] = 'Введите корректный E-mail!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <info@gillgate.bhuser.ru>' . "\r\n" .
    	'Reply-To: info@gillgate.bhuser.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Запись на консультацию';
		$letter   = "$from: \n Имя: $name \n Телефон: $phone \n Почта: $email \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
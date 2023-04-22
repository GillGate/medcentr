<?php
	include_once('helpers/validate-number.php');

	$email_to = "gillgate@yandex.ru";
    
	$name = trim($_POST['advice-bottom-name']);
	$phone = trim($_POST['advice-bottom-phone']);
	$from = trim($_POST['advice-bottom-from']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($name == '') {
		$errors['advice-bottom-name'] = 'Введите имя!';
	} elseif (strlen($name) < 2) {
		$errors['advice-bottom-name'] = 'Имя должно содержать миниммум 2 буквы!';
	}

	if($phone == '') {
		$errors['advice-bottom-phone'] = 'Укажите свой телефон!';
	} elseif(!validate_phone_number($phone)) {
		$errors['advice-bottom-phone'] = 'Введите корректный номер!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <info@gillgate.bhuser.ru>' . "\r\n" .
    	'Reply-To: info@gillgate.bhuser.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Запись на консультацию';
		$letter   = "$from: \n Имя: $name \n Телефон: $phone \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
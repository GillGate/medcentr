<?php
	include_once('helpers/validate-number.php');

	$email_to = "gillgate@yandex.ru";
    
	$name = trim($_POST['popup-kp-name']);
	$phone = trim($_POST['popup-kp-phone']);
	$email = trim($_POST['popup-kp-email']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($name == '') {
		$errors['popup-kp-name'] = 'Введите имя!';
	} elseif (strlen($name) < 2) {
		$errors['popup-kp-name'] = 'Имя должно содержать миниммум 2 буквы!';
	}

	if($phone == '') {
		$errors['popup-kp-phone'] = 'Укажите свой телефон!';
	} elseif(!validate_phone_number($phone)) {
		$errors['popup-kp-phone'] = 'Введите корректный номер!';
	}

	if($email == '') {
		$errors['popup-kp-email'] = 'Укажите свой E-mail!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['popup-kp-email'] = 'Введите корректный E-mail!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <info@gillgate.bhuser.ru>' . "\r\n" .
    	'Reply-To: info@gillgate.bhuser.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Запись на консультацию';
		$letter   = "Заявка КП: \n Имя: $name \n Телефон: $phone \n Почта: $email \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
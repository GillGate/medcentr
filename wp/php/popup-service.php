<?php
	include_once('helpers/validate-number.php');

	$email_to = "gillgate@yandex.ru";

	$client = trim($_POST['popup-service-client']);
	$name = trim($_POST['popup-service-name']);
	$phone = trim($_POST['popup-service-phone']);
	$email = trim($_POST['popup-service-email']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($client == '') {
		$errors['popup-service-client'] = 'Введите имя!';
	} elseif (strlen($name) < 2) {
		$errors['popup-service-client'] = 'Имя должно содержать миниммум 2 буквы!';
	}

	if($phone == '') {
		$errors['popup-service-phone'] = 'Укажите свой телефон!';
	} elseif(!validate_phone_number($phone)) {
		$errors['popup-service-phone'] = 'Введите корректный номер!';
	}

	if($email == '') {
		$errors['popup-service-email'] = 'Укажите свой E-mail!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['popup-service-email'] = 'Введите корректный E-mail!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <info@gillgate.bhuser.ru>' . "\r\n" .
    	'Reply-To: info@gillgate.bhuser.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Заявка на заказ услуги';
		$letter   = "Название услуги: $name \n Имя: $name \n Телефон: $phone \n Почта: $email \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
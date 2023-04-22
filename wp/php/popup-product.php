<?php
	include_once('helpers/validate-number.php');

	$email_to = "gillgate@yandex.ru";
    
	$person = trim($_POST['popup-product-person']);
	$phone = trim($_POST['popup-product-phone']);
	$email = trim($_POST['popup-product-email']);
	$name = trim($_POST['popup-product-name']);
	$link = trim($_POST['popup-product-link']);

	$dt = date('Y-m-d H:i:s');
	
    $errors = [];

    if($person == '') {
		$errors['popup-product-person'] = 'Введите имя!';
	} elseif (strlen($person) < 2) {
		$errors['popup-product-person'] = 'Имя должно содержать миниммум 2 буквы!';
	}

	if($phone == '') {
		$errors['popup-product-phone'] = 'Укажите свой телефон!';
	} elseif(!validate_phone_number($phone)) {
		$errors['popup-product-phone'] = 'Введите корректный номер!';
	}

	if($email == '') {
		$errors['popup-product-email'] = 'Укажите свой E-mail!';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['popup-product-email'] = 'Введите корректный E-mail!';
	}

    $response = ['res' => empty($errors), 'errors' => $errors];
    
	if(empty($errors)){
		$headers = 'From: gillgate.bhuser.ru <info@gillgate.bhuser.ru>' . "\r\n" .
    	'Reply-To: info@gillgate.bhuser.ru' . "\r\n" . 
    	'X-Mailer: PHP/' . phpversion();

		$subject  = 'Заявка на оборудование';
		$letter   = "Имя: $person \n Телефон: $phone \n Почта: $email \n Название оборудования: $name \n Ссылка на страницу оборудования: $link \n";

		$sendmail = mail($email_to, $subject, $letter, $headers);
	}
    
    echo json_encode($response);
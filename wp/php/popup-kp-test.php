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

		$from = "info@gillgate.bhuser.ru";
		$subject  = 'Запись на консультацию';
		$message   = "Заявка КП: \n Имя: $name \n Телефон: $phone \n Почта: $email \n";
		
		$boundary = md5(date('r', time()));
		$filesize = '';
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: " . $from . "\r\n";
		$headers .= "Reply-To: " . $from . "\r\n";
		$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
		$message="
			Content-Type: multipart/mixed; boundary=\"$boundary\"
			 
			--$boundary
			Content-Type: text/plain; charset=\"utf-8\"
			Content-Transfer-Encoding: 7bit
			$message";

	    if(is_uploaded_file($_FILES['popup-kp-file']['tmp_name'])) {
	        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['popup-kp-file']['tmp_name'])));
	        $filename = $_FILES['popup-kp-file']['name'];
	        $filetype = $_FILES['popup-kp-file']['type'];
	        $filesize = $_FILES['popup-kp-file']['size'];
	        $message.="
			--$boundary 
			Content-Type: \"$filetype\"; name=\"$filename\" \r\n
			Content-Transfer-Encoding: base64 \r\n
			Content-Disposition: attachment; filename=\"$filename\" \r\n
			$attachment";
	    }
	   $message.="
		--$boundary--";

		mail($email_to, $subject, $message, $headers);
	}
    
    echo json_encode($response);
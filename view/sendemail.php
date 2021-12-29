<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Cảm ơn bạn vì đã liên hệ cho chúng tôi. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể '
	);

    $name       = @trim(stripslashes($_POST['tên'])); 
    $email      = @trim(stripslashes($_POST['email'])); 
    $subject    = @trim(stripslashes($_POST['tiêu đề'])); 
    $message    = @trim(stripslashes($_POST['nội dung tin nhắn'])); 

    $email_from = $email;
    $email_to = 'email@email.com';//replace with your email

    $body = 'Tên: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Tiêu đề: ' . $subject . "\n\n" . 'Nội dung tin nhắn: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
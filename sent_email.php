<?php 
	$to = 'youraddress@example.com';  //khai báo địa chỉ mail người nhận
	$subject = 'Test email'; // chủ đề của mail
	// Đây là nội dung mail cần gửi. Để xuống dòng , chèn \n vào cuối dòng
	$message = "Hello World!\n\nThis is my first mail.";
	// Khai báo thông tin mail người gửi. Cách dòng bằng \r\n
	$headers = "From: \r\nReply-To: webmaster@example.com";
	 //Gửi mail
	$mail_sent = @mail( $to, $subject, $message, $headers );
	// Nếu thành công thì xuất dòng thông báo "Mail sent", ngược lại thì xuất  "Mail failed"
	echo $mail_sent ? "Mail sent" : "Mail failed";
 ?>
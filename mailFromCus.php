<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<?php
	
	$web1 = "PTW Technology";
	$form ="แบบฟอมร์มติดต่อสอบถามข้อมูลเพิ่มเติม"; // website

	$name= $_POST[name];
	$email = $_POST[email];
	$Cusmsg = $_POST[Cusmsg];
	$subject = $_POST[subject];
	$capcha = $_POST[capcha];
	$textCapcha  = $_POST[textCapcha];
	
	
	
	if($name!="" && $Cusmsg!="" && $email!="" && $subject!=""){
		
		
		if($Cusmsg == "" )
		{
            $Cusmsg = "ไม่มี";
		}
		
		require("PHPMailer_v5.0.2/class.phpmailer.php");
		$mail = new PHPMailer();
		
		$body = " $form <br>
		คุณ : $name <br>
		ให้ติดต่อกลับที่ อีเมล์ : $email <br>
		ชื่อเรื่อง : $subject <br>
		ข้อความเพิ่มเติม : $Cusmsg<br>";
		
		$mail->CharSet = "UTF-8";
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->Host = "thdirectory.com"; // SMTP server
		$mail->Port = 25; // พอร์ท
		$mail->Username = "feedback@thdirectory.com"; // account SMTP
		$mail->Password = "Q0cawZ6FG"; // รหัสผ่าน SMTP
		
		$mail->SetFrom($email);
		$mail->AddReplyTo($email);
		$mail->Subject = "แบบฟอมร์มติดต่อสอบถามข้อมูลเพิ่มเติม $web1";
		
		$mail->MsgHTML($body);
		
		$mail->AddAddress("rapeepatlasa@gmail.com");//--> Email ลูกค้า    เปลี่ยนเป็นอีเมลลูกค้า
		
		
		
		if($mail->Send()) {
			echo "<script language='javascript'>";
			echo "alert('ข้อมูลของท่านได้ส่งเรียบร้อยแล้วค่ะ ทางบริษัทจะติดต่อกลับนะค่ะ');";
			echo "window.location='contact.php'";
			echo "</script>";
			
			} else {
	        $er = "Mailer Error: " . $mail->ErrorInfo;
			echo "<script language='javascript'>";
			echo "alert('$er');";
			echo "window.location='contact.php'";
			echo "</script>";
		}
		}else{
		
		echo "<script language='javascript'>";
		echo "alert('กรุณากรอกข้อมูลให้ถูกต้อง');";
		echo "window.location='contact.php'";
		echo "</script>";
	}
?>

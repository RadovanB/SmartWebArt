<?php
$uspeh = false;
if(isset($_POST['posalji']))
{
	include('class.smtp.php');
	include('class.pop3.php');
	include('class.phpmailer.php');
			
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'mail.smartwebart.rs';					// Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            	// Enable SMTP authentication
	$mail->Username = 'office@smartwebart.rs'; 			// SMTP username
	$mail->Password = 'karlovevariprag';           			// SMTP password
	$mail->SMTPSecure = 'tls';                       	// Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;
				
	$mail->From = 'office@smartwebart.rs';
	$mail->FromName = 'Smart Web Art';
	$mail->addAddress('radovanbastic@gmail.com');		// Add a recipient
	$mail->addReplyTo('radovanbastic@gmail.com', 'Smart Web Art');
				
	$mail->isHTML(true);
	$mail->Subject = 'Pitanja o programiranju';
	$mail->Body    =
	'<html>
		<body>
			<table width="60%" cellspacing="2" cellpadding="2">
				<tr>
					<td colspan="2" align="left" valign="middle"style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#fff; background-color:#0072c6;">Pitanja u vezi sa  sajtom</td>
				</tr>
				<tr>
					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Ime i Prezime</td>
					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $_POST['IP'] . '</td>
				</tr>
				<tr>
					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Telefon</td>
					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $_POST['BT'] . '</td>
				</tr>
				<tr>
					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Email adresa</td>
					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $_POST['EM'] . '</td>
				</tr>
				<tr>
					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Pitanje, ideja..</td>
					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $_POST['pitanje'] . '</td>
				</tr>
			</table>
		</body>
	</html>';
	if(!$mail->send()) { $uspeh = false; } else { $uspeh = true; }
}
?>
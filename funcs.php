<?php
error_reporting(0);

function sendMail($mail)
{
	if (!empty($mail)) {
		
		$to = $mail;
		$subject = "Account Authentication";
		$message = "Follow link to authenticate your account, Your have 24h to authentication. Otherwise delete account.";
		$headers = "From: mail@mail.com";
		
		try {
				if(!mail($to, $subject, $message, $headers)){throw new Exception('<p>can\'t send mail<br/></p>');};
		}
		catch (Exception $e){
			echo $e->getMessage();
		}
	}
	else
	{
		echo '<p>Email can\'t be empty!<br/></p>';
	}
}

function sendHtmlMail($mail)
{
	if (!empty($mail)) {
		
		$to = $mail;
		$subject = "HTML email- Authentication Account";
		$message = "
        <html lang=\"en\">
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>This email contains HTML Tags!</p>
        <p>Follow link to authenticate your account, Your have 24h to authentication. Otherwise delete account.</p>
        <table>
        <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        </tr>
        <tr>
        <td>John</td>
        <td>Doe</td>
        </tr>
        </table>
        </body>
        </html>
        ";
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// More headers
		$headers .= 'From: <mail@mail.com>' . "\r\n";
		// $headers .= '' . "\r\n";
		
		try {
				if(!mail($to, $subject, $message, $headers)){throw new Exception('<p>can\'t send mail<br/></p>');};
		}
		catch (Exception $e){
			echo $e->getMessage();
		}
	}
	else
	{
		echo '<p>Email can\'t be empty<br/></p>';
	}
}
?>

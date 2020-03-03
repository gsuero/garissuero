<?
	//define the receiver of the email
	
	define('TO_NAME','Garis');
	define('TO_EMAIL','contact@garissuero.me');

	define('TEMPLATE_PATH','template/default.php');
 

	define('SMTP_HOST','smtpout.secureserver.net');
	define('SMTP_USERNAME','contact@garissuero.me');
	define('SMTP_PASSWORD','contact0fMySite');

	define('SUBJECT','Contact from your website');	
	
	// Messages
	define('MSG_INVALID_NAME','Please enter your name.');
	define('MSG_INVALID_EMAIL','Please enter valid e-mail.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');

?>
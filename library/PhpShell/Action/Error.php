<?php

class PhpShell_Action_Error extends PhpShell_Action
{
	public function run()
	{
		switch ($x)
		{
			case 400:	$text = 'Bad request, you did not specify any code to process; or your input didn\'t contain any php code.'; break;
			case 402:	$text = 'This service is provided free of charge and we expect you not to abuse it.<br />Please contact us to get your IP unblocked.'; break;
			case 403:	$text = 'The server is already processing your code, please wait for it to finish.'; break;
			case 404:	$text = 'The requested script does not exist.'; break;
			case 405:	$text = 'Method not allowed.'; break;
			case 503:	$text = 'Please refrain from hammering this service. You are limited to 5 POST requests per minute.'; break;
			case 501:	$code = 503; $text = 'We are currently in maintenance, read-only mode.'; break;
			default:	$code = 500; $text = 'An unexpected error has occured.';
		}
	}
}
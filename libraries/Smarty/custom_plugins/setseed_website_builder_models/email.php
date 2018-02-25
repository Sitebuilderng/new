<?php

class Email extends Model {
	public function sendEmail($from,$to,$subject,$content,$contentHTML)
	{
		$transport = Swift_MailTransport::newInstance();
		$mailer = Swift_Mailer::newInstance($transport);
		$message = Swift_Message::newInstance($subject)
	  		->setFrom($from)
	  		->setTo(array($to))
	  		->setBody($content)
	  		->addPart($contentHTML,'text/html')
	  		;
		$numSent = $mailer->send($message);
		return $numSent;
	}
}

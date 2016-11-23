<?php

interface Logger{

	public function log($message);

}

class Application{

	protected $logger;

	public function setLogger(Logger $logger)
	{
		$this->logger = $logger;

		return $this;
	}

	public function action()
	{

		$this->logger->log('Doing things');

	}
}

$app = new Application;


// this is reminds one of the anonymous classes famous in Android programming in which a class is used on the fly for ex in inflating a view or so


$app->setLogger(new class implements Logger{

	function log($message)
	{
		var_dump($message);
	}
});
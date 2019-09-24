<?php

declare(strict_types=1);

if (@!include __DIR__ . '/../vendor/autoload.php') {
	die('Install packages using `composer install`');
}

Tracy\OutputDebugger::enable();


function head()
{
	echo '<!DOCTYPE html><link rel="stylesheet" href="assets/style.css">';
}


head();
echo '<h1>Output Debugger demo</h1>';

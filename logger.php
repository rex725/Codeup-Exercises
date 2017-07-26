<?php

function logMessage($logLevel, $message)
{
    $fileName = date("Y-m-d") . ".log";
    $handle = fopen($fileName, "a");
    fwrite($handle, date("Y-m-d H:i:s") . "[" . $logLevel . "]" . $message . PHP_EOL);
}
function logInfo($message) {
	logMessage("INFO", $message);
}
function logError($message) {
	logMessage("ERROR", $message);
}
logInfo("This is an info message.");
logError("This is an info message.");
// echo date("Y") . "-" . date("m") . "-" . date("d") . ".log";
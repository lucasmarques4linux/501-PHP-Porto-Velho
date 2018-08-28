<?php 

interface LogStrategy
{
	public function salvarLog(string $msg);
}

class LogXML implements LogStrategy
{
	public function salvarLog(string $msg)
	{
		echo "Logando em XML <br>";
		echo $msg;
	}
}

class LogTXT implements LogStrategy
{
	public function salvarLog(string $msg)
	{
		echo "Logando em TXT <br>";
		echo $msg;
	}
}

class LogJSON implements LogStrategy
{
	public function salvarLog(string $msg)
	{
		echo "Logando em JSON <br>";
		echo $msg;
	}
}
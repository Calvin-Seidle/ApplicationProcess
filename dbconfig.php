<?php

$DB_host = "192.168.1.20";
$DB_user = "monwabisi";
$DB_pass = "littlepig123";
$DB_name = "applicant";

try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	$e->getMessage();
}
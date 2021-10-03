<?php
$token=random_bytes(15);
$email_to="prem.com0011@gmail.com";
$subject="Demo mail from php";
$body="hi prem prakash this is your code of transection ".$token;
$header="From: pg733513@gmail.com";
if(mail($email_to,$subject,$body,$header))
echo "sss";
else{
    echo "ff";
}








?>
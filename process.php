<?php

$name=$_POST['name'];
$email=$_POST['email'];
$ticket=$_POST['ticket'];

if (isset($name)){
if(!empty($name)){
    echo "Your name is ".htmlspecialchars($name) ."<br>";}
else echo "You didnt enter a name <br>";}

if (isset($email)){
if(!empty($email)){
    echo "Your email is ".htmlspecialchars($email) ."<br>"; 
}
else echo "You didnt enter an email <br>";}

if(isset($email)){
if(!empty($ticket)){
    echo "You have selected ".htmlspecialchars($ticket)."<br>"; 
}
else echo "You didnt select a ticket <br>";}
?>



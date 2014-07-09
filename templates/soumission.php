<?php
$to = "colinepiarulli@gmail.com";
$subject = "Formulaire de contact";
$message =
"Nom et prenom: " . $_POST['name'] . "\r\n" .
"Adresse mail: " . $_POST['email'] . "\r\n" .
"Objet: " . $_POST['objet'] . "\r\n" .
"\r\n" .
"Message: " . $_POST['message'];
$from=$_POST['email'];
$headers = "From: $from" . "/r/n";
mail($to,$subject,$message,$headers);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


{% layout "index" %}

{% block content %} 
<p>Votre message a été envoyé !</p>

{% endblock %}
</html>
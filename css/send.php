<?php
$recipient = "d.lakusta1703@gmail.com";

$site_name = "Прийшло повідомлення з мого сайту";

$name = trim($_POST["Username"]);

$email = trim($_POST["email"]);

$description = trim($_POST["description"]);

$message = "Ім'я: $name /n/n email: $email Комент: $description";

$page_title = mail($recipient, $page_title, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $email");   
echo "<script>location.href = '/'</script>";
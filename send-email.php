<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $parent_name = htmlspecialchars($_POST['parent_name'], ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

    // Your email address where the form will be sent
    $to = "tapocheknosok8@gmail.com";  // Change this to your email address
    $subject = "Новая заявка с формы"; // Subject in Russian

    // Create the email content
    $message = "Имя родителя: $parent_name\n";
    $message .= "Телефон: $phone\n";
    $message .= "Электронная почта: $email\n";

    // Set headers for UTF-8 and proper email formatting
    $headers = "From: no-reply@yourdomain.com\r\n"; // Change to a valid sender email
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Спасибо за вашу заявку!";
    } else {
        echo "Ошибка при отправке. Попробуйте снова.";
    }
}
?>

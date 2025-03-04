<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $parent_name = $_POST['parent_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Your email address where the form will be sent
    $to = "tapocheknosok8@gmail.com";  // Change this to your email address
    $subject = "New Form Submission";

    // Create the email content
    $message = "Parent Name: $parent_name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";

    // Set the headers for the email
    $headers = "From: no-reply@yourdomain.com"; // Change this to a valid sender email address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Success: Redirect or show a success message
        echo "Thank you for your submission!";
    } else {
        // Failure: Show an error message
        echo "Oops! Something went wrong. Please try again.";
    }
}
?>

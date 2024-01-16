<?php
$errors = [];

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST data
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
	$phone_number = isset($_POST['phone_number']) ? strip_tags(trim($_POST['phone_number'])) : '';
	$subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

    // Validate form fields
    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    // If no errors, send email
    if (empty($errors)) {
        // Recipient email address (replace with your own)
        $recipient = "aleemakhtar57@gmail.com";

        // Additional headers
        $headers = "From: $name <$email> <$phone_number> <$subject> <$message>";

		$body = "<p>Name:".$name."</p>";
		$body .= "<p>Email:".$email."</p>";
		$body .= "<p>Phone Number:".$phone_number."</p>";
		$body .= "<p>Subject:".$subject."</p>";
		$body .= "<p>Message:".$message."</p>";
		
        // Send email
        if (mail($recipient,"COntact us form", $body, $headers)) {
			$success = true;
            //echo "Email sent successfully!";
        }
    } else {
        // Display errors
        echo "The form contains the following errors:<br>";
        foreach ($errors as $error) {
            echo "- $error<br>";
        }
    }
}
?>
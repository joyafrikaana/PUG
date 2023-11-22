<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $rescueName = $_POST['Rescue-name'];
    $streetAddress = $_POST['Street-Address'];
    $cityAddress = $_POST['City-Address'];
    $stateAddress = $_POST['State-Address'];
    $countryAddress = $_POST['Country-Address'];
    $postalCode = $_POST['Postal-Code'];
    $phoneNumber = $_POST['Phone'];
    $email = $_POST['Email'];
    $website = $_POST['Website'];
    $ethereumEmails = $_POST['email-2'];
    $moreInformation = $_POST['More'];

    // Compose email message
    $subject = "Rescue Nomination Form Submission";
    $message = "Rescue Name: $rescueName\n";
    $message .= "Street Address: $streetAddress\n";
    $message .= "City/Town: $cityAddress\n";
    $message .= "State: $stateAddress\n";
    $message .= "Country: $countryAddress\n";
    $message .= "Postal Code: $postalCode\n";
    $message .= "Phone Number: $phoneNumber\n";
    $message .= "Email: $email\n";
    $message .= "Website: $website\n";
    $message .= "Willing to receive donations in Ethereum: $ethereumEmails\n";
    $message .= "More Information: $moreInformation\n";

    // Set up email headers
    $headers = "From: $email";

    // Send email
    $to = "miraclejames812@gmail.com";  // Replace with your actual email address
    $mailSuccess = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        echo "Thank you! Your submission has been received!";
    } else {
        echo "Oops! Something went wrong while submitting the form.";
    }
} else {
    // If the form wasn't submitted, redirect to an error page or handle accordingly
    header("Location: error_page.php");
    exit();
}
?>

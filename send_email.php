<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $id_number = $_POST['id_number'];
    $level = $_POST['level'];
    $mobile_number = $_POST['mobile_number'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $school_name = $_POST['school_name'];
    $school_address = $_POST['school_address'];
    $supervisor_name = $_POST['supervisor_name'];
    $supervisor_phone = $_POST['supervisor_phone'];
    $issued_date = $_POST['issued_date'];
    $expiry_date = $_POST['expiry_date'];
    $siwes_duration = $_POST['siwes_duration'];
    $start_date = $_POST['start_date'];
    $finish_date = $_POST['finish_date'];
    $session = $_POST['session'];
    $department = $_POST['department'];
    
    $to = 'lunetechng@gmail.com';
    $subject = 'SIWES Registration Details';
    $message = "Personal Details:\n
    Full Name: $full_name\n
    ID Number: $id_number\n
    Level: $level\n
    Mobile Number: $mobile_number\n
    Gender: $gender\n
    Email: $email\n
    School Details:\n
    School Name: $school_name\n
    School Address: $school_address\n
    Supervisor Name: $supervisor_name\n
    Supervisor Phone: $supervisor_phone\n
    Issued Date: $issued_date\n
    Expiry Date: $expiry_date\n
    SIWES Details:\n
    SIWES Duration: $siwes_duration\n
    Expected Start Date: $start_date\n
    Expected Finish Date: $finish_date\n
    Preferred Session: $session\n
    Department: $department\n";

    $headers = "From: umarmuhdamin123@gmail.com\r\n";
    $headers .= "Reply-To: umarmuhdamin123@gmail.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
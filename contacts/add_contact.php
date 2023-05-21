<?php
// Connect to the database
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'contacts_db';

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Add a new contact to the database
if(isset($_POST)){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address'];
    $address = $_POST['address'];

    // SQL query to insert a new contact into the database
    $sql = "INSERT INTO `contacts`(`first_name`, `last_name`, `phone_number`, `email_address`, `address`) VALUES ('$first_name','$last_name','$phone_number','$email_address','$address')";

    if (mysqli_query($conn, $sql)) {

        // Retrieve all contacts from the database
        $sql = "SELECT * FROM contacts";
        $contact = $conn->query($sql) or die ($conn->error);
        $row = $contact->fetch_assoc();
    }

}
include_once("connections/contacts_content.php");
?>
<script src="connections/script.js"></script>
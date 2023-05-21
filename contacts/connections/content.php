<?php
function connection(){
    echo "contacts";
}
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'contacts_db';

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    // Retrieve all contacts from the database
    $sql = "SELECT * FROM contacts";
    $contact = $conn->query($sql) or die ($conn->error);
    $row = $contact->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="contacts_content.css">
    <title>Contacts</title>
</head>
<body>
    <nav>
    <div class="logo">
      <img src="../img/logo.png" alt="Logo">
    </div>
    <ul class="nav-links">
      <li class="a"><a href="../index.php">Add New Contact</a></li>
      <li class="a"><a href="content.php">View Contact</a></li>
    </ul>
  </nav><br>
    <div class="content">
        <h1>THIS IS THE LIST OFF ALL THE CONTACTS</h1>
        <br>
        <br>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>PHONE NUMBER</th>
                <th>EMAIL ADDRESS</th>
                <th>ADDRESS</th>
            </tr>
            </thead>
            <tbody>
            <!-- Display the contacts -->
                <?php do{ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['email_address']; ?></td>
                <td><?php echo $row['address']; ?></td>
            </tr>
            <?php }while($row = $contact->fetch_assoc()) ?>
            </tbody>
        </table>
    </div>

    <div class="body2">
    <div class="group">
        <div class="header">
            <h1>GROUP MEMBERS</h1>
        </div>
        <div class="member1">
            <img src="../img/me.jpg" alt="img not found">
            <div class="con">
                <h3>Bimbo E. Villaganas</h3>
                <p>Gwapo nga IT</p>
            </div>

        </div>
        <div class="member1">
            <img src="../img/jessa.jpg" alt="img not found">
            <div class="con">
                <h3>Jessa Mae A. Abarquez</h3>
                <p>Gwapa nga IT</p>
            </div>
        </div>
    </div>
    </div>
    <footer>
    <div class="footer-content">
        <p>&copy; 2023 for Fundamentals of Database Systems final requerment only. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
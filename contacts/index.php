<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add New Contact</title>
</head>
<body>
<nav>
    <div class="logo">
      <img src="img/logo.png" alt="Logo">
    </div>
    <ul class="nav-links">
      <li class="a"><a href="index.php">Add New Contact</a></li>
      <li class="a"><a href="connections/content.php">View Contact</a></li>
    </ul>
  </nav><br>

    <div class="contactform">
    <h1>Add New Contact</h1>
    <form action="add_contact.php" method="post">
        <label>First Name:</label>
        <input type="text" name="first_name" placeholder="First Name" required><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" placeholder="Last Name" required><br>

        <label>Phone Number:</label>
        <input type="text" name="phone_number" placeholder="Phone Number" required><br>

        <label>Email Address:</label>
        <input type="email" name="email_address" placeholder="Email Address" required><br>

        <label>Address:</label>
        <textarea name="address" placeholder="Address" required></textarea><br>

        <input class="button" type="submit" value="Add Contact">
    </form>
    </div>
    <div class="body2">
    <div class="group">
        <div class="header">
            <h1>GROUP MEMBERS</h1>
        </div>
        <div class="member1">
            <img src="img/me.jpg" alt="img not found">
            <div class="con">
                <h3>Bimbo E. Villaganas</h3>
                <p>Gwapo nga IT</p>
            </div>

        </div>
        <div class="member1">
            <img src="img/jessa.jpg" alt="img not found">
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
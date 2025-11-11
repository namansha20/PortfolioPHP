<!DOCTYPE html>
<html>
<head>
    <title>Portfolio - Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Contact Me</h1>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="certifications.php">Certifications</a></li>
            <li><a href="achievements.php">Achievements</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="download_resume.php">Download Resume</a></li>
        </ul>
    </nav>
    
    <h2>Get In Touch</h2>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        echo "<p><strong>Thank you for your message!</strong></p>";
        echo "<p>Name: " . $name . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Message: " . $message . "</p>";
        echo "<hr>";
    }
    ?>
    
    <form method="POST" action="contact.php">
        <p>
            <label>Name:</label><br>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>Message:</label><br>
            <textarea name="message" rows="5" cols="40" required></textarea>
        </p>
        <p>
            <input type="submit" value="Send Message">
        </p>
    </form>
    
    <h2>Contact Information</h2>
    <ul>
        <li>Email: contact@example.com</li>
        <li>Phone: +1 234 567 8900</li>
        <li>Location: City, Country</li>
    </ul>
</body>
</html>

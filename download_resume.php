<!DOCTYPE html>
<html>
<head>
    <title>Portfolio - Download Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Download Resume</h1>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="certifications.php">Certifications</a></li>
            <li><a href="achievements.php">Achievements</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="download_resume.php">Download Resume</a></li>
        </ul>
    </nav>
    
    <h2>Resume</h2>
    <p>Click the button below to download my resume:</p>
    
    <?php
    if (isset($_GET['download']) && $_GET['download'] == 'true') {
        $file = 'resume.txt';
        
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="resume.txt"');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        } else {
            echo "<p><strong>Error: Resume file not found!</strong></p>";
        }
    }
    ?>
    
    <p>
        <a href="download_resume.php?download=true">
            <button type="button">Download Resume</button>
        </a>
    </p>
    
    <h2>Resume Preview</h2>
    <pre>
PROFESSIONAL RESUME
===================

Name: Your Name
Email: contact@example.com
Phone: +1 234 567 8900

OBJECTIVE
---------
Dedicated professional seeking opportunities in web development.

EDUCATION
---------
Bachelor of Computer Science
University Name, 2020

EXPERIENCE
----------
Web Developer
Company Name, 2021-Present
- Developed web applications using PHP
- Collaborated with team members
- Maintained and improved existing systems

SKILLS
------
- PHP Development
- HTML/CSS
- JavaScript
- Database Management
- Problem Solving

CERTIFICATIONS
--------------
- Web Development Certificate (2023)
- PHP Programming Certificate (2022)
- Database Management Certificate (2021)
    </pre>
</body>
</html>

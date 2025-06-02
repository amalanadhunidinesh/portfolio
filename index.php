<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amalanadhuni Venkata Sai Dinesh - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f4f6f8;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        header {
            background: #004080;
            color: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        header h1 {
            margin-bottom: 10px;
        }

        section {
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h2 {
            color: #004080;
            margin-bottom: 10px;
        }

        ul {
            padding-left: 20px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9em;
            color: #666;
        }

        a {
            color: #004080;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
$name = "Amalanadhuni Venkata Sai Dinesh";
$college = "NIT Calicut";
$role = "Frontend Developer";
$skills = ["HTML", "CSS", "JavaScript"];
$email = "amalanadhunidinesh@gmail.com"; 
?>

<header>
    <h1><?php echo $name; ?></h1>
    <p><?php echo $role; ?> | B.Tech Student at <?php echo $college; ?></p>
</header>

<section>
    <h2>About Me</h2>
    <p>Hello! I'm <strong><?php echo $name; ?></strong>, currently pursuing my B.Tech at <strong><?php echo $college; ?></strong>. 
    I’m passionate about building responsive and user-friendly websites. I love turning ideas into digital experiences through clean and modern front-end development.</p>
</section>

<section>
    <h2>Skills</h2>
    <ul>
        <?php foreach ($skills as $skill) {
            echo "<li>$skill</li>";
        } ?>
    </ul>
</section>

<section>
    <h2>Contact</h2>
    <p>Feel free to reach out to me at: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
</section>

<footer>
    &copy; <?php echo date("Y"); ?> <?php echo $name; ?>. All rights reserved.
</footer>

</body>
</html>

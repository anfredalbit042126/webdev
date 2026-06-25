<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website</title>

    <link rel="stylesheet" href="/index.style.css">
    <link rel="stylesheet" href="/home/home.style.css">
    <link rel="stylesheet" href="/about/about.style.css">
    <link rel="stylesheet" href="/contact/contact.style.css">


    <script src="jquery.js"></script>
    <script src="/contact/contact.js"></script>

</head>
<body>

<?php
$page = $_GET['page'] ?? 'home';
?>

<nav>
    <ul>
        <li>
            <a href="index.php?page=home"
               class="<?= $page == 'home' ? 'active' : '' ?>">
                Home
            </a>
        </li>

        <li>
            <a href="index.php?page=about"
               class="<?= $page == 'about' ? 'active' : '' ?>">
                About
            </a>
        </li>

        <li>
            <a href="index.php?page=contact"
               class="<?= $page == 'contact' ? 'active' : '' ?>">
                Contact
            </a>
        </li>
    </ul>
</nav>

<img src="/images/banner.jpg">

<div class="main-content">

<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'about':
        include 'about/about.php';
        break;

    case 'contact':
        include 'contact/contact.php';
        break;

    case 'home':
    default:
        include 'home/home.php';
        break;
}
?>

</div>

<footer>
    <p>&copy; 2026 Aces Tagum College Inc. All Rights Reserved.</p>
</footer>

</body>
</html>
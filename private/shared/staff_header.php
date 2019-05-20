<?php if (!isset($page_title)) {$pate_title = "Staff Area";}?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Globe Bank - <?php echo $staff_title; ?></title>
        <link rel="stylesheet" href="<?php echo url_for("/css/reset.css"); ?>"/>
        <link rel="stylesheet" href="<?php echo url_for("/css/staffstyle.css"); ?>"/>
    </head>
    <body>
        <header>
            <a href="<?php echo url_for("/staff/index.php"); ?>"><h2 id="logo">GBI Staff Area</h2></a>
       
        </header>
        <nav>
            <ul>
                <li><a href="<?php echo url_for("/staff/index.php"); ?>">Main</a></li>
            </ul>
        </nav>


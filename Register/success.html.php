<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Success</title>
        <meta name="description" content="Ace in the Hole Multisport Events">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../css/style.css>
			<link rel="stylesheet" href="../css/grid.css">
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <?php include '../includes/header.inc.html.php'; ?>
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars($myname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
                  Phone: <?php echo htmlspecialchars($myphone, ENT_QUOTES, 'UTF-8'); ?><br>
                  Event: <?php echo htmlspecialchars($setevent, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contacts Name: <?php echo htmlspecialchars($emergname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contacts Email: <?php echo htmlspecialchars($emergemail, ENT_QUOTES, 'UTF-8'); ?><br>
                  Tshirt: <?php echo htmlspecialchars($mytshirt, ENT_QUOTES, 'UTF-8'); ?><br>
                  Role: <?php echo htmlspecialchars($myathlete, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>
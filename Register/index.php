<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=kimberl2_ace_db', 'kimberl2_ace_user', 'myP4sswOrd!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

if (isset($_POST['myname'])) {
    $mygender = $_POST['mygender'];
    $myname = $_POST['myname'];
    $mytshirt = $_POST['mytshirt'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $myathlete = $_POST['myathlete'];
    $myvolunteer = $_POST['myvolunteer'];
	 //$myathlete2 = $_POST['myathlete2'];
   // $myvolunteer2 = $_POST['myvolunteer2'];
    $setevent = $_POST['setevent'];
		$setevent2 = $_POST['setevent2'];
	  $emergname = $_POST['emergname'];
		$emergemail = $_POST['emergemail'];



    echo '<pre>\n';
    print_r($_POST);
    echo '</pre>\n';

     try {
       //  $sql = $sql = "INSERT INTO reservations (mygender, name, tshirt, email, phone, athlete, volunteer, event, event2, emergname, emergemail)";
      //   $sql .= "VALUES (:mygender, :name, :tshirt, :email, :phone, :athlete, :volunteer,:event, :event2 :emergname, :emergemail)";
			 //athlete2, volunteer2
			 //:athlete2, :volunteer2
			 	 $sql = "INSERT INTO reservations (mygender, name, tshirt, email, phone, athlete, volunteer, event, event2, emergname, emergemail) VALUES (:mygender, :name, :tshirt, :email, :phone, :athlete, :volunteer, :event, :event2 :emergname, :emergemail)";
         $s = $pdo->prepare($sql);
         $s->bindParam(':mygender', $mygender, PDO::PARAM_STR);
         $s->bindParam(':name', $myname, PDO::PARAM_STR);
         $s->bindParam(':tshirt', $mytshirt, PDO::PARAM_STR);
         $s->bindParam(':email', $myemail, PDO::PARAM_STR);
         $s->bindParam(':phone', $myphone, PDO::PARAM_STR);
         $s->bindParam(':athlete', $myathlete, PDO::PARAM_STR);
         $s->bindParam(':volunteer', $myvolunteer, PDO::PARAM_STR);
			 	 //$s->bindParam(':athlete2', $myathlete2, PDO::PARAM_STR);
        // $s->bindParam(':volunteer2', $myvolunteer2, PDO::PARAM_STR);
         $s->bindParam(':event', $setevent, PDO::PARAM_STR);
			 	 $s->bindParam(':event2', $setevent2, PDO::PARAM_STR);
			 	 $s->bindParam(':emergname', $emergname, PDO::PARAM_STR);
			 	 $s->bindParam(':emergemail', $emergemail, PDO::PARAM_STR);
         $s->execute();
     } catch (PDOException $e) {
         $error = 'Error adding submitted reservations: ' . $e->getMessage();
         include '../includes/error.html.php';
         exit();
     }

     if (isset($_POST['myname']))
     {
         include 'success.html.php';
         exit();
     }else{
         header('Location: .');
         exit();
     }
     // Add an else to load the initial page if the initial (line 19) if statement is false


}

include 'reservations.html.php'; //Modify this to include the initial file for this folder

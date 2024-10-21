<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggad</title>
</head>
<body>

    <?php 

        if(isset($_POST['firstname'], ($_POST['lastname']), ($_POST['username']), ($_POST['password']))) {
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $username = $_POST['username'];
         $password = $_POST['password'];

    if (!mb_check_encoding($firstname)) {
        header('Location: index.html');
        exit;  // Viktigt att avsluta scriptet efter en redirect
    } elseif (!mb_check_encoding($lastname)) {
        header('Location: index.html');
        exit;  // Avsluta här också
    } elseif (!mb_check_encoding($username)) {
        header('Location: index.html');
        exit;  
    } elseif (!mb_check_encoding($password)) {
        header('Location: index.html');
        exit;  
    }
            
        

        $firstname = htmlspecialchars($firstname);
        $firstname = trim($firstname);
        $firstname = stripslashes($firstname);

        $lastname = htmlspecialchars($lastname);
        $lastname = trim($lastname);
        $lastname = stripslashes($lastname);

        $username = htmlspecialchars($username);
        $username = trim($username);
        $username = stripslashes($username);

        $password = htmlspecialchars($password);
        $password = trim($password);
        $password = stripslashes($password);

        header('Content-Type: text/html; charset=utf-8');
                // Visa användardata
                echo "<h2>Användarinformation</h2>";
                echo "Ditt förnamn är: $firstname <br>";
                echo "Ditt efternamn är: $lastname <br>";
                echo "Ditt användarnamn är: $username <br>";
                echo "Ditt lösenord är: $password <br>";

        }
    ?>

</body>
</html>

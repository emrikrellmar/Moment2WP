<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<form action="./loggedin.php" method="post">
   <h1>Logga in</h1>
    <label>Förnamn</label><br>
    <input type="text" name="firstname" required>
    <br />
    <label>Efternamn</label><br />
    <input type="text" name="lastname" required>
    <br />
    <label>Användarnamn</label><br />
    <input type="text" name="username" required>
    <br />
    <label>Lösenord</label><br />
    <input type="password" name="password" required>
    <br />
    <input type="submit" value="Skicka">
</form>

   <?php 
$page["head"] = "<h1>Välkommen</h1>";
$page["main"] = "<p>Detta är innehållet på min sida</p>";
$page["footer"] = "<hr><p>Min sidfoot</p>";

foreach ($page as $section) {
   echo $section;
}
   $tal1 = 2;
   $tal2 = 5;

    include('../inc/math.php'); 

    $summa = sum($tal1, $tal2); 
    $prod = multiply($tal1, $tal2);
    $subtraction = subtract($tal1, $tal2);
    $kvot = kvot($tal1, $tal2);

    echo("tal ett är $tal1 <br> ");
    echo("tal två är $tal2 <br>");
    header('Content-Type: text/html; charset=utf-8');
    echo "Summan av $tal1 och $tal2 är $summa<br>";
    echo "Produkten av $tal1 och $tal2 är $prod <br> ";
    echo "Differansen av $tal1 och $tal2 är $subtraction <br> ";
    echo "Kvoten av av $tal1 och $tal2 är $kvot <br> ";

    $text = "<p>Hej <b>världen</b>!</p>";
    echo strip_tags($text);    

   echo("<br>");

   for($i = 1.0; $i <= 5; $i += 0.1 ){
      echo $i . "\r\n";
  }

  echo("<br>");

  $x = 1.0;
  while($x <= 5){
      echo $x . "\r\n";
      $x += 0.1;
  }
   ?>

</body>
</html>
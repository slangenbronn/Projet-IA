<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<?php
header('Content-Type: text/html; charset=utf-8');
$ligne = 1; // compteur de ligne
$fic = fopen("Questionnaires/systeme expert stop trauma .csv", "r");
while($tab=fgetcsv($fic,1024,';'))
{
	$champs = count($tab);//nombre de champ dans la ligne en question	
	$ligne ++;
	switch ($tab[1]) {
    case "Titre":
    	echo "<br><br>";
        echo "<h2>" . $tab[0] . "</h2>";
        break;
    case "Text":
    	echo "<p>" . $tab[0] . "</p>";
        echo "<input type=text>";
        break;
    case "Non":
    	echo "<br>";
        echo "<p>" . $tab[0] . "</p>";
        break;
    case "Choix":
    	echo "<p>" . $tab[0] . "</p>";
    	echo "<select>";
    	echo "<option></option>";
    	for($i = 3; $i < $champs; $i++){
    		echo "<option>" . $tab[$i] ."</option>";
    	}
    	echo "</select>";
	}
}

?>

</body>
</html>	



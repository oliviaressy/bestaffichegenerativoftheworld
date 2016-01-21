<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Random Typefaces</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
	<div class= "francais"> Bienvenue sur le générateur d'affiche.
	<br> Créez facilement votre propre visuel ! 
	</div>
	<div class= "anglais"> Welcome on the poster generator.
    <br> Create easily your own poster! 
	</div>
	
	<!-- Créer le formulaire + je donne une method POST + dans action je lui indique dans quel fichier va s'afficher les données-->
	<form action="affiches.php" method="POST"enctype="multipart/form-data"> 
<!-- 		<fieldset></fieldset> -->
		<!-- Insérer les input du formulaire  -->
		<ul> 
			<div class="asso">
			<li> <label for="asso">nom</label>
			<input type="text" name="asso"> </li>
			</div>

			<li> <label for="titre">titre</label>
			<input type="text" name="titre"> </li>

			<li> <label for="soustitre">sous titre</label>
			<input type="text" name="soustitre"> </li>

			<li> <label for="date">date</label>
			<input type="text" name="date"> </li>

			<li> <label for="heure">horaires</label>
			<input type="text" name="heure"> </li>

			<li> <label for="adresse">adresse</label>
			<input type="text" name="adresse"> </li>
			<li> <label for="presentation">Texte de présentation</label>
       		<br />
       		<textarea name="presentation" id="presentation" rows="5" cols="30">
       		</textarea> </li>
			<li>
			<!-- On limite le fichier à 2Mo -->
	     	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	     	Logo (- de 20mo) : <input type="file" name="logo">
	 		</li>
			<!-- cases à cocher catégories -->
			<p> categories :<br />
       <input type="radio" name="categorie" value="salut" id="salut" /> <label for="salut">salut</label><br />
       <input type="radio" name="categorie" value="bal" id="bal" /> <label for="bal">bal</label><br />
       <input type="radio" name="categorie" value="loto" id="loto" /> <label for="loto">loto</label><br />
       <input type="radio" name="categorie" value="kermesse" id="kermesse" /> <label for="kermesse">kermesse</label>
   </p>

			<!-- Bouton Valider le formulaire -->
			<input type="submit">
		</ul> 
	</form>
	
</body>
</html>

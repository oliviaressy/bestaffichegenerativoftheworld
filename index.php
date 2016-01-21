<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- Créer le formulaire + je donne une method POST + dans action je lui indique dans quel fichier va s'afficher les données-->
	<form action="affiches.php" method="POST"enctype="multipart/form-data"> 
<!-- 		<fieldset></fieldset> -->
		<!-- Insérer les input du formulaire  -->
		<ul> 
			<li> <label for="asso">nom de l'association</label>
			<input type="text" name="asso"> </li>

			<li> <label for="titre1">titre1</label>
			<input type="text" name="titre1"> </li>

			<li> <label for="titre2">titre2</label>
			<input type="text" name="titre2"> </li>

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

<?php
    	// Vérifier si le formulaire a été soumis
    	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        	$nom = $_POST["nom"];
        	$email = $_POST["email"];
        	$commentaire = $_POST["commentaire"];
		// Enregistrement du commentaire dans un fichier
       	 	$fichier = fopen("commentaires.txt", "a");
        	fwrite($fichier, "Nom: " . $nom . "\n");
        	fwrite($fichier, "Email: " . $email . "\n");
        	fwrite($fichier, "Commentaire: " . $commentaire . "\n\n\n");
        	fclose($fichier);
			
		echo "Merci pour votre commentaire!";
	}
?> 

<?php
    			// Vérifier si le formulaire a été soumis
    			if ($_SERVER["REQUEST_METHOD"] == "POST") {
        			// Récupérer les données du formulaire
        			$nom = $_POST["nom"];
        			$email = $_POST["email"];
        			$commentaire = $_POST["commentaire"];
			        // Enregistrement du commentaire dans un fichier
       	 			fopen("commentaires.txt", "a");
        			fwrite("Nom: " . $nom . "\n");
        			fwrite("Email: " . $email . "\n");
        			fwrite("Commentaire: " . $commentaire . "\n\n\n");
        			fclose("commentaires.txt");
        			// Affiche un message de succès, si commentaires bien enregistrer dans le fichier
        			echo "Merci pour votre commentaire!";
			}
    				?>

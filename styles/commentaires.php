<?php
    			// Vérifier si le formulaire a été soumis
    			
        			// Récupérer les données du formulaire
        			$nom = $_POST["nom"];
        			$email = $_POST["email"];
        			$commentaire = $_POST["commentaire"];
        			// Validation des données (vous pouvez ajouter vos propres règles de validation ici)
			        // Enregistrement du commentaire dans une base de données ou dans un fichier, etc.
        			// Exemple de code pour enregistrer dans un fichier
       	 			$fichier = fopen("commentaires.txt", "a");
        			fwrite($fichier, "Nom: " . $nom . "\n");
        			fwrite($fichier, "Email: " . $email . "\n");
        			fwrite($fichier, "Commentaire: " . $commentaire . "\n\n");
        			fclose($fichier);

        			// Affichage d'un message de succès
        			echo "Merci pour votre commentaire!";
        			exit(); // Arrêter l'exécution du script après l'affichage du message
    				
    				?>

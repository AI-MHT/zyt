<!DOCTYPE html>

<html lang="ar">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title id="pageTitle">Rappel : PHP</title>
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
		<h1 id="title"> Page MENU </h1>
	</header>
	<body>
	<div id="form-outer">
		<form id="survey-form">
        <div class="rowTab">
		      	<div class="labels"><!--choix morale-->
		        	<label for="most-like">Liste des plats contenant l'ingredient suivant :  </label>
		      	</div>
		      	<div class="rightTab">
                  <?php
                    $db_host = "localhost";
                    $db_username = "root";
                    $db_password = "";
                    $db_name = "phprappel";

                    // Créez une connexion à la base de données
                    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

                    // Vérifiez si la connexion a réussi
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Exécutez une requête SQL pour récupérer les ingrédients depuis la table "ingredients"
                    $query = "SELECT id, nom FROM ingredients";
                    $result = $conn->query($query);

                    // Vérifiez si des résultats ont été renvoyés
                    if ($result->num_rows > 0) {
                        echo '<div class="rightTab">';
                        echo '<select id="most-like" name="mostLike" class="dropdown">';
                        
                        // Ajoutez une option par ingrédient dans le menu déroulant
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["id"] . '">' . $row["nom"] . '</option>';
                        }

                        echo '</select>';
                        echo '</div>';
                    } else {
                        echo "Aucun ingrédient trouvé.";
                    }

                    // Fermez la connexion à la base de données
                    $conn->close();
                    ?>

		      	</div>
		    </div>
			<div class="rowTab"> 
				<div class="labels"><!-- demande de nom -->
					<label id="name-label" for="name">Liste des plats contenant le mot suivant :</label>
				</div>
				<div class="rightTab">
					<input autofocus type="text" name="name" id="name" class="input-field"><button id="serch" type="search">OK</button>
				</div>
			</div>
            <div class="labels"><!-- demande de nom -->
					<label id="name-label" for="name" display="left" >Liste des plats par fourchette de prix par origine et par de plat choisir :</label>
				</div>
			<div class="rowTab">
				<div class="labels"><!-- demande de Mail-->
					<label id="email-label" for="prixmin">Prix min :</label>
				</div>
				<div class="rightTab">
					<input type="number" name="prixmin" id="number" class="input-field" >
				</div>
			</div>
			<div class="rowTab">
				<div class="labels"><!--demande d'age ma gueule-->
					<label id="number-label" for="prixmax">Prix max:</label>
				</div>
				<div class="rightTab">
					<input type="number" name="prixmax" id="number" min="1" max="550" class="input-field" >
				</div>
			</div>
			<div class="rowTab">
				<div class="labels"><!-- choix multiple sur le job-->
					<label for="currentPos">Origine:</label>
				</div>
				<div class="rightTab">
                    <select id="dropdown" name="currentPos" class="dropdown">
                    <?php
                        $db_host = "localhost";
                        $db_username = "root";
                        $db_password = "";
                        $db_name = "phprappel";

                        // Créez une connexion à la base de données
                        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

                        // Vérifiez si la connexion a réussi
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Exécutez une requête SQL pour récupérer les types de plats depuis la table "plats"
                        $query = "SELECT DISTINCT type FROM plats";
                        $result = $conn->query($query);

                        // Vérifiez si des résultats ont été renvoyés
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<option>' . $row["type"] . '</option>';
                            }
                        } else {
                            echo '<option>Aucun type de plat trouvé.</option>';
                        }

                        // Fermez la connexion à la base de données
                        $conn->close();
                        ?>
					</select><button id="serch" type="search">OK</button>
				</div>
			</div>

			<button id="submit" type="submit">Visualiser le panier</button>
		</form>
	</div>

	</body>
</html>

<?php 
$index = true;
include_once("header.php");
include_once("main.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérification et nettoyage des données
    $nom = filter_input(INPUT_POST, 'inputnom', FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, 'inputprenom', FILTER_SANITIZE_STRING);
    $dateNaissance = filter_input(INPUT_POST, 'inputdate', FILTER_SANITIZE_STRING);

    // Vérification que toutes les données sont présentes et valides
    if ($nom && $prenom && $dateNaissance) {
        try {
            $query = "INSERT INTO Enfants (nom, prenom, dateNaissance) VALUES (:nom, :prenom, :dateNaissance)";
            $pdostmt = $pdo->prepare($query);
            $pdostmt->execute([
                "nom" => $nom,
                "prenom" => $prenom,
                "dateNaissance" => $dateNaissance
            ]);
            $pdostmt->closeCursor();
            echo "<p class='text-success'>L'enfant a été ajouté avec succès.</p>";
        } catch (PDOException $e) {
            // En cas d'erreur, rediriger vers une page d'erreur générique
            header("Location: error.php?message=Erreur lors de l'ajout");
            exit();
        }
    } else {
        // Si les données sont invalides, afficher un message d'erreur
        echo "<p class='text-danger'>Veuillez remplir tous les champs correctement.</p>";
    }
}
?>

<h1 class="mt-5">Ajouter un enfant</h1>
<form class="row g-3" method="POST">
  <div class="col-md-6">
    <label for="inputnom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputnom" name="inputnom" required>
  </div>
  <div class="col-md-6">
    <label for="inputprenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="inputprenom" name="inputprenom" required>
  </div>
  <div class="col-md-6">
    <label for="inputdate" class="form-label">Date de naissance</label>
    <input type="date" class="form-control" id="inputdate" name="inputdate" value="2020-07-22" min="2013-01-01" max="2024-12-31" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="float:right;margin-bottom:20px">Ajouter</button>
  </div>
</form>

<?php 
include_once("footer.php");
?> 


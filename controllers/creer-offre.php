<?php 

    session_start();

    $dossier_database = __DIR__ . '/../database/';

    if (!is_dir($dossier_database)) {
        mkdir($dossier_database, 0755, true);
    }

    $pdo = new PDO('sqlite:' . $dossier_database . 'lshipromo.sqlite');
    $pdo->exec("CREATE TABLE IF NOT EXISTS promotion (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nom_produit TEXT NOT NULL,
        prix_initial INTEGER NOT NULL,
        prix_promo INTEGER NOT NULL,
        devise TEXT NOT NULL,
        magasin TEXT NOT NULL,
        chemin_image TEXT NOT NULL
    )"); 

    $nom_produit = $_POST['nom_produit'];
    $prix_initial = $_POST['prix_initial'];
    $prix_promo = $_POST['prix_promo'];
    $devise = $_POST['devise'];
    $magasin = $_POST['magasin'];

    $dossier_uploads = __DIR__ . '/../uploads/'.$magasin.'/';
    if (!is_dir($dossier_uploads)) {
        mkdir($dossier_uploads, 0755, true);
    }

    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $nom_fichier = uniqid() . '.' . $extension;
    $chemin_complet = $dossier_uploads . $nom_fichier;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $chemin_complet)) {
        $chemin_image = 'uploads/'.$magasin.'/'.$nom_fichier;
        $stmt = $pdo->prepare("
            INSERT INTO promotion (nom_produit, prix_initial, prix_promo, devise, magasin, chemin_image) 
            VALUES (:nom_produit, :prix_initial, :prix_promo,
             :devise, :magasin, :chemin_image)");
        $stmt->execute([
            ':nom_produit' => $nom_produit,
            ':prix_initial' => $prix_initial,
            ':prix_promo' => $prix_promo,
            ':devise' => $devise,
            ':magasin' => $magasin,
            ':chemin_image' => $chemin_image
        ]);
        $_SESSION['succes'] = "Offre promotionnelle créée avec succès !";
    } else {
        $_SESSION['error'] = "Erreur lors du téléchargement de l'image.";
    }

    header('Location: ../publier.php');
    exit();
?>
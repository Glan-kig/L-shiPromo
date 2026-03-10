<?php 

    session_start();

    $dossier_database = __DIR__ . '/../database/';

    $pdo = new PDO('sqlite:' . $dossier_database . 'lshipromo.sqlite');

    $id = $_GET['id'];

    $stmt = $pdo->prepare('DELETE FROM promotion WHERE id = :id');

    $stmt->execute([':id' => $id]);

    $_SESSION['succes'] = "L'offre promotionnelle $id a été supprimée avec succès !";

    header('Location: ../dashboard.php');

?>
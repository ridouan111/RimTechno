<?php
    try{
        $bdd=new PDO("mysql:host=localhost;dbname=rimetechno_db","root","");
    }catch(Exception $e){die($e->getMessage());}

    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $contenu=$_POST['contenu'];
    $dateAjoute=$_POST['dateAjoute'];
    $ref=$_POST['ref'];
    
    $req=$bdd->prepare("insert into article(titre,auteur,contenu,dateAjoute,ref) values(:titre,:auteur,:contenu,:dateAjoute,:ref)");
    $req->execute(array(
        'titre'=> $titre,
        'auteur' => $auteur,
        'contenu' => $contenu,
        'dateAjoute' => $dateAjoute,
        'ref' => $ref
    ));
    
    header("Location: ../pageAdmin.php");

?>
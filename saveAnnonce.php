<?php
    try{
        $bdd=new PDO("mysql:host=localhost;dbname=rimetechno_db","root","");
    }catch(Exception $e){die($e->getMessage());}

    $nomSociete=$_POST['nomSociete'];
    $adresse=$_POST['adresse'];
    $email=$_POST['email'];
    $siteWeb=$_POST['siteWeb'];
    $dateAjoute=$_POST['dateAjoute'];
    $fax=$_POST['fax'];
    $ref=$_POST['ref'];
    
    $req=$bdd->prepare("insert into annonce(nomSociete,adresse,email,siteWeb,dateAjoute,fax,ref) values(:nom,:adr,:email,:site,:date,:fax,:ref)");
    $req->execute(array(
        'nom' => $nomSociete,
        'adr' => $adresse,
        'email'=> $email,
        'site' => $siteWeb,
        'date' => $dateAjoute,
        'fax' => $fax,
        'ref' => $ref
    ));
     header("Location: ../pageAdmin.php");

   
    
?>
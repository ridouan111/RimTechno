<?php

    try{
        $bdd=new PDO("mysql:host=localhost;dbname=rimetechno_db","root","");
    }catch(Exception $e){die($e->getMessage());}

    $disignation=$_POST['designation'];
    $prixU=$_POST['prixU'];
    $date =$_POST['date'];
    $description=$_POST['description'];
    $prixVente=$_POST['prixVente'];
    $QteStock=$_POST['QteStock'];
    $Ref=$_POST['Ref'];
    
    $req=$bdd->prepare("insert into produit(designation,prixU,date,description,prixVente,QteStock,Ref) values(:des,:prixU,:d,:desc,:prixV,:Qte,:R)");
    $req->execute(array(
        'des' => $disignation,
        'prixU' => $prixU,
        'd' => $date,
        'desc'=> $description,
        'prixV' =>$prixVente,
        'Qte' => $QteStock,
       
        'R' => $Ref
    ));
 echo 'bien enregistre';
 header("Location: ../pageAdmin.php");
?>
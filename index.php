<html>
    <head>
        <meta charset="UTF-8" >
        <title>RIMtechno| admin</title>
        <link rel="stylesheet" href="styleAdmin.css" >
    </head>
    <body>
        <diV class="header">
            <img src="t.png" class="menu" width="50" height="100%" id="menuButton">
            <span class="RIMtechno">RIMtechno</span>
            
                    <div class="adminZone">
                        <span class="Admin">M.Ridouan</span>
                        <img src="icons8-system-administrator-male-96.png" width="50" height="80%"> 
                    </div>
        </diV>
        <div class="menuBarre" id="menu">
                <ul>
                    <li>
                        <div class="menuMember" id="stockButt">
                            <img src="boxes.png" width="40" height="40">
                            <span class="MemberName" >
                                Stock
                            </span>
                        </div>
                    </li>
                    
                    <li>
                        <div class="menuMember" >
                            <img src="inventory.png" width="40" height="40">
                            <span class="MemberName">
                                Fournnisseurs
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="menuMember" id="annonceButt">
                            <img src="ads.png" width="40" height="40">
                            <span class="MemberName">
                                Annonces
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="menuMember" id="ArticleButt">
                            <img src="newspaper.png" width="40" height="40">
                            <span class="MemberName">
                                Articles
                            </span>
                        </div>
                    </li>
                </ul>
        </div>
<!--  Stock   ______________________________________________-->
        <div class="fenetre" id="f_Stock">
                <img src="close-button.png" width="30" height="30" class="close" id="close">
                <ul class="gestion">
                        <li>
                            <div class="action" id="openAjouteStock">
                                <img src="add.png" width="30" height="30">
                                <span>Ajouter produit</span>
                            </div>
                        </li>
                        <li>
                            <div class="action">
                                <img src="boxes.png" width="30" height="30">
                                <span>consulter stock</span>
                            </div>
                        </li>
                       
                </ul>
                <ul class="Thebest">
                    <li>
                        <table>
                            <tr><td><img src="best-seller.png" width="50" height="50" ></td><td><span>best categorie : </span></td><td> Pc</td></tr>
                            <tr><td><img src="order.png" width="40" height="40"></td><td><span> Nombre Commandes : </span></td><td> 12800</td></tr>
                            <tr><td><img src="boxes (1).png"  width="40" height="40"></td><td><span> Quantité resté en stock : </span></td><td>  345</td></tr>
                            
                        </table>

                    </li>
                </ul>
        </div>


        <div class="fenetre" id="f_AjouteStock">
            
            <form action="Modele/SaveProduct.php" method="post">
            <img src="left-arrow.png" width="30" height="30" class="previous" id="previous">
            <img src="close-button.png" width="30" height="30" class="close" id="closeAjouteStock">
            <table class="formLeft">
                <tr><td>Designation :</td><td><input type="text" name="designation"> </td></tr>
                <tr><td>prix Unitaire :</td><td><input type="text" name="prixU"> </td></tr>
                <tr><td>Description :</td><td><input type="text" name="description"> </td></tr>
                <tr><td>prix de vente :</td><td><input type="text" name="prixVente"> </td></tr>
                <tr><td>Quantité en stock :</td><td><input type="text" name="QteStock"> </td></tr>
            </table>
            <table class="formRight">
                <tr><td>Date d'ajoute :</td><td><input type="date" name="date"> </td></tr>
                <tr><td>Fournnisseurs :</td><td><input type="text" name="F"> </td></tr>
                <tr><td>images :</td><td><input type="file"> </td></tr>
                <tr><td>References :</td><td><input type="text" name="Ref"> </td></tr>
                
            </table>
            <input type="submit" value="Ajouter" class="saveButt">
            </form>
        </div>
        

<!---------------------------------------------------------------------------->
<!-- anonnce ___________________________________________________________ -->

        <div class="fenetre" id="f_annonces">
            <img src="close-button.png" width="30" height="30" class="close" id="closeAnnonce">
                <ul class="gestion">
                        <li>
                            <div class="action" id="openAjouteAnnonce">
                                <img src="add.png" width="30" height="30">
                                <span>Ajouter Annonce</span>
                            </div>
                        </li>
                        <li>
                            <div class="action">
                                <img src="boxes.png" width="30" height="30">
                                <span>liste des Annonces</span>
                            </div>
                        </li>
                       
                </ul>
                <ul class="Thebest">
                    <li>
                        <table>
                            <tr><td><img src="best-seller.png" width="50" height="50" ></td><td><span>mielleur annonce: </span></td><td> SOS </td></tr>
                            <tr><td><img src="best-price.png" width="40" height="40"></td><td><span> Montant : </span></td><td> 5 000 DH</td></tr>
                            <tr><td><img src="back-in-time.png"  width="40" height="40"></td><td><span> Durrée : </span></td><td> 27 jours</td></tr>
                            
                        </table>

                    </li>
                </ul>
        </div>
        <div class="fenetre" id="f_AjouteAnnonce">
            <form action="Modele/saveAnnonce.php" method="post">
                <img src="left-arrow.png" width="30" height="30" class="previous" id="previousAnnonce">
                <img src="close-button.png" width="30" height="30" class="close" id="closeAjouteAnnonce">
                <table class="formLeft">
                    <tr><td>Nom Societe :</td><td><input type="text" name="nomSociete"> </td></tr>
                    <tr><td>Adresse :</td><td><input type="text" name="adresse"> </td></tr>
                    <tr><td>email :</td><td><input type="text" name="email"> </td></tr>
                    <tr><td>Site Internet :</td><td><input type="text" name="siteWeb"> </td></tr>
                </table>
                <table class="formRight">
                    <tr><td>Date d'ajoute :</td><td><input type="date" name="dateAjoute"> </td></tr>
                    <tr><td>Fax :</td><td><input type="text" name="fax"> </td></tr>
                    <tr><td>contenue(image,vidéo) :</td><td><input type="file"> </td></tr>
                    <tr><td>References :</td><td><input type="text" name="ref"> </td></tr>
                    
                </table>
                <input type="submit" value="Ajouter" class="saveButt">
                </form>
        </div>


<!------------------------------------------------------------------------------>
<!--  Article _______________________________________________________________-->

<div class="fenetre" id="f_Article">
    <img src="close-button.png" width="30" height="30" class="close" id="closeArticle">
    <ul class="gestion">
            <li>
                <div class="action" id="openAjouteArticle">
                    <img src="add.png" width="30" height="30">
                    <span>Ajouter article </span>
                </div>
            </li>
            <li>
                <div class="action">
                    <img src="boxes.png" width="30" height="30">
                    <span>Liste des articles</span>
                </div>
            </li>
           
    </ul>
    <ul class="Thebest">
        <li>
            <table>
                <tr><td><img src="best-seller.png" width="50" height="50" ></td><td><span>best Article : </span></td><td>Iphone : Battery</td></tr>
                <tr><td><img src="icons8-eye-96.png" width="40" height="40"></td><td><span> Nombre view : </span></td><td> 12800</td></tr>
                <tr><td><img src="like.png"  width="40" height="40"></td><td><span> Nombre d'impression : </span></td><td>  345</td></tr>
                
            </table>

        </li>
    </ul>
</div>

<div class="fenetre" id="f_AjouteArticle">
    <form action="Modele/saveArticle.php" method="post">
        <img src="left-arrow.png" width="30" height="30" class="previous" id="previousArticle">
        <img src="close-button.png" width="30" height="30" class="close" id="closeAjouteArticle">
        <table class="formLeft">
            <tr><td>titre :</td><td><input type="text" name="titre" > </td></tr>
            <tr><td>Auteur :</td><td><input type="text" name="auteur"> </td></tr>
            <tr><td>Contenue(Text) :</td><td><textarea cols="30" rows="6" name="contenu"></textarea> </td></tr>
       
        </table>
        <table class="formRight">
            <tr><td>Date d'ajoute :</td><td><input type="date" name="dateAjoute"> </td></tr>
            <tr><td>contenue(image) :</td><td><input type="file"> </td></tr>
            <tr><td>References :</td><td><input type="text" name="ref"> </td></tr>
            
        </table>
        <input type="submit" value="Ajouter" class="saveButt" id="saveArticleButt">
        </form>
</div>

<!----------------------------------------------------------------------->












            <div class="container">
                
                    <div class="carts">
                            <div class="cart"><img src="icons8-sales-performance-64.png" width="60" height="50" > <span class="title">Total Revenu</span> <span class="value">55503980 DH</span> </div>
                            <div class="cart"><img src="icons8-total-sales-50.png" width="60" height="50">  <span class="title">Total vente</span> <span class="value">15908765 </span> </div>
                            <div class="cart"><img src="icons8-eye-96.png" width="60" height="50">  <span class="title">Total visites</span> <span class="value">15908765 </span></div>
                    </div>
            </div>

           
           <script src="AdminJs.js"></script>
    </body>
</html>
  var menuButton=document.getElementById('menuButton'),
        openAjouteStock=document.getElementById('openAjouteStock'),
        openAjouteAnnonce=document.getElementById('openAjouteAnnonce'),
        openAjouteArticle=document.getElementById('openAjouteArticle'),
        menu=document.getElementById('menu'),
        previousButt=document.getElementById('previous'),
        previousAnnonce=document.getElementById('previousAnnonce'),
        previousArticle=document.getElementById('previousArticle'),
        i=0,    
        f_Stock=document.getElementById('f_Stock'),
        f_AjouteStock=document.getElementById('f_AjouteStock'),
        f_annonce=document.getElementById('f_annonces'),
        f_AjouteAnnonce=document.getElementById('f_AjouteAnnonce'),
        f_Article=document.getElementById('f_Article'),
        f_AjouteArticle=document.getElementById('f_AjouteArticle'),


        closeAjouteStcok=document.getElementById('closeAjouteStock'),
        closeAjouteAnnonce=document.getElementById('closeAjouteAnnonce'),
        closeStock=document.getElementById('close'),
        closeAnnonce=document.getElementById('closeAnnonce'),
        closeArticle=document.getElementById('closeArticle'),
        closeAjouteArticle=document.getElementById('closeAjouteArticle'),
        stockButt=document.getElementById('stockButt'),
        annonceButt=document.getElementById('annonceButt'),
        ArticleButt=document.getElementById('ArticleButt'),

        saveArticleButt=document.getElementById('saveArticleButt');

      
        
        menu.hidden=true;
        f_Stock.hidden=true;
        f_AjouteStock.hidden=true;
        f_annonce.hidden=true;
        f_AjouteAnnonce.hidden=true;
        f_Article.hidden=true;
        f_AjouteArticle.hidden=true;

        saveArticleButt.addEventListener("click",function(e){
                alert("article a été bien enregistré");
        },false)


      menuButton.addEventListener('mouseover',function(e){
                if(i%2!=0){
                menu.hidden=true;
                        }
                else{
                 menu.hidden=false;
                }
                 i++;
        },false);

        stockButt.addEventListener('click',function(e){
                f_Stock.hidden=false;
        },false);
        closeStock.addEventListener('click',function(e){
                        f_Stock.hidden=true;             
        },false);
        closeAjouteStcok.addEventListener('click',function(e){
                f_AjouteStock.hidden=true;
                f_Stock.hidden=true;
        },false);
        closeAnnonce.addEventListener('click',function(e){
                f_annonce.hidden=true;
        },false);
        closeAjouteAnnonce.addEventListener('click',function(e){
                f_AjouteAnnonce.hidden=true;
                f_annonce.hidden=true;
        },false)
        openAjouteStock.addEventListener('click',function(e){
                f_AjouteStock.hidden=false;
        },false);
        openAjouteAnnonce.addEventListener('click',function(e){
                f_AjouteAnnonce.hidden=false;
        },false);
        openAjouteArticle.addEventListener('click',function(e){
                f_AjouteArticle.hidden=false;
        },false);
        closeArticle.addEventListener('click',function(e){
                f_Article.hidden=true;
        },false);
        closeAjouteArticle.addEventListener('click',function(e){
                f_AjouteArticle.hidden=true;
                f_Article.hidden=true;
        },false);
        previousButt.addEventListener('click',function(e){
                f_AjouteStock.hidden=true;
                f_Stock.hidden=false;
        },false);
        previousAnnonce.addEventListener('click',function(e){
                f_AjouteAnnonce.hidden=true;
                f_annonce.hidden=false;
        },false);
        previousArticle.addEventListener('click',function(e){
                f_AjouteArticle.hidden=true;
                f_Article.hidden=false;
        },false);
        annonceButt.addEventListener('click',function(e){
                        f_annonce.hidden=false;
        },false);
        ArticleButt.addEventListener('click',function(e){
                f_Article.hidden=false;
        },false);


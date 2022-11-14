<!DOCTYPE html>    
<html>
    
    <head>
        <title><?php echo "Libreria online"?></title>
        <!--<link rel="stylesheet" href="css/libreria.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            html,body{
        background-color: rgb(66,66,66);
        font-family: 'Open Sans', sans-serif;
        margin:0px;
        padding:0px; /*cornice*/
        }
        /*MAIN MENU*/
        .rettangolo{
            background-color:  rgb(123, 0, 0);
            width:100%;
            height:70px;
        }
        .titolo{/*TITOLO MANIN_MENU*/
            color: white;
            width:300px;
            float:left;
            margin-top:10px;/*SPOSTAMENTO TITOLO */
            margin-left:10px;
        }
        .main_menu_opzioni{
            float:right;
            margin-top:20px;/* SPOSTAMENTO*/
            margin-right:10px;
        }
        a{
            color:white;
            margin-right: 5px;
            text-decoration: none;/*tolgo la SOTTOLINEATURA*/
        }
        .op_selezionata{ /*quando seleziono l'opzione, mi viene sottolineata*/
            text-decoration: underline;
        }
        .clear{
            clear:both;
        }
        /*FINE MAIN MENU*/

        /*HEADER*/
        .titolo_news{
            color: white;
            margin-left: 10px;
            margin-bottom: 4px;
        }
        .line{ /* Linea bianca*/
            border: 2px solid white;
            margin-left: 10px;
        }
        /*FINE HEADER*/

        /*CONTENT*/
        .news,.news_2{
            display: flex;
            align-items: flex-start;
            justify-content: center;
            margin:20px 0px 20px 0px;
        }
            /*BOX per contenere le notizie*/
            /*Stessa cosa come nei contatti*/
            .box_news{ /* Rettangolo dove inquadro le news*/
                background-color: rgb(123, 0, 0);
                width:300px;
                height:300px;
                margin-left: 10px;
                border-radius:4%;
            }
            .line_2{
                border: 1px solid white;
                margin-left: 11px;
            }
            .titolo_box_news{
                margin-top: 10px;
                margin-left: 10px;
                margin-bottom: 10px;
                color: white;
            }
            .foto_box_news{ /*adatto l'immagine al box delle news*/
                width:65%;
                height:35%;
                margin:10px;
            }
            .testo{
                color: white;
                font-size: 10px;
                margin-left: 11px;
                margin-right:10px;
            }
        /*FINE CONTENT*/

        /* FOOTER*/
        .rettangolo_4{
                position: absolute;
                bottom:0px;
                background-color:rgb(123, 0, 0);
                width:100%;
                height: 205px;
            }
            h4{
                color: white;
                margin:10px 0px 10px 10px;
            }
            .line{ /* Linea bianca*/
            border: 2px solid white;
            margin-left: 10px;
            margin-bottom: 10px;
            }
            .main_menu_opzioni_2{ /*SECONDO menu di opzioni nel footer*/
                list-style: none;
                margin:left;
                margin:20px 0px 10px 10px;
                
            }
            .box_social{
                float:right;
                margin-bottom: 120px;
            }
            .icone_social{
                width:35px;
                margin: 10px;  
            }
            .info_sito{
                font-size: 7px;
                color:white;
                float: left;
                margin-left:10px;
            }
        /* FINE FOOTER*/
        </style>

    </head>

    <!-- INIZIO PAGINA PER LIBRI -->
    <body><!-- inizio BODY -->
    <!-- suddivisioni -->
    <div class="main_menu"> 
        <div class="rettangolo">
        <h1 class="titolo"><a href="index.php">LIBRERIA ONLINE </a></h1>
            <ul class="main_menu_opzioni">
                <a href="libreria_contatti.php" >CONTATTI</a>
                <a href="libreria_news.php" class="op_selezionata">NEWS</a></li>
                <a href="libreria_chisiamo.php">CHI SIAMO</a>
                <a href="libreria_login.php">LOGIN</a>
            </ul>
        </div>
        <div class="clear"></div><!--coi FLOAT-->
    </div>
    <!--HEADER -->
    <div class="header">
    <h2 class="titolo_news">NEWS</h2>
        <div class="line"></div>
    </div>
    <!-- FINE HEADER -->

    <!--CONTENT -->
    <div class="content">
        <div class="news">
            <div class="box_news"><!--creo dei box con inserite le news -->
            <!--UGUALE ALLA SEZIONE CONTATTI-->
                <h5 class="titolo_box_news">Nuova biblioteca in metropolitana</h5>
                <div class="line_2"></div>
                <img src="foto/biblioteca_metro.jpg" class="foto_box_news">
                <p class="testo">Questa particolare biblioteca, 
                    posta nel mezzanino della fermata Porta Venezia della metropolitana di Milano, 
                    propone oltre 400 libri, audiolibri, fumetti e dvd, che si possono prendere 
                    gratuitamente in prestito e restituire in totale autonomia… </p>
            </div>

            <div class="box_news">
                <h5 class="titolo_box_news">Le biblioteche ucraine diventano rifugi</h5>
                <div class="line_2"></div>
                <img src="foto/profughi.jpg" class="foto_box_news">
                <p class="testo">Non solo libri. Nelle drammatiche settimane dell’invasione russa,
                    in Ucraina molte biblioteche si sono trasformate,
                    svolgendo un ruolo di sostegno e offrendo a chi ne avesse bisogno un rifugio antiaereo....</p>
            </div>
            <div class="box_news">
                <h5 class="titolo_box_news">Negli Usa sempre più genitori vorrebbero bandire alcuni libri nelle scuole</h5>
                <div class="line_2"></div>
                <img src="foto/elementari.jpg" class="foto_box_news">
                <p class="testo">Diversi gruppi di genitori americani in questi mesi stanno sporgendo denuncia e cercando 
                    di eliminare alcuni testi dai programmi scolastici dei loro figli: un fenomeno in allarmante aumento..</p>
            </div>
            <div class="box_news">
                <h5 class="titolo_box_news">Anche quest’anno alle biblioteche 30 milioni per gli acquisti nelle librerie</h5>
                <div class="line_2"></div>
                <img src="foto/finanziamento.jpg" class="foto_box_news">
                <p class="testo"> Il ministro della Cultura Dario Franceschini ha 
                    annunciato un rifinanziamento da 30 milioni per il 2021. 
                    Grazie a questa misura, che prevede dei fondi speciali alle biblioteche per 
                    gli acquisti nelle librerie, oltre allo stanziamento di 220 milioni per la 18App...</p>
            </div>
        </div>
        <div class="news_2"><!--Altro BOX news nella riga sotto -->
            <div class="box_news">
                <h5 class="titolo_box_news">Titolo news</h5>
                <div class="line_2"></div>
                <img src="foto/sfondo.jpg" class="foto_box_news">
                <p class="testo">Testata della news....</p>
            </div>
            <div class="box_news">
                <h5 class="titolo_box_news">Titolo news</h5>
                <div class="line_2"></div>
                <img src="foto/sfondo.jpg" class="foto_box_news">
                <p class="testo">Testata della news....</p>
            </div>
            <div class="box_news">
                <h5 class="titolo_box_news">Titolo news</h5>
                <div class="line_2"></div>
                <img src="foto/sfondo.jpg" class="foto_box_news">
                <p class="testo">Testata della news....</p>
            </div>
            <div class="box_news">
                <h5 class="titolo_box_news">Titolo news</h5>
                <div class="line_2"></div>
                <img src="foto/sfondo.jpg" class="foto_box_news">
                <p class="testo">Testata della news....</p>
            </div>
        </div>
    </div>
    <!--FINE CONTENT-->

    <!--FOOTER -->
    <div class="footer">
        <div class="rettangolo_4"><!--Altro rettangolo per il FOOTER -->
            <h4>LIBRERIA ONLINE</h4>
            <div class="line"></div>
            <!--LISTA "UL"-->
            <!--Altre opzione nel FOOTER -->
            <!--<div class="main_menu_opzioni_2">-->
                <a class="main_menu_opzioni_2" href="libreria_contatti.php">CONTATTI</a> <br>
                <a class="main_menu_opzioni_2" href="libreria_news.php">NEWS</a><br>
                <a class="main_menu_opzioni_2" href="libreria_chisiamo.php">CHI SIAMO</a><br>
            <!--</div>-->
            
        <div class="box_social">
            <!--Icone dei SOCIAL -->
           <img src="foto/instagram.png" class="icone_social">
            <img src="foto/facebook.png" class="icone_social">
            <img src="foto/twitter.png" class="icone_social">
        </div>
        <div class="info_sito">
            <p>Libreria online SPA</p>
            <p>Via Mauro 10, 36080 Vicenza</p>
            <p>P.IVA 1000212232111</p>
        </div>
        </div>
    </div>
    <!--CHIUSURA FOOTER -->
    <?php
    include("php/libreria.php");
    ?>
       
           
    </body>
</html>
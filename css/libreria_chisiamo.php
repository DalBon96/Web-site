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
        /* HEADER*/
        .titolo_chisiamo{
            color: white;
            margin-left: 10px;
            margin-bottom: 4px;
        }
        .line{ /* Linea bianca*/
            border: 2px solid white;
            margin-left: 10px;
        }
        /* FINE HEADER */

        /* CONTENT*/
        .testo_presentazione{
            color: white;
            margin-left: 10px;
        }
        strong{
            color: gray;
        }
            /*gruppo social*/
            .box_social{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .icone_social{
                width:35px;
                margin: 10px;  
            }
            /*gruppo risultati*/
            .info_grafica{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .cerchio{ /*CERCHI che incorniciano le ICONE*/
                margin:15px 50px 10px 50px;
                position: relative;
                background-color: rgb(123, 0, 0);
                width:140px;
                height:140px;
                border-radius:100%;
            }
            .icone_num{
                position: absolute;
                width:100px;
                margin: 20px;
            }
            .testo_sotto{
                margin-left:70px;
            }
            h3{
                color:white;
                margin:0px 0px 0px 20px;
            }
            .testo_sotto2{
                color: gray;
                margin:0px;
            }
            /*gruppo fondatori*/
            .info_persone{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .icone_fond{
                position: absolute;
                width:110px;
                margin:13px 0px 0px 15px;
            }
            .testo_sotto3{
                margin-left:35px;
            }
            .testo_sotto4{
                color: gray;
                margin:0px;
            }
        /*FINE CONTENT*/

        /* FOOTER*/
        .rettangolo_2{
            background-color:rgb(123, 0, 0);
            width:100%;
            height:100px;
            position: absolute;
            bottom: 0;
            color:white;
        }
        .titolo_2{
            margin-left: 10px;      
        }
        .main_menu_opzioni2{
            list-style: none;
            float:left;
            margin:0px;
        }
        /*FINE FOOTER*/
        </style>

    </head>

    <!-- INIZIO PAGINA PER LIBRI -->
    <body><!-- inizio BODY -->
    <!-- suddivisioni -->
    <div class="main_menu">    
        <div class="rettangolo">
        <h1 class="titolo"><a href="index.php">LIBRERIA ONLINE </a></h1>
            <ul class="main_menu_opzioni2">
                <a href="libreria_contatti.php">CONTATTI</a>
                <a href="libreria_news.php">NEWS</a></li>
                <a href="libreria_chisiamo.php" class="op_selezionata">CHI SIAMO</a>
                <a href="libreria_login.php">LOGIN</a>
            </ul>
        </div>
        <div class="clear"></div><!--coi FLOAT-->
    </div>
    <div class="header">
        <h2 class="titolo_chisiamo">CHI SIAMO</h2>
        <div class="line"></div>
    </div>
    <div class="content">
        <p class="testo_presentazione">
            Dal 2022 il sito <strong>Libreria Online</strong>  ?? un punto di riferimento per i lettori e il mondo del libro. 
            Ogni giorno ospita notizie, interviste, storie, approfondimenti, interventi d???autore. 
            Spazio anche per classifiche, liste di libri e quiz letterari. <br> <br>

            Molto forte ?? la community sui social, tra i canali <strong>Facebook</strong>, <strong>Twitter</strong> e <strong>Instagram</strong>. <br> 
        </p>

        <div class="box_social"><!--Icone dei SOCIAL -->
                <img src="foto/instagram.png" class="icone_social">
                <img src="foto/facebook.png" class="icone_social">
                <img src="foto/twitter.png" class="icone_social">
        </div>
        <!--Sezione dei risultati della pagina -->
        <h2 class="titolo_chisiamo">RISULTATI</h2>
        <div class="line"></div>
        <div class="info_grafica"><!--Icone dei contenuti -->
            <div class="contenuto">
                <div class="cerchio">
                    <img class="icone_num" src="foto/libro.png">
                </div>
                <div class="testo_sotto">
                    <h3>10.000</h3>
                    <p class="testo_sotto2">Libri venduti</p>
                </div>
            </div>
            <div class="contenuto">
                <div class="cerchio">
                    <img class="icone_num" src="foto/persone.png">
                </div>
                <div class="testo_sotto">
                    <h3>14.000</h3>
                    <p class="testo_sotto2">di Utenti iscritti</p>
                </div>
            </div>
            <div class="contenuto">
                <div class="cerchio">
                    <img class="icone_num" src="foto/articoli.png" >
                </div>
                <div class="testo_sotto">
                    <h3>1.000</h3>
                    <p class="testo_sotto2">Articoli scritti</p>
                </div>
            </div>
        </div>

        <!--FONDATORI progetto-->
        <h2 class="titolo_chisiamo">FONDATORI</h2>
        <div class="line"></div>
        <div class="info_persone">
            <div class="contenuto">
                <div class="cerchio">
                    <img class="icone_fond" src="foto/fondatore1.png">
                </div>
                <div class="testo_sotto3">
                    <h3>Marco Dal Bon</h3>
                    <p class="testo_sotto4">Responsabile editoriale</p>
                </div>
            </div>
            <div class="contenuto">
                <div class="cerchio">
                    <img class="icone_fond" src="foto/fondatore2.png">
                </div>
                <div class="testo_sotto3">
                    <h3>Emanuele Errico</h3>
                    <p class="testo_sotto4">Redazione del sito e newsletter</p>
                </div>
            </div>
        </div>

    </div>
    <div class="footer">
        <div class="rettangolo_2"><!--Per contenere tutte le informazioni finali-->
            <div class="titolo_2"><h4>LIBRERIA ONLINE</h4></div> 
                <ul class="main_menu_opzioni2">
                     <li><a href="libreria_contatti.php">CONTATTI</a></li>
                     <li><a href="libreria_news.php">NEWS</a></li>
                     <li><a href="libreria_chisiamo.php">CHI SIAMO</a></li>
                </ul>
        </div>
    <?php
    include("php/libreria.php");
    ?>
       
           
    </body>
</html>
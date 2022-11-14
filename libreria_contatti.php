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
        .op_selezionata{
            text-decoration: underline;
        }
        .clear{
            clear:both;
        }
        /*FINE MAIN MENU*/

        /*HEADER*/
        .titolo_contatti{
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
        .info{
            display: flex;
            align-items: flex-start;
            justify-content: center;
            margin-top: 20px;
        }
        .contatti{ /* 1) Rettangolo dove inquadro i vari contatti*/
            background-color: rgb(123, 0, 0);
            width:200px;
            height:200px;
            margin-left: 10px;
            border-radius:4%;
        }
        .contatti_2{/* 2) Rettangolo*/
            background-color: rgb(123, 0, 0);
            width:200px;
            height:200px;
            margin-left: 10px;
            border-radius:4%;
        }
        .contatti_3{ /*3) Rettangolo*/
            background-color: rgb(123, 0, 0);
            width:200px;
            height:200px;
            margin-left: 10px;
            border-radius:4%;
        }
        /*contenuto all'interno dei RIQUADRI ROSSI*/
        .titolo_contatti{
            color:white;
        }
        .line_2{
            border: 1px solid white;
            margin-left: 11px;
        }
        .testo{
            color: white;
            font-size: 12px;
            margin-left: 11px;
        }
        .mappa{/*Sposto la mappa in basso*/
            text-align: center;
            margin: 10px 0px 0px 10px;
        }
        .clear{
            clear:both;
        }
        /*FINE CONTENT*/

        /* FOOTER*/
        .rettangolo_4{
                position: absolute;
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
            <a href="libreria_contatti.php" class="op_selezionata">CONTATTI</a>
            <a href="libreria_news.php">NEWS</a></li>
            <a href="libreria_chisiamo.php">CHI SIAMO</a>
            <a href="libreria_login.php">LOGIN</a>
        </ul>
        </div>
        <div class="clear"></div><!--coi FLOAT-->
        </div>
        

    <div class="header">
        <h2 class="titolo_contatti">CONTATTI</h2>
        <div class="line"></div>
    </div>

    <div class="content">
        <div class="info"><!--centro tutto quanto-->
            <div class="contatti">
                <h3 class="titolo_contatti">VICENZA</h3>
                <div class="line_2"></div>
                <p class="testo"> Via Loschi 2, 36100 Vicenza VI</p>
                <p class="testo">Tel: 0444 324193</p>
                <p class="testo"> libreriaonlinevi@gmail.com</p>
            </div>
            <div class="contatti_2">
                <h3 class="titolo_contatti">MANTOVA</h3>
                <div class="line_2"></div>
                <p class="testo"> Via Giuseppe Verdi, 50, 46100 Mantova MN</p>
                <p class="testo">Tel: 0376 288751</p>
                <p class="testo"> libreriaonlinema@gmail.com</p>
            </div>
            <div class="contatti_3">
                <h3 class="titolo_contatti">MILANO</h3>
                <div class="line_2"></div>
                <p class="testo"> Via Ugo Foscolo, 1/3, 20121 Milano MI</p>
                <p class="testo">Tel: 02 9194 7777</p>
                <p class="testo"> libreriaonlinemi@gmail.com</p>
            </div>
        </div>
        <!--Mappa creata con Google my maps -->
        <div class="mappa">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1RJoRGGFipVKk_FxUeg1c3bRV0TaFzZA&ehbc=2E312F" 
                    width="640" 
                    height="480">
                </iframe>
            </div>
            <div class="clear"></div><!--coi FLOAT-->
    </div>
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
    <?php
    include("php/libreria.php");
    ?>
       
           
    </body>
</html>
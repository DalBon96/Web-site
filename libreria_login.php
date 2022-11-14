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
        .box_login{
            margin-top: 100px;
        }
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
            
        /*Mappa tasti*/
        .mappa_tasti{
            margin:15px 10px 10px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        input{
            width:110px;
            height:50px;
            color:white;
            font-size:15px;
            background-color:rgb(123, 0, 0);
            border: none;
            border-radius:10%;
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
            <a href="libreria_contatti.php">CONTATTI</a>
            <a href="libreria_news.php">NEWS</a></li>
            <a href="libreria_chisiamo.php">CHI SIAMO</a>
            <a href="libreria_login.php" class="op_selezionata">LOGIN</a>
        </ul>
        </div>
        <div class="clear"></div><!--coi FLOAT-->
    </div>

    <!--HEADER-->
    <div class="header">
    <h2 class="titolo_news">LOGIN</h2>
        <div class="line"></div>
    </div>
    <!--FINE HEADER-->

    <!--CONTENT -->
    <div class="content">
    <div class="box_login"><!--BOX del LOGIN Pper centrarlo nella pagina -->
        <div class="info_grafica"><!--Icone dell'ACCOUNT -->
            <div class="contenuto">
                <div class="cerchio">
                    <img class="icone_num" src="foto/account.png">
                </div>
            </div>
        </div>
            <!--creo 2 tasti in modo da collegarmi ad altre 2 pagine-->
            <!--pagina ACCESSO -->
            <!--pagina REGISTRAZIONE-->

            <!--DIV con i tasti per accedere ad ACCESSO o REGISTRAZIONE-->
            <div class="mappa_tasti">
                <a href="login/login_accedi.php"><input type="submit" value="ACCEDI"></a>
                <a href="login/login_registrati.php"><input type="submit" value="REGISTRATI"></a>
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
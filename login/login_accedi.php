<!DOCTYPE html>    
<html>
    <head>
        <title><?php echo "Libreria online"?></title>
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
        .centro{
            display: flex;
            align-items: flex-start;
            justify-content: center;
            margin-top: 50px;
        }
        .rettangolo_accedi{ /* Rettangolo dove inquadro Il Login*/
            background-color: rgb(123, 0, 0);
            width:300px;
            height:300px;
            margin-left: 10px;
            border-radius:4%;
        }
        form{
            text-align: center;
            margin-top: 40px;
            height: 40%;
            color: white;
        }
        input{
            background-color: grey;
            border: none;
        }
        input,label{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .tasto_accedi{
            width:70px;
            height:30px;
            margin-top: 7px;
            font-size:15px;
            border: none;
            border-radius:10%;
            color: white;
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

    <body>
    <!-- MAIN MENU -->
    <div class="main_menu">
        <div class="rettangolo">
        <h1 class="titolo"><a href="../index.php">LIBRERIA ONLINE </a></h1>
        <ul class="main_menu_opzioni">
            <a href="../libreria_contatti.php">CONTATTI</a>
            <a href="../libreria_news.php">NEWS</a>
            <a href="../libreria_chisiamo.php">CHI SIAMO</a>
            <a href="../libreria_login.php">LOGIN</a>
        </ul>
        </div>
        <div class="clear"></div><!--coi FLOAT-->
    </div>
    <!-- CHIUSURA MAIN MENU -->
 
    <!--HEADER-->
    <div class="header">
    <h2 class="titolo_news">ACCEDI</h2>
        <div class="line"></div>
    </div>
    <!--FINE HEADER-->

    <!--CONTENT-->
    <div class="content"><!--Metto un riquadro con l'email e password-->
        <div class="centro">
            <div class="rettangolo_accedi">
                <h4>Sei già registrato?</h4>
                <h4>Accedi qui</h4>
                <form action="#" method="post" class="dati_accesso">
                    <label for="email">E-Mail</label> <br>
                    <input type="email"> <br>
                    <label for="pass">Password</label> <br>
                    <input type="text"> <br>
                    <input type="submit" name="tasto" value="Entra" class="tasto_accedi">
                </form>
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
                <a class="main_menu_opzioni_2" href="../libreria_contatti.php">CONTATTI</a> <br>
                <a class="main_menu_opzioni_2" href="../libreria_news.php">NEWS</a><br>
                <a class="main_menu_opzioni_2" href="../libreria_chisiamo.php">CHI SIAMO</a><br>
            <!--</div>-->
            
        <div class="box_social">
            <!--Icone dei SOCIAL -->
           <img src="../foto/instagram.png" class="icone_social">
            <img src="../foto/facebook.png" class="icone_social">
            <img src="../foto/twitter.png" class="icone_social">
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
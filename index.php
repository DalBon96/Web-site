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
        .clear{
            clear:both;
        }
        /*FINE MAIN MENU*/

        /*HEADER*/
        .img_libri{ /* Immagine centrata*/
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%; 
        }
        .cit{  
            margin:0px;
            padding:0px; /*cornice*/
            position: relative;
        }
        .citazione{
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            text-shadow:  3px 3px 3px white;
        }
        .citazione2{
            font-family: 'Roboto', sans-serif;
            
        }
        .rettangolo_2{
            top:10px;
            width:65%;
            background-image: linear-gradient(to right,white,rgba(255,255,255,0.2), transparent);
            position: absolute;
        }
        .clear{
            clear:both;
        }
        /*FINE HEADER*/

        /*CONTENT*/
        .rettangolo_3{/*rettangolo per incorniciare "BESTSELLER"*/
            background-color:  rgb(123, 0, 0);
            width:100%;
            height:40px;
            margin-bottom: 10px;
        }
        .titolo_content{/*Titolo "BESTSELLER"*/
            font-family: 'Open Sans', sans-serif;
            font-size: 25px;
            text-align: center;
            color:white;
        }
        .lista_libri{/*ALLINEARE I LIBRI IN ORIZZONTALE*/
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }
            /*BLOCCO LIBRO*/
        .box{
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px;
        }
        .libro{
            width:  120px;
            height: 120px;
            object-fit: contain;
            float:left;
            margin:2px 25px 2px 25px;
        }
        .nome{
            font-weight: bold;
            color: white;
            margin: 0px;
            text-decoration: underline;
        }
        .autore{
            color: white;
            font-size: 15px;
            margin:2px 1px 1px 1px;   
        }
        /*FINE BLOCCO LIBRO*/

            /*MAPPA TASTI */
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

    <!-- MAIN MENU -->
    <div class="main_menu">
        <div class="rettangolo">
        <h1 class="titolo"><a href="index.php">LIBRERIA ONLINE </a></h1>
        <ul class="main_menu_opzioni">
            <a href="libreria_contatti.php">CONTATTI</a>
            <a href="libreria_news.php">NEWS</a>
            <a href="libreria_chisiamo.php">CHI SIAMO</a>
            <a href="libreria_login.php">LOGIN</a>
        </ul>
        </div>
        <div class="clear"></div><!--coi FLOAT-->
    </div>
    <!-- CHIUSURA MAIN MENU -->

    <!-- HEADER -->
    <div class="header">
        <div class="cit"><!-- Foto + citazione poetica -->
        <img src="foto/foto_libri.jpeg" class="img_libri">
            <div class="rettangolo_2"><!-- Rettangolo trasparente -->
            <!-- citazioni -->
                <cite class="citazione">“I libri sono gli amici più tranquilli e costanti, e gli insegnanti più pazienti”</cite>
                <p class="citazione2">Charles W. Eliot</p>
            </div>
        </div>
    <p></p>        

    </div>
    <!-- CHIUSURA HEADER -->

    <!-- CONTENT -->
    <div class="content">
        <div class="rettangolo_3"><!-- rettangolo rosso -->
            <div class="titolo_content">BESTSELLER</div>
        </div>
        <div class="lista_libri"><!-- Lista dei classici -->
            <!--LIBRI-->
            <div class="box">
                <img src="foto/1984.jpg"class="libro">
                <div class="nome"><p class="autore">George Orwell</p></div>
                <p class="autore" >1984</p>
            </div> 
            <div class="box">
                <img src="foto/centomila.jpg"class="libro">
                <div class="nome"><p class="autore">Luigi Pirandello</p></div>
                <p class="autore">Uno nessuno è centomila</p>
            </div>
            <div class="box">
                <img src="foto/delitto_castigo.jpg"class="libro">
                <div class="nome"><p class="autore">Fedor Dostoevskij</p></div>
                <p class="autore">Delitto e Castigo</p>
            </div>
            <div class="box">
                <img src="foto/gabtsy.jpg"class="libro">
                <div class="nome"><p class="autore">Francis Scott</p></div>
                <p class="autore">Il grande Gatsby</p>
            </div>
            <div class="box">
                <img src="foto/idiota.jpeg"class="libro">
                <div class="nome"><p class="autore">Fedor Dostoevskij</p></div>
                <p class="autore">L' idiota</p>
            </div>
            <div class="box">
                <img src="foto/moby_dick.jpg"class="libro">
                <div class="nome"><p class="autore">Herman Melville</p></div>
                <p class="autore">Moby Dick</p>
                
            </div>
            <div class="box">
                <img src="foto/mosche.jpg"class="libro">
                <div class="nome"><p class="autore">William Golding</p></div>
                <p class="autore">Il signore delle Mosche</p>
            </div>
            <div class="box">
                <img src="foto/il_conte.jpg"class="libro">
                <div class="nome"><p class="autore">Alexandre Dumas</p></div>
                <p class="autore">Il Conte di Montecristo</p>
            </div>
        </div>

        <div class="mappa_tasti"><!-- Tasti per selezionare i contenuti -->
                <a href="#"><input type="submit" value="Classici"></a>
                <a href="#"><input type="submit" value="Per Ragazzi"></a>
                <a href="#"><input type="submit" value="Podcast"></a>
                <a href="#"><input type="submit" value="News"></a>
                <a href="#"><input type="submit" value="Film"></a>
                <a href="#"><input type="submit" value="Eventi"></a>
        </div>
    </div>
    <!-- CHIUSURA CONTENT -->

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
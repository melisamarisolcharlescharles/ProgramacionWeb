<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="register.css">
        <link rel="stylesheet" href="estilosGlobal.css">
        <title>Roux Academy</title>
    </head>

<body class="body">
    <main class="cuerpo">
        <!-- Cabecera -->
        <header>
            <article class = "textoArial">
                <section class="celdaPrimeroTextoPrincipal" >
                    <section class = "imagenCabecera">
                    <img class="imagenLogo" src="images/ralogo_monogram.png" width="120%" height="60%" > <!-- Imagen -->
                    </section>
                    <navegation class="textHeaderUno"> <!-- Primer texto -->
                       <br> </br>
                       <p>Roux Academy</p>                  
                       <p>Art + Media + Desing</p>
                    </navegation>
                    <navegation class="textHeaderDos">
                        <div> <!-- Segundo texto -->
                            <h1 class = "tituloxd">Roux Academy 2016 Art Conference</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Nemo facere quia magnam autem vitae et aliquam, facilis dicta necessitatibus est dolore, 
                                cum molestiae eligendi eos optio quasi alias eum dolorum.</p>
                        </div>
                    </navegation>
                </section>
            </article>
           
        <!-- Menú -->    
        <article class="contenedorMenu">
            <section class="segundaPrteMedio">
                <ul class = "textoArial">
                    <li><a href="index.index">HOME</a></li>
                    <li><a href="artists.index">ARTISTS</a></li>
                    <li><a href="schedule.index">SCHEDULE</a></li>
                    <li><a href="venue.index">VENUE/TRAVEL</a></li>
                    <li><a href="register.index">REGISTER</a></li>
                </ul>
            </section>
        </article>
        <!-- /Menú --> 
        
        <article class = "imagenM">
            <img src="images/art01.jpg" width="100%">
        </article>
        
    </header>
    <!-- /Cabecera -->

    <!-- Parte Izquierda -->
    <main class="Global">
    <article class="parteIzquierda" >
        <!-- Register-->
        <section class = "textoArial">  
            <h1 class = "tituloxd">Register</h1>
            <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the 
                information below.
            </p>
        </section>
        <!-- /Register-->

        <!-- Personal Info-->
        <section class = "textoArial">
            <p class = "tituloxd">Personal Info</p>
        </section>
        <!-- /Personal Info-->

        <!-- Register Name-Company-Email -->
        <article class="unionDeBloques" >

            <section class="bloqueDeTitulos">
                    <label class = "textoArial">Name *</label>
                    <br><br>
                    <label class = "textoArial">Company Name</label>
                    <br><br>
                    <label class = "textoArial">Email</label>
            </section>
        <!-- /Register Name-Company-Email -->

        <!-- Caja de texto -->
            <section class="etiquetasRegistro">
                <input type="text" name="namePrimero" id="namePrimero" >
                <br><br>
                <input type="text" name="namePrimero" id="namePrimero">
                <br><br>
                <input type="email" name="email" id="email">
            </section>
        </article>
        <!-- /Caja de texto -->

        <!-- Radio Buttons -->
        <section class="radioButtons" >
            <p class = "textoArial" class = "tituloxd">Request Type</p>
            <input type="radio" name="pregunta" id="pregunta" ><label class = "textoArial" class="labelQuestion" >Question</label>
            <br><br>
            <input type="radio" name="pregunta" id="pregunta"><label class = "textoArial" class="labelComentario" >Comment</label>
        </section>
        <!-- /Radio Buttons -->

        <!-- Comentario -->
        <section class="seccionComentario">
            <div class="etiquetaComentario">
                <br>
                <label class = "textoArial">Comment</label>
            </div>
            <div class="areaComentario">
                <textarea name="cometarios" id="cometarios" cols="20" rows="3"></textarea>
            </div>
        </section>
        <!-- /Comentario -->

        <!--CheckBox -->
        <section>
            <input type="checkbox" name="tablet" id="tablet" value="1">
            <label for="tablet" class = "textoArial">Subscrite to our mailing list?</label><br>
            <label for="desplegable" class = "textoArial">How did you hear about us?</label>
        </section>
        <!-- /CheckBox -->

        <!-- Desplegable -->
        <section class="cajita">
            <select name="desplegable" id="desplegable" required>
                <option value="1">Choose</option>
            </select>
        </section>
        <!-- /Desplegable -->

        <!-- Botón -->
        <section class="cajita">
            <input type="button" value="Send">
        </section>
        <!-- /Botón -->

    </article>
    <!-- /Parte Izquierda -->

    
    <article class="parteDerecha">

        <!-- Featured Artist -->
        <section class = "textoArial">
            <h1 class = "tituloxd">Featured Artist</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Alias iusto sit quas. Doloribus beatae voluptas, 
                necessitatibus repellat ipsa perspiciatis possimus, 
                autem totam quos laudantium velit similique maiores voluptate.</p>
            </section>
        <!-- /Featured Artist -->

        <!-- Imagenes derecha -->
        <section class="imagenesDerechaArtist">
            <img class="imagenBorde" src="images/artists/Barot_Bellingham_tn.jpg" width="25%" >
            <img class="imagenBorde" src="images/artists/Constance_Smith_tn.jpg" width="25%" >
            <img class="imagenBorde" src="images/artists/Hassum_Harrod_tn.jpg" width="25%" >
            <br>
            <img class="imagenBorde" src="images/artists/Hillary_Goldwynn_tn.jpg" width="25%" >
            <img class="imagenBorde" src="images/artists/Jennifer_Jerome_tn.jpg" width="25%" >
            <img class="imagenBorde" src="images/artists/Jonathan_Ferrar_tn.jpg" width="25%" >
            <br>
            <img class="imagenBorde" src="images/artists/LaVonne_LaRue_tn.jpg" width="25%" >
            <img class="imagenBorde" src="images/artists/Riley_Rewington_tn.jpg" width="25%" >
            <img class="imagenBorde" src="images/artists/Xhou_Ta_tn.jpg" width="25%">
        </section>
         <!-- /Imagenes derecha -->
    </article>
</main>
</main>
</body>
<footer>
    <article class="ultimaParte">
            
            <section class="texto">

                <img class="logo" src="images/ralogo_monogram.png" width="10%" height="10%" >
                
                <section class="textFoot">
                    <div class="textoArial">
                    <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Maiores ratione delectus deserunt quaerat iste consequatur, 
                        culpa consectetur nulla placeat architecto corporis optio dicta 
                        rem adipisci fuga, totam veniam porro quasi.</p>
                        </div>
                    </section>

                <section class="textFootDos">
                    <div class="celdaSegundoTextoPrincipal"> 
                        <p class = "textoArial">About the Roux Academy | Privacy Poly | Visit our website</p>
                    </div>
                </section>
            </section>
    </article>
</footer>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedorCabecera">
        <header>
            <h1 class="nombreAutor">
            <img class="imagenAutor" src="img/foto.jpg" alt="imagen de melisa">Melisa Marisol Charles Charles
            <p class="descripcionAutor">
                Mi nombre es Melisa Marisol Charles Charles, tengo 20 años y soy estudiante de la Universidad Politécnica de Victoria(UPV), en la carrera de Ingeniería en Tecnologías de la información.
                <br>
                <br>
                Correo: 1830401@upv.edu.mx
                <br>
                <br>
                Teléfono: 834-251-26-04
            </p>
            </h1>
            <div class="tituloMenu">
                <h1>Menú de secciones</h1>
                <section class="contenedorMenu">
                    <div class="segundaPrteMedio">
                        <ul class="diseñoLista">
                            <li><a href="#seccion1">Sección 1: Arquitectura cliente-servidor</a></li>
                            &nbsp;&nbsp;&nbsp;
                            <li><a href="#seccion2">Sección 2: Front-End</a></li>
                            &nbsp;&nbsp;&nbsp;
                            <li><a href="#seccion3">Sección 3: Back-End</a></li>
                            &nbsp;&nbsp;&nbsp;
                        </ul>
                    </div>
                </section>
            </div>
        </header>
    </div>

    <article class="contenidoBlog">
        <h1 id="seccion1" class="titulos">Arquitectura cliente-servidor</h1>
        <h2 class="subtitulos">¿Qué es la arquitectura Cliente-Servidor?</h2>
        <p class="descripcion">Cliente-Servidor es uno de los estilos arquitectónicos distribuidos más conocidos, el cual está compuesto por dos componentes, el proveedor y el consumidor. El proveedor es un servidor que brinda una serie de servicios o recursos los cuales son consumido por el Cliente.</p>
        <br>
        <img class="imagenBorde" src="img/Cliente-Servidor.png" alt="imagen cliente servidor" width="40%">

        <h1 id="seccion2" class="titulos">Front-End</h1>
        <h2 class="subtitulos">¿Que es el Front-End?</h2>
        <p class="descripcion">El frontend es la parte del desarrollo web que se dedica a la parte frontal de un sitio web, en pocas palabras del diseño de un sitio web, desde la estructura del sitio hasta los estilos como colores, fondos, tamaños hasta llegar a las animaciones y efectos.</p>
        <br>

        

        <h2 class="subtitulos">¿Cuales son los roles dentro del Front-End?</h2>
        <div class="descripcion">
            <li> UI Developer / Diseñador UI </li>
            <li>Web Designer / Maquetador</li>
            <li>Programador Front-end</li>
        </div>

        <img src="img/front-end.jpg" alt="imagen de front-end" class="imagenBorde" width="40%">
        <br>

        <h2 class="subtitulos">¿Cual es la función de cada uno de los roles del Front End</h2>
        <p class="descripcion">
            UI Developer / Diseñador UI
            <br><br><br>
            El UI Developer usualmente diseña siguiendo un esquema propuesto anteriormente en conjunción con el equipo de desarrollo, pues toda esta etapa hay que definirla y documentarla antes de empezar a crear las pantallas del sitio web.
            <br><br><br>
            Web Designer / Maquetador
            <br><br><br>
            El trabajo del Web Designer es llevar las pantallas diseñadas por el UI Developer a código HTML y CSS, el cual se ejecuta al cargar la página web. 
            <br><br><br>
            Programador Front-end
            <br><br><br>
            Los Front-end Developers se encargan de agregar la lógica al sitio web, ¿a qué nos referimos con esto? A que ellos o ellas implementan las API provenientes del Back-end o de algún otro servidor externo, las imprime en pantalla y les agrega validaciones para que puedan funcionar. En pocas palabras, se encarga de darle vida al sitio web internamente, por lo tanto, no debería de preocuparse por el diseño de pantalla, el tamaño o color de los botones de los sitios web, ya que de esto se encarga enteramente el UI Developer.
       
        </p>
        <br><br>
        <h2 class="subtitulos">¿Cuales son los principales lenguajes y frameworks usados en el Front- End?</h2>            
        <p class="descripcion"></p>
        <img class="imagenBorde" src="img/ejemplos.png" alt="principales lenguajes" width="40%">

        <h1 id="seccion3" class="titulos">Back-End</h1>
        <h2 class="subtitulos">¿Que es el backEnd?</h2>
        <p class="descripcion">Un desarrollador backend , se encarga de diseñar la lógica y las soluciones para que todas las acciones solicitadas en una página web sean ejecutadas de manera correcta. ... Por lo tanto, un desarrollador backend es responsable de la programación del sitio en todos sus componentes.</p>
        <br><br>

        <img class="imagenBorde" src="img/Backend-solution.png" alt="backend">
        <br><br><br>

        <h2 class="subtitulos">¿Cuales son los roles del BackEnd?</h2>
        <div class="descripcion">
            <li>Diseñador UI/UX</li>
            <li>Web Designer O Maquetador</li>
            <li>DBA(Database Administrator)</li>
            <li>Backend Developer o Programador Backend</li>
            <li>Frontend Developer o Programador Frontend</li>
            <li>Arquitecto Cloud</li>
            <li>QA (Quality Assurance o Control de Calidad)</li>
        </div>

        <h2 class="subtitulos">¿Cual es la función de cada rol?</h2>
        <p class="descripcion">
            Diseñador UI/UX
            <br><br><br>
            Esta disciplina se encarga de que el sitio sea usable y que la experiencia del usuario sea agradable. Una tarea importante en este rol es el flujo de usuario, que es la cantidad de pasos que debe seguir para realizar una tarea.
            <br><br><br>
            Web Designer O Maquetador
            <br><br><br>
            Se encarga de recoger los mockups que ha diseñado el UI y llevarlos a código html y css, tal vez tenga que usar javascript para algún un efecto que no pueda lograrse con css, por lo que es recomendable que el Web Designer sepa un poco de javascript. Esta persona se encarga de llevar el diseño a código pero no está orientado a la interacción o la lógica del lado del cliente.
            <br><br><br>
            DBA(Database Administrator)
            <br><br><br>
            Se encarga de Diseñar las bases datos, que son grandes almacenes de información.Un administrador de base de datos (DBA) es el técnico de información responsable de dirigir o realizar todas las actividades relacionadas con el mantenimiento de un entorno de base de datos exitoso . Un DBA se asegura de que la base de datos de una organización y sus aplicaciones relacionadas funcionen de manera funcional y eficiente.
            <br><br><br>
            Arquitecto Cloud
            <br><br><br>
            Analiza el proyecto para definir los requerimientos de hardware e infraestructura que se van a necesitar para que este pueda funcionar en producción.
            <br><br><br>
            QA (Quality Assurance o Control de Calidad)
            <br><br><br>
            Se encarga de hacer las pruebas necesarias durante el desarrollo del proyecto para asegurarse del control de calidad, documenta todos los procesos para que en el futuro las cosas mejoren y los errores que ocurrieron no se vuelvan a repetir.
        </p>
        
        <br><br>
        <img class="imagenBorde" src="img/roles-frontend.jpg" alt="roles front-end">
        <br><br>

        <h2 class="subtitulos">¿Cuales son los principales lenguajes de programación y frameworks del backend?</h2>
        <p class="descripcion">
           PHP <br>LUA+ OpenResty
           <br>Phyton <br>Asp.NET <br>Java +
           openGSE <br>Ruby + Rubyon Rails <br>javascript + NodeJS +ExpressJS
        </p>

        <h2 class="subtitulos">¿Que es un Stack?</h2>
        <p class="descripcion">Una Stack es un conjunto ordenado de elementos en el cual se
            pueden agregar y eliminar elementos de un extremo, el cual es
            llamado el tope de la pila. 
        </p>

        <h2 class="subtitulos">Ejemplos de Stack</h2>
        <p class="descripcion">Un ejemplo típico de stack lo constituye un montón de platos: Cuando se quiere introducir un nuevo plato, éste se coloca en la posición más accesible, encima del último plato. Cuando se coge un plato, éste se extrae, igualmente, del punto más accesible, el último que se ha introducido.</p>
        <br><br>
        <img class="imagenBorde" src="img/pila.png" alt="stack">

        <br>
        <div class="redes">
            <h2 class="subtitulos">Redes Sociales</h2>
            <a target="_blank" href="https://www.facebook.com/melisa.marisol.9/"> <img class="perfiles" src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Facebook_icon_2013.svg" alt="facebook" ></a>
            <a target="_blank" href="https://www.instagram.com/_becoolshop/?hl=es-la"> <img class="perfiles" src="https://upload.wikimedia.org/wikipedia/commons/5/58/Instagram-Icon.png" alt="instagram"></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCf5r038R4cCpeouO1Jv6mNg"> <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png" alt="youtube" width="7%"></a>
        <br><br><br>
        </div>
    </article>

</body>
</html>
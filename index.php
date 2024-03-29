<?php
//solicitar el archivo de conexion a la db
// include 'conexion_postgres.php';
//$conexion = pg_connect("host=localhost dbname=db_proyecto user=postgres password=27561321") or die('error al conectar la base de datos');


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="relly garcia">
        <meta name="description" content="prueba de que se programar">
        <meta name="keywords" content="informacion desde mi base">
        <title>PacheScrip prueba</title>

        <link rel="icon" href="img/paches.jpg">

        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
        
        <link href="css/css3.css" type="text/css" rel="stylesheet" media="">
    
    </head>

    <body>

        <div id="chat">pregunta libre</div>

    <!--inicia cabezote-->

        <header>
            <div id="logo">Logotipo</div>

            <a href="https://twitter.com"><div id="icono1" class="redes"><img src="img/pajaro.png" width="42px" height="42px"></div></a>
            <a href="https://facebook.com"><div id="icono2" class="redes"><img src="img/face.png" width="42px" height="42px"></div></a>
            <a href="https://outlook.live.com"><div id="icono3" class="redes"><img src="img/correo2.png" width="42px" height="42px"></div></a>

        </header>
    
    <!--cierra cabezote-->

    <!--inicia barra de navegacion-->

        <nav>
            <ul>

                <a href="https://correo.fundabit.gob.ve"><li class="botones">Boton 1</li></a>
                <a href="#"><li class="botones">Boton 2</li></a>
                <a href="#"><li class="botones">Boton 3</li></a>
                <a href="#"><li class="botones">Boton 4</li></a>
                <a href="#"><li class="botones">Boton 5</li></a>

            </ul>

        </nav>

    <!--cierra barra de navegacion-->

    <!--inicia parte superior-->

        <div id="top">
            <ul>

                <li>
                    <img src="img/goku-1.jpg" width="150">
                    <h1>pruebas ccs3</h1>
                    <p>estas son las prubas q se van a utilizar</p>
                </li>

                <li>
                    <img src="img/goku-2.jpg" width="150">
                    <h1>pruebas ccs3</h1>
                    <p>estas son las prubas q se van a utilizar</p>
                </li>

                <li>
                    <img src="img/goku-3.jpg" width="150">
                    <h1>pruebas ccs3</h1>
                    <p>estas son las prubas q se van a utilizar</p>
                </li>

            </ul>
        </div>

    <!--cierra parte superior-->

    <!--inicia seccion-->

        <section>
            <aside id="izq">

                <ul>
                    <li><a href="#"> link 1 </a></li>
                    <li><a href="#"> link 2 </a></li>
                    <li><a href="#"> link 3 </a></li>
                    <li><a href="#"> link 4 </a></li>
                </ul>
                
            </aside>

            <article>

                <img src="img/paches.jpg" width="300">
                <h1>pagina principal del grupo oficial</h1>
                <p>esta es la fase delta del proyecto PacheScrip, modo prueba CSS3</p>

            </article>
            <aside id="der">

                <h1>Iniciar sesion</h1>

                 <form>
                    
                    <div class="form-element">
                    <label>usuario</label>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required /></div>
                    <div class="form-element">
                    <label>password</label>
                    <input type="password" name="password" required /></div>
                    <button type="submit" name="login" value="login">iniciar sesion</button>

                </form>
            </aside>
        </section>

    <!--cierra seccion-->

    <!--inicia pie de pagina-->
        
        <footer>
            
            &copy; todos los derechos reservados. ca

        </footer>
    
    <!--cierra pie de pagina-->

    </body>
</html>
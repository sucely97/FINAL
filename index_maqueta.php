<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>FLORENTINAS Y FERMINES</title>
</head>

<body>
    <div id="container">
        <!--cabecera-->
        <header id="header">
            <div id="logo">
                <img src="assets/img/logo.png" alt="logo">
                <a href="index.php">FLORENTÍNES Y FERMINAS</a>
            </div>
        </header>
        <!--menu-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="">INICIO</a>
                </li>
                <li>
                    <a href="">ACERCA DE</a>
                </li>
                <li>
                    <a href="">PRODUCTOS</a>
                </li>
            </ul>

        </nav>
        <div id="content">

            <!--barra lateral-->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>REGISTRARSE</h3>
                    <form action="#" method="post">
                        <label for="email"> Email</label>
                        <input type="email" name="email" />
                        <label for="password">Contraseña</label>
                        <input type="password" name="passwprd" />
                        <input type="submit" value="Enviar">
                    </form>
                    <ul>
                        <li><a href="#"> MIS PEDIDOS</a></li>
                        <li><a href="#"> GESTIONAR PEDIDOS</a></li>
                        <li><a href="#"> AGREGAR PRODUCTOS</a></li>
                    </ul>
                </div>
            </aside>
            <!--contenido central-->
            <div id="central">
                <h1>Productos Destacados</h1>
                <div class="product">
                    <img src="assets/img/flor1.jpg">
                    <h2>ROSAS</h2>
                    <p> 40 euros</p>
                    <a href="" class="button"> Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/flor1.jpg">
                    <h2>Orquideas</h2>
                    <p> 30 euros</p>
                    <a href="" class="button"> Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/flor1.jpg">
                    <h2>Orquideas</h2>
                    <p> 30 euros</p>
                    <a href="" class="button"> Comprar</a>
                </div>
            </div>
        </div>
        <!--pie de pagina-->

        <footer id="footer">
            <p>Desarrollado por Corporation S.A. &copy;
                <?=date('Y')?>
            </p>
        </footer>
    </div>
</body>

</html>
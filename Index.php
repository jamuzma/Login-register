<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="C:\xampp\htdocs\Login-register\assets\CSS\estilos.css">
</head>
<body>
    
<main>
    <div class="contenedor__todo">

        <div class="caja__trasera">
            <div class="caja__trasera-login">      
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesion para entrar en la pagina</p>
                <button id="btn__iniciar-sesion">Iniciar Sesion</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aun no tienes cuenta?</h3>
                <p>Registrate para que puedas iniciar sesion</p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>
                <!--formlario de loggin y registro-->
            <div class="contenedor__login-register">
            <form action="" class="formulario__login">
                <h2>Iniciar Sesion</h2>
                <input type="text" placeholder="Correo Eletronico">
                <input type="password" placeholder="Contrasenia">
                <button>Entrar</button>
            </form>
                <!--formulario de registro-->
            <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Registrarse</button>
            </form>
        </div>
    </div>
</main>
<script src="C:\xampp\htdocs\Login-register\assets\JS\script.js"></script>
</body>
</html>
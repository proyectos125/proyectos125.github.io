<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacto - Manteca</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #004080;
      padding: 1rem;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
      padding: 0.5rem 1rem;
      border-radius: 5px;
    }

    nav a:hover, nav a.active {
      background-color: #0066cc;
    }

    .container {
      max-width: 600px;
      margin: 2rem auto;
      background-color: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #004080;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-top: 1rem;
      color: #333;
    }

    input, textarea {
      padding: 0.7rem;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-top: 0.5rem;
    }

    button {
      margin-top: 1.5rem;
      background-color: #004080;
      color: white;
      padding: 0.8rem;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
    }

    button:hover {
      background-color: #0066cc;
    }

    .mensaje-exito {
      background-color: #e0ffe0;
      color: #006600;
      border: 1px solid #00cc00;
      padding: 1rem;
      margin-top: 1rem;
      border-radius: 6px;
    }

    .mensaje-error {
      background-color: #ffe0e0;
      color: #990000;
      border: 1px solid #cc0000;
      padding: 1rem;
      margin-top: 1rem;
      border-radius: 6px;
    }
  </style>
</head>
<body>

  <nav>
    <a href="index.html">Inicio</a>
    <a href="servicios.html">Servicios</a>
    <a href="nosotros.html">Nosotros</a>
    <a href="contacto.php" class="active">Contacto</a>
  </nav>

  <div class="container">
    <h2>Contáctanos</h2>

   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = htmlspecialchars(trim($_POST["nombre"]));
      $correo = htmlspecialchars(trim($_POST["correo"]));
      $mensaje = htmlspecialchars(trim($_POST["mensaje"]));

      if (!empty($nombre) && !empty($correo) && !empty($mensaje)) {
        
        echo "<div class='mensaje-exito'>Gracias por contactarnos, <strong>$nombre</strong>. Te responderemos pronto.</div>";
      } else {
        echo "<div class='mensaje-error'>Por favor completa todos los campos.</div>";
      }
    }
    
    ?>

    <form method="POST" action="contacto.php">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" required>

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

      <button type="submit">Enviar mensaje</button>
    </form>
  </div>

</body>
</html>

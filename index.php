<!DOCTYPE html>
<html>
  <head>
    <title>Colegio de educación integral A-B-C</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
  <body>
    <header>
      <h1>Colegio de educación integral A-B-C</h1>
      <nav>
        <ul>
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="acerca.html">Acerca</a></li>
          <li><a href="programas.html">Pre-Inscripción</a></li>
          <li><a href="">Noticias</a></li>
          <li><a href="contacto.html">Contacto</a></li>
        </ul>
      </nav>
  
      <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

header {
  text-align: center;
  background-color: rgb(64, 0, 255);;
  color: #fff;
  padding: 1em;
}
h1 {
  font-size: 3em;
}
nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
}

nav ul li a {
  display: block;
  padding: 20px;
  color: #fff;
  background-color: #17a2b8;
  border-radius: 10px;
  margin-bottom: 10px;
  transition: background-color 0.3s ease;
  font-size: 20px;
}

nav ul li a:hover,
nav ul li a:focus {
  background-color: #dc3545;
  cursor: pointer;
  transform: translateY(-5px);
}

main {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: calc(100vh - 2em);
}

.container {
  width: 80%;
  background-color: #fff;
  padding: 2em;
  border-radius: 1em;
  box-shadow: 0 0 10px rgb(64, 0, 255);
}

h1, h2, h3 {
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 2em;
}

form label {
  margin-bottom: 0.5em;
}

form input[type="submit"] {
  background-color: rgb(64, 0, 255);;
  color: #fff;
  padding: 0.5em 1em;
  border: none;
  border-radius: 0.5em;
  font-size: 1em;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #fff;
  color:rgb(64, 0, 255);;
}

section {
  padding: 20px;
  max-height: 300px;
  overflow-y: auto;
}

section h2 {
  color: #000000;
}

footer {
  background-color: #0c0fc7;
  color: white;
  text-align: center;
  padding: 10px;
}

header h1 {
  font-family: 'Roboto', sans-serif;
}


#escudo {
  position: absolute;
  top: 0;
  left: 2%;
  width: 9%;
  height: auto;
}

#escudo2 {
  position: absolute;
  top: 0;
  right: 0;
  width: 8%;
  height: auto;
}

    </style>
    
<!-- <img id="escudo" src="data:image/png;base64,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" alt="escudo"> -->
    
</header>
<br>
<center>   
      <nav>
      <h2>USTED INICIA SESION COMO:</h2>
        <ul>
          <li><a href="ESTUDIANTE.php">ESTUDIANTE</a></li>
          <li><a href="DOCENTE.php">DOCENTE</a></li>
          <li><a href="ACUDIENTE.php">PADRE DE FAMILIA O ACUDIENTE</a></li>
          <li><a href="admin.php">ADMINISTRADOR</a></li>
        </ul>
      </nav>
</center>
<br>
<br>
    <footer>
      <p>Copyright © 2023 Colegio de educación integral A-B-C</p>
    </footer>
  </body>

</html>
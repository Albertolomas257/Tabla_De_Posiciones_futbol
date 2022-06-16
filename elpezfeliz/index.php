<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>LIGA DE FUTBOL_7 EL PEZ FELIZ</title>
</head>
  <nav class="navbar navbar-light bg-light">
  <img src="imagen2.jpg" alt="" width="80" height="80">  
   <div class="container-lg">
  <a class="navbar-brand" href="#">LIGA DE FUTBOL_7 EL PEZ FELIZ</a>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      </ul>
    </div>
  </div>
</nav> 

<h1>TABLA DE POSICIONES CATEGORIA LIBRE</h1>
<h1 class="mt-0">Esta Pagina: Fue Desarrollada Por Jesus Alberto Lomas Simon</h1>
<table class="table">
  <thead class="table table-success table-striped">
  <tr>
      <th scope="col">#ID</th>
      <th scope="col">#EQUIPOS</th>
      <th scope="col">#JORDA_1</th>
      <th scope="col">#JORDA_2</th>
      <th scope="col">#JORDA_3</th>
      <th scope="col">#JORDA_4</th>
      <th scope="col">#JORDA_5</th>
      <th scope="col">#JORDA_6</th>
      <th scope="col">#JORDA_7</th>
      <th scope="col">#JORDA_8</th>
      <th scope="col">#JORDA_9</th>
      <th scope="col">#JORDA_10</th>
      <th scope="col">#JORDA_11</th>
      <th scope="col">#JORDA_12</th>
      <th scope="col">#JORDA_13</th>
      <th scope="col">#JORDA_14</th>
      <th scope="col">#JORDA_15</th>
      <th scope="col">#JORDA_16</th>
      <th scope="col">#TOTAL</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
   
        include 'conn.php';
        $querySQL = "Select * From puntaje";
        $result = mysqli_query($conn, $querySQL);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class='table-success'><th>".$row["Id"].
                "</th><td class='table-success'>".$row["Equipos"].
                "</th><td class='table-success table-striped'>".$row["Jornada1"].
                "</th><td class='table-success table-striped'>".$row["Jornada2"].
                "</th><td class='table-success table-striped'>".$row["Jornada3"].
                "</th><td class='table-success table-striped'>".$row["Jornada4"].
                "</th><td class='table-success table-striped'>".$row["Jornada5"].
                "</th><td class='table-success table-striped'>".$row["Jornada6"].
                "</th><td class='table-success table-striped'>".$row["Jornada7"].
                "</th><td class='table-success table-striped'>".$row["Jornada8"].
                "</th><td class='table-success table-striped'>".$row["Jornada9"].
                "</th><td class='table-success table-striped'>".$row["Jornada10"].
                "</th><td class='table-success table-striped'>".$row["Jornada11"].
                "</th><td class='table-success table-striped'>".$row["Jornada12"].
                "</th><td class='table-success table-striped'>".$row["Jornada13"].
                "</th><td class='table-success table-striped'>".$row["Jornada14"].
                "</th><td class='table-success table-striped'>".$row["Jornada15"].
                "</th><td class='table-success table-striped'>".$row["Jornada16"].
                "</th><td class='table-success table-striped'>".$row["Total"].
                "</th>";
                
            }
        }
        else{
            echo "La Tabla no tiene registros";
        }
        
    ?>
  </tbody>
</table>
</body>
</html>
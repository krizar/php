 <html>
   2   │ <body>
   3   │ <?php 
   4   │    $mysqli = mysqli_connect("192.168.100.206", "Kauil", "Kauil123", "port_on");
   5   │ if (!$mysqli) {
   6   │     echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
   7   │     echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
   8   │     echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
   9   │     exit;
  10   │ }
  11   │ echo "<table border='1'><caption>Dashboard</caption>";
  12   │ echo "<tr> <td>ID:</td><td>Host Name:</td><td>Puerto:</td><td>ultima Actualizacion:</td></tr>";
  13   │ $sql = "SELECT * FROM port";
  14   │ $sql1 = "SELECT * FROM compar";
  15   │ $resultado = $mysqli->query($sql);
  16   │ $resultado1 = $mysqli->query($sql1);
  17   │ if($resultado->errno) die($resultado->error);
  18   │ if($resultado->errno) die($resultado->error);
  19   │ $row1 = $resultado1->fetch_assoc();
  20   │ while($row = $resultado->fetch_assoc()) 
  21   │ {   echo "<tr><td>".$row["id"]."</td><td>".$row["host"]."</td><td>".$row["puerto"]."</td>";
  22   │     if($row["update_at"] >= $row1["update_bas"]){
  23   │     echo "<td bgcolor='green'>".$row["update_at"]."</td><td>".$row1["update_bas"]."</td></tr>";
  24   │     } else { 
  25   │     echo "<td bgcolor='red'>".$row["update_at"]."</td><td>".$row1["update_bas"]."</td></tr>";
  26   │     }
  27   │ }
  28   │ echo "</table><br>";
  29   │ mysqli_free_result($resultado);
  30   │ mysqli_close($mysqli);
  31   │ ?>
  32   │ </body>
  33   │ </html>

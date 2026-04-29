<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Virtual</title>
    <link rel="stylesheet" href="">

</head>
<body>

    <header>
        <h1>Cardapio</h1>
        
    
    </header>
    <table>
        <tr><th>segunda</th> <th>Terça</th> <th>Quarta</th> <th>Quinta</th> <th>Sexta</th></tr>
    
    <?php
     $sql = "SELECT * FROM cardapio";

     $resultado = $conn -> query($sql);

     if($resultado -> num_rows > 0) {
        while ($row = $resultado -> fetch_assoc()) {
            echo"<tr>";
            echo"<td>{$row['segundafeira']}</td> <td>{$row['tercafeira']}</td> <td>{$row['quartafeira']}</td>
            <td>{$row['quintafeira']}</td> <td>{$row['sextafeira']}</td>";
        }
        echo'</tr>';
        echo'</table>';
     }
    ?>
</body>
</html>
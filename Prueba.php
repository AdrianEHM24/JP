<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('ini.php') ?>
    <title>Prueba</title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <table border="1">
                <tr>
                    <td>ALUMNO</td>
                    <td>NIVEL</td>
                    <td>GRADO</td>
                    <td>TUTOR</td>
                    <td>AUTO</td>
                </tr>
                <?php 
                    $sql="SELECT A.ALUMNO, A.NIVEL, A.GRADO, T.NOMBRE,  AUT.MODELO, AUT.COLOR, AUT.PLACA 
                    FROM general as G, alumno as A, tutor as T, automovil as AUT 
                    WHERE G.ID = 1 AND G.CURP = A.CURP AND G.ID_TUTOR = T.ID_TUTOR AND G.PLACA = AUT.PLACA";
                    $result=mysqli_query($conexion,$sql);
            
                    while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                <?php $prueba= $mostrar['MODELO'];
                 $prueba1= $mostrar['COLOR'];
                 $prueba2= $mostrar['PLACA'];?>
                <td><?php echo $mostrar['ALUMNO'] ?></td>
			    <td><?php echo $mostrar['NIVEL'] ?></td>
			    <td><?php echo $mostrar['GRADO'] ?></td>
			    <td><?php echo $mostrar['NOMBRE'] ?></td>
			    <td><?php echo $prueba, '<br>', $prueba1, '<br>', $prueba2 ?></td>
			    
                </tr>
                <?php 
	            }
	            ?>
            </table>


            <input type="text" name="nombre" />
            <a href="V2.html">ENVIAR</a>
        </div>
    </form>
</body>
</html>
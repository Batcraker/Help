<?php
//OBTENGO TODOS LOS DATOS Y LOS MUESTRO
$inc = include("con_db.php");
if($inc){
	$consulta = "SELECT * FROM partidos";
	$resultado = mysqli_query($conex,$consulta);
	if($resultado){
		while($row = $resultado ->fetch_array()){
			$id = $row['id'];
			$fecha = $row['fecha'];
			$local = $row['local'];
			$res1 = $row['res1'];
			$pen1 = $row['pen1'];
			$visitante = $row['visitante'];
			$res2 = $row['res2'];
			$pen2 = $row['pen2'];
			$paisLocal = $row['paisLocal'];
			$ciudadLocal = $row['ciudadLocal'];
			$paisVisitante = $row['paisVisitante'];
			$ciudadVisitante = $row['ciudadVisitante'];
			$campeonato = $row['campeonato'];
			$instancia = $row['instancia'];
			$nFecha = $row['nFecha'];
			$estadio = $row['estadio'];
			$ePais = $row['ePais'];
			$eCiudad = $row['eCiudad'];
			?>
  				<tr>
  					<div class="col-sm-1">
						<td class="ID"><?php echo $id; ?></td>
					</div>
                    <div class="col-sm-1">
						<td class="fecha"><?php echo $fecha; ?></td>
					</div>
                    <div class="col-sm-1">
						<td class="local"><?php echo $local; ?></td>
					</div>
                    
					<div class="col-sm-1">
                                <th colspan="4">
                                    
                                    <div class="col-sm-2" id="formu2">
                                        <h5><?php echo $res1; ?></h5>
                                    </div>
                                    <div class="col-sm-2" id="formu2">
                                        <p><?php echo $pen1; ?></p>
                                    </div>  
                                    <div class="col-sm-2" id="formu2">
                                        <p><?php echo $pen2; ?></p>
                                    </div>  
                                    <div class="col-sm-2" id="formu2">
                                        <p><?php echo $res2; ?></p>
                                    </div>     
                                </th>
                            </div>
                    <div class="col-sm-1">
						<td class="visitante"><?php echo $visitante; ?></td>
					</div>
                    <div class="col-sm-1">
						<td class="campeonato"><?php echo $campeonato; ?></td>
					</div>
                    <div class="col-sm-1">
						<td class="instancia"><?php echo $instancia; ?></td>
					</div>
                    <div class="col-sm-1">
						<td class="estadio"><?php echo $estadio; ?></td>
					</div>
                    <div class="col-sm-1">
						<td class="ePais"><?php echo $ePais; ?></td>
					</div>
                    <div class="col-sm-1">
						<td class="eCiudad"><?php echo $eCiudad; ?></td>
					</div>
                    <div class="col-sm-1">
						<td><button class="detalles">DETALLES</button></td>
					</div>
				</tr>
			<?php
		}
	}
}


?>
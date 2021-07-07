<!DOCTYPE html>
<html>
    <head>
        <title>PARTIDOS DEL CLUB ATL&EacuteTICO PEÑAROL</title>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <style>
        body{
            background-color: black;
            text-align: center;
            color: #ffc20e;
        }
        form{
            margin-left: 1%;
            margin-right: 1%;
        }
        .tabla1{
    
    width: 100%;
    margin-bottom: 1%;
}
.divContador{
    float: left;
    width: 69%;
    margin-left: 1%;
}
.contadorpj{
    color: grey;
}
.contadorpg{
    color: green;
}
.contadorpp{
    color: red;
}
.contadorpwo{
    color: grey;
}
.divFechaActual{
    float: right;
    width: 29%;
    margin-right: 1%;
}
.fechactual{
    float: right;
}

.Logo{
                width:15%;
                vertical-align: middle;
                float: left;
                margin-left: 15%;
            }
            .Logo2{
                width:15%;  
                vertical-align: middle;
                float: right;
                margin-right: 15%;
            }
            .LogoHeader{
                width: 5%;
                vertical-align: middle;
                float: left;
                margin-left: 1%;
            }
            .LogoHeader2{
                width: 7%;  
                vertical-align: middle;
                float: right;
                margin-right: 1%;
            }
            .contenido{
                float: left;
            }
            .encabezado{
                border-bottom: 1px solid #ffc20e;
            }
            #formu2{
                display: inline-block;
            }

            #IrArriba {
position: fixed;
bottom: 15px; /* Distancia desde abajo */
right: 15px; /* Distancia desde la derecha */
}

#IrArriba span {
width: 60px; /* Ancho del botón */
height: 60px; /* Alto del botón */
display: block;
background: url(http://lh5.googleusercontent.com/-luDGEoQ_WZE/T1Ak-gta5MI/AAAAAAAACPI/ojfEGiaNmGw/s60/flecha-arriba.png) no-repeat center center;
}
.form-control::-webkit-input-placeholder {
  text-align: center;
  
}

tr:nth-child(even) td {
    background: #ffc20e;
    color: black;
}
tr:nth-child(odd) td {
    background: black;
}
.form-control{
    background-color:black;
    border-color: #ffc20e;
}
.tabla2{
    background-color: blue;
    color: white;
}
.ventana-modal{
    background-color: rgba(255,255,255,0.5); 
    color: red; 
    width: 100%; 
    height: 100%; 
    position: absolute; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    opacity: 0;
    visibility: hidden;
}
.modal1{
    background-color: blueviolet;
    padding: auto; 
    padding-left: 30%; 
    padding-right: 30%; 
    box-sizing: content-box; 
    border-radius: 4px;
}
        </style>
    </head>
    <body>
        <div class="encabezado">
                <img class="LogoHeader" src="img\1200px-Escudo_de_Peñarol.png" alt="Nuestro Logo" />
                <img class="LogoHeader2" src="img\cds.png" alt="Nuestro Logo" />
                <h1 class="detalles">ESTAD&IacuteSTICAS DEL CLUB ATL&EacuteTICO PEÑAROL</h1>
                <img class="Logo" src="img\Sin título-2.png" alt="Nuestro Logo" />
                <img class="Logo2" src="img\Sin título-2.png" alt="Nuestro Logo" />
                <h3>CAMPE&OacuteN DEL SIGLO XX</h3>            
        </div>
        <div class="contenido" style="text-align: center;">
    		<div class="divContador form-group">
                <div class="row">
                    <h3>VS NACIONAL<!-- <?php echo $visitante; ?> --></h3>
                    <div class="">
                        <p class="contadorpj" style="display: inline;"><b>PJ 1</b></p>
                    
                        <p class="contadorpg" style="display: inline;"><b>PG 1</b></p>
                    
                        <p class="contadorpe" style="display: inline;"><b>PE 0</b></p>
                    
                        <p class="contadorpp" style="display: inline;"><b>PP 0</b></p>
                    
                        <p class="contadorpwo" style="display: inline;"><b>W.O 0</b></p>
                    </div>
                </div>
            </div>
    		<div class="divFechaActual form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="fechactual"></p>
                    </div>
                </div>
            </div>
        	<table class="tabla1">
				<thead>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
    				            <th><input class="form-control" id="id" style="background-color: black;"  name="visitante" autofocus placeholder="N°"></th>
                            </div>
                            <div class="col-sm-1">
                                <th><input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="FECHA"></th>
                            </div>
                            <div class="col-sm-1">
    				            <th><input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="LOCAL"></th>
                            </div>
                            <div class="col-sm-1">
                                <th colspan="4">
                                    <b style="color: #ffc20e;">RESULTADO</b><br> 
                                    <div class="col-sm-2" id="formu2">
                                        <input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="G">
                                    </div>
                                    <div class="col-sm-2" id="formu2">
                                        <input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="P">
                                    </div>  
                                    <div class="col-sm-2" id="formu2">
                                        <input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="P">
                                    </div>  
                                    <div class="col-sm-2" id="formu2">
                                        <input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="G">
                                    </div>     
                                </th>
                            </div>
                            <div class="col-sm-1">    
    				            <th><input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="VISITANTE"></th>
                            </div>
                            <div class="col-sm-1">    
    				            <th><input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="COPA"></th>
                            </div>
                            <div class="col-sm-1">   
                	           <th><input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="TORNEO"></th>
                            </div>
                            <div class="col-sm-1">    
                	           <th><input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="ESTADIO"></th>
                            </div>
                            <div class="col-sm-1">    
                	           <th><input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="PAÍS"></th>
                            </div>
                            <div class="col-sm-1">    
                	           <th><input type="text" class="form-control" style="background-color: black;" name="visitante" placeholder="CIUDAD"></th>
  				            </div>
                        </div>
                    </div>
                </thead>
                <tbody>
  				  <?php
            	   include("mostrar.php");
        	       ?>
                </tbody>
  		    </table>

            <div id='IrArriba'>
                <a href='#IrArriba'></a>
            </div>
            <div id='footer'>
                <button type="submit" class="btn btn-warning" name="atras"><a href="index1.php" style="text-decoration: none; color: black;" />VOLVER</button>
            </div>

           <!--  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Crear un PDF</h2>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <form action="generar/generar-pdf.php">
                        <input type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" value="Crear PDF">
                    </form>
                </div>
                <div class="mdl-card__menu">
                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">folder</i>
                    </button>
                </div>
            </div> -->

            <!-- Modal -->
            <div class="ventana-modal">
                <!-- Modal -->
                <div class="modal1">
                    
                    <p>hola</p>
                    <button id="ok">OK</button>
                </div>
            </div>
        </div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="funciones.js"></script>
	<script>
            //$.noConflict();
            $(document).ready(function() {
                $("#IrArriba").hide();
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 200) {
                            $('#IrArriba').fadeIn();
                        }else {
                            $('#IrArriba').fadeOut();
                        }
                    });
                    $('#IrArriba a').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });

                $('.detalles').click((e) => {
                    alert("funciona");
                });
            });


        </script>
    </body>
</html>

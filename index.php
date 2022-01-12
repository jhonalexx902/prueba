
    <?php 
        require_once 'funciones.php';
        if (isset($_POST['cedulas'])) {
            $data = new funciones();
            $cedula = $_POST['cedulas'];
            $dataR = $data->get_listarAcudientes($cedula);
            $data = $dataR->fetchObject();    
        }
        

    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <title>Aspirantes</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
        <form action="guardar.php" method="POST" class="grande">
                <h1 class="text-center">Regristro De Terceros</h1>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tipoidentificacion">tipo identificacion</label>
                            <input type="text" name="tipoidentificacion" id="tipoidentificacion" class="form-control">
                        </div>
                    
                    <div class="col-6">
                        <div class="form-group">
                            <label for="numeroidentificacion">numero identificacion</label>
                            <input type="text" name="numeroidentificacion" id="numeroidentificacion" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nombre1">nombre uno</label>
                            <input type="text" name="nombre1" id="nombre1" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nombre2">nombre dos</label>
                            <input type="text" name="nombre2" id="nombre2" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="apellido1">apellido uno</label>
                            <input type="text" name="apellido1" id="apellido1" class="form-control">
                        </div>
                    </div>
					 <div class="col-6">
                        <div class="form-group">
                            <label for="apellido2">apellido dos</label>
                            <input type="text" name="apellido2" id="apellido2" class="form-control">
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                </div>
            </div>
        </form>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="grande">
                <h1 class="text-center">Datos terceros</h1>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" name="cedulas" id="cedulas" class="form-control" placeholder="Cedula">
                        </div>

                    </div>
                    <div class="col-6">
                        <button type="submit" name="consultar" id="consultar" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
        </form>
        <form action="actualizar.php" method="POST" class="grande">                
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nombre">tipo identificacion</label>
                            <input type="hidden" name="idCuidador" value="<?php 
                                if (!empty($data)) {
                                    echo $data->id;
                                }?>">
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php 
                                if (!empty($data)) {
                                    echo $data->nombre;
                                }?> ">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="apellido">numero identificacion</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" value="<?php 
                                if (!empty($data)) {
                                    echo $data->apellido;
                                }?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cedula">nombre uno</label>
                            <input type="text" name="cedula" id="cedula" class="form-control" value="<?php 
                                if (!empty($data)) {
                                    echo $data->cedula;
                                }?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="telefono">nombre dos</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" value="<?php 
                                if (!empty($data)) {
                                    echo $data->telefono;
                                }?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="edad">apellido uno</label>
                            <input type="text" name="edad" id="edad" class="form-control" value="<?php 
                                if (!empty($data)) {
                                    echo $data->edad;
                                }?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="parentesco">apellido dos</label>
                            <input type="text" name="parentesco" id="parentesco" class="form-control" value="<?php 
                                if (!empty($data)) {
                                    echo $data->parentesco;
                                }?>">
                        </div>
                    </div>
                    
                </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" name="actualizar" id="actualizar" class="btn btn-primary float-right">Actualizar</button>
                </div>
            </div>
        </form>
        

        <!-- <div class="grande">
            <h1 class="text-center">Modifical Acudiente</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                        <th>Parentesco</th>
                        <th>Niño</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                   
                        <?php 
                            require_once 'funciones.php';
                            $lista = new funciones();
                            /* $totalLista = $lista->get_listarAcudientes(); */
                            $list = $totalLista->fetchObject();
                            foreach ($list as $value) {
                                echo '<tr>';
                                foreach($list as $elemento){
                                    echo "<td>".$elemento."</td>";
                                    
                                }
                                echo "<td><button type='button' class='btn btn-primary'></button></td>";
                                echo '</tr>';
                            }
                        ?> 

    
                   
                </tbody>
            </table> -->
            
        </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
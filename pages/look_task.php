<?php
 if(isset($_GET['id'])){
  $id = $_GET['id'];
$sql = "SELECT * FROM tasks WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
?>
        <div class="mesgs">
          <div class="msg_history">
            <div class="incoming_msg">
              <div class="received_msg">
                <div class="received_withd_msg">

                  <?php  
                  if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){ 
                   ?>
                <!-- CONTENIDO TAREA -->

                <h3><?php echo $row['nombre'];?> | <?php echo $row['proyecto'];?></h3> <h4>Estado: <?php echo $row['estado'];?><a target="blanc" href="<?php echo $row['link'];?>"> Link</a></h4>
                <hr>
                <h4>Fecha creacion: <?php echo $row['inicia'];?></h4>
                <h4>Fecha Estimada: <?php echo $row['estimada'];?></h4>
                <h4>Entregado: <?php 
                if($row['entrega'] === "0000-00-00 00:00:00"){
                  echo "No entregado";
                } else{   echo $row['entrega'];}
                 ?> 
                 </h4>
                <hr>
                        <p class="mt-1">Empresa: <?php echo $row['empresa'];?></p>
                        <p class="mt-1">Creado por: <?php echo $row['creador'];?></p>
                        <p class="mt-1">Equipo: <?php echo $row['equipo'];?></p>
                        <p class="mt-1">Asignado a: <?php echo $row['asignado'];?></p>
                        <p class="mt-1">Videos: <?php echo $row['videos'];?></p>
                        <p class="mt-1">Artes: <?php echo $row['artes'];?></p>
                <?php  
                }

              }
            }else{
              ?>
              <h2 class="text-center mt-4">Seleciona alguna tarea para ver su contenido</h2>
              <?php
            }   
                   ?>
              </div>
            </div>
          </div>
        </div>
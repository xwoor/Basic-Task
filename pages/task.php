<?php
$sql = "SELECT * FROM tasks ";
$result = mysqli_query($conn, $sql);
?>
<div class="inbox_people2">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Completes</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Task Name" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> 
              </div>
            </div>
          </div>
          <div class="inbox_chat">
             
              <?php
              if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){ 
                  if($row['estado'] === "Terminado"){ ?>
                
                   <!-- CONTENIDO -->
                    <div class="chat_list active_chat">
                      <div class="chat_people">
                        <div class="chat_ib">
                          <h5><?php echo $row['nombre'];?> | <?php echo $row['proyecto'];?> | <a target="blank" href="<?php echo $row['link'];?>">link</a><span class="chat_date">
                        Inicio: <?php echo $row['inicia'];?>| Estimado: <?php echo $row['estimada'];?>| Entregado: <?php echo $row['entrega'];?> </span></h5>
                        <hr>
                        <p class="mt-1">Estado: <?php echo $row['estado'];?></p>
                        <p class="mt-1">Empresa: <?php echo $row['empresa'];?></p>
                        <p class="mt-1">Creado por: <?php echo $row['creador'];?></p>
                        <p class="mt-1">Equipo: <?php echo $row['equipo'];?></p>
                        <p class="mt-1">Asignado a: <?php echo $row['asignado'];?></p>
                        <p class="mt-1">Videos: <?php echo $row['videos'];?></p>
                        <p class="mt-1">Artes: <?php echo $row['artes'];?></p>
                          <hr>
                          <a class="btn btn-primary" href="index.php?id=<?php echo $row['id'];?>"><i class="far fa-eye"></i></a> 
                          <a class="btn btn-danger" href="index.php?id=<?php echo $row['id'];?>"><i class="fas fa-pen"></i></a>
                        </div>
                      </div>
                    </div>
              <!-- FIN CONTENIDO -->
               
               <?php } }
              }
              
              ?>
          </div>
        </div>
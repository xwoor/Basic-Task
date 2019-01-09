<?php
$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);
?>
<div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>In Progress</h4>
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
                  if($row['estado'] === "En Progreso"){
                  ?>
              <!-- CONTENIDO -->
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_ib">
                  <h5><?php echo $row['nombre'];?> | <?php echo $row['proyecto'];?> <span class="chat_date"><?php echo "Estado: ".$row['estado'];?> | Estimada: <?php echo $row['estimada'];?></span></h5>
                  <p>Asignado a: <?php echo $row['asignado'];?></p>
                  <p>videos: <?php echo $row['videos'];?></p>
                  <p>Arts: <?php echo $row['artes'];?></p>
                  <hr>
                  <a class="btn btn-primary" href="index.php?id=<?php echo $row['id'];?>"><i class="far fa-eye"></i></a> 
                          <a class="btn btn-danger" href="index.php?id=<?php echo $row['id'];?>"><i class="fas fa-pen"></i></a>
                </div>
              </div>
            </div>
              <!-- FIN CONTENIDO -->
              <?php }}
              } 
              ?>
          </div>
        </div>
<?php include("includes/header.php") ?>
<?php include("includes/db.php") ?>
<div class="container mt-4">
    <h3 class=" text-center">Tareas</h3>
    <div class="messaging mt-4">
        <div class="inbox_msg">
            <?php include("pages/status_task.php") ?>
            <?php include("pages/look_task.php") ?>
        </div>
    </div>
</div>
<a href="index.php" class="btn btn-primary">
Crear Tarea
</a>
<div class="container">
    <div class="messaging">
    <div class="col-md-12 mt-4">
    <div class="inbox_msg">

        <?php include("pages/task.php") ?>
        </div>
    </div> 
    </div>  
</div>
</div>

<?php include("includes/footer.php") ?>

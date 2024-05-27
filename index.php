<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog inicio</title>
</head>
<body>
    <?php
        include_once 'componentes/navBar.php';
    ?>
    
    <!-- Consumir articulos del admin_list.php -->
    <div class="container">

        <div class="row">
            <div class="col-md-12 flex flex-row flex-wrap mt-5 mb-5">
                <h1>Listado de articulos</h1>
            </div>
        </div>

        <div class="col-md-12" id="listado">

        <?php
            include_once 'admin_list.php';
        
            foreach($listado as $articulo){
                echo '<div class="card" style="width: 18rem;">';
                echo '<img src="'.$articulo['img'].' " class="card-img-top" alt="'.$articulo['title'].'">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$articulo['title'].'</h5>';
                echo '<p class="card-text">'.$articulo['contente'].'</p>';
                echo '<a href="#" class="btn btn-primary" id="delete">Ver post</a>';
                echo '</div>';
                echo '</div>';
            }

        ?>
           

    </div>
    </div>
</body>
</html>


<?php 
    $plataformas = array('PS2', 'PS3', 'PSP', 'WII', 'XBOX360'); 
?>  

<form method="post" role="form" action="busqueda_consola.php" id="searchAdvanced">
    <input required id="nombre" type="text" name="nombre" class="form-control" placeholder="Nombre de Juego..." autocomplete="on">
    <button><i class="fa fa-search"></i></button></br>
    </div>
</form>
    
</br>

<div class="form-group text-center" id="advancedPanel">
    <form method="post" role="form" action="busqueda_consola.php">
       <strong>Seleccione una consola:</strong></br>
            <select id="genero" name="plataforma" required>
                <option value="" selected disabled>Consolas</option>
                <?php foreach($plataformas as $p){ ?>
                    <option value="<?php print_r($p); ?>"><?php print_r($p); ?></option>
                <?php }?>
            </select>
              <button><i class="fa fa-search"></i></button>
    </form>
</div>






<?php 
    $generos = array(
    '-- Listar todas --','Accion', 'Animacion', 'Apocaliptico', 'Artes marciales', 'Aventura','Cartas',
    'Ciencia Ficcion','Cocina','Comedia','Cyberpunk','Deporte','Detective','Distopia',
    'Drama','Ecchi','Escolar','Espionaje','Fantasia','Filosofico','Futbol','Gore','Harem',
    'Historia alternativa','Historico','Horror','Isekai','Josei','Kemono','Magia',
    'Mecha','Militar','Misterio','Musical','Parodia','Pelea','Policiaco','Psicologico','Recuentos de la vida',
    'Reencarnacion','Romance','RPG','Sci-Fi','Seinen','Slasher','Sobrenatural','Steampunk',
    'Superheroe','Superpoderes','Suspenso','Terror','Thriller','Tragedia','Vampiros','Videojuegos'
); 
?>  

<form method="post" role="form" action="busqueda_animes.php" id="searchAdvanced">
    <input required id="nombre" type="text" name="nombre" class="form-control" placeholder="Nombre de Anime..." autocomplete="on">
    <button><i class="fa fa-search"></i></button>
    </div>
</form>
    
</br>

<div class="form-group text-center" id="advancedPanel">
    <form method="post" role="form" action="busqueda_animes.php" >
       <strong>Busqueda de Categorias:</strong></br>
            <select id="genero" name="genero" required>
                <option value="" selected disabled>Géneros</option>
                <?php foreach($generos as $g){ ?>
                    <option value="<?php print_r($g); ?>"><?php print_r($g); ?></option>
                <?php }?>
            </select>
              <button><i class="fa fa-search"></i></button>
    </form>
</div>






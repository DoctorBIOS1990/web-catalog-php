<?php 
    $generos = array(
    '-- Listar todas --','1ra Persona', '3ra Persona', 'Accion', 'Anime', 'Arcade','Aventura', 'Beisbol', 'Belico','Buceo','Carreras',
    'Cartas','Conduccion','Cooperativo','Deporte','Disney','Espionaje','Estrategia','Fantasia','Ficcion','Futbol',
    'Hack and Slash','Horror','Indie','Manga','Mechas','Misterio','Moto','Mundo abierto','P. Isometrica','Pelea',
    'Pesca','Plataforma','Policia','Puzzle','Robots','Rol','RPG','Run and gun','Shooter','Simulacion','Simulador',
    'Supervivencia','Survival','Tactica','Terror','Tiempo Real','Turnos','Vida Virtual','Vuelos'
    ); 
?>  


<form method="post" role="form" action="/busqueda_game.php" id="searchAdvanced">
    <input required id="nombre" type="text" name="nombre" class="form-control" placeholder="Nombre de Juego..." autocomplete="on">
    <button><i class="fa fa-search"></i></button></br>
    </div>
</form>
    
</br>

<div class="form-group text-center" id="advancedPanel">
    <form method="post" role="form" action="/busqueda_game.php" >
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






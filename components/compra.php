<?php 
    $is_Stock; 
    $phone = "+5353795328";
    $texto = "Hola Juan Pablo, esto es un mensaje automático del catálogo, quiero adquirir ";
?>

<?php if ($is_Stock){ ?>
    <center>
    <a href="whatsapp://send?phone=<?php echo $phone .'&text='. $texto. '[ '.$producto.' ]' ;?>">
        <style>.aboutObject{padding-bottom:0;}</style>
            <h2 style="margin-top:0;padding-bottom:80px;" id="DisponibleLetter">
                <i class="fa fa-shopping-cart" style="color:white;"></i>
                    <span id="special" class="span_name"> Comprar</span>
            </h2>
    </a>   
    </center>
<?php } ?>



    


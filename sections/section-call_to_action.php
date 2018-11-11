<?php
/*
* Call to Action Section
*/

$call_to_action_type_1 = get_theme_mod('call_to_action_type_1');
$call_to_action_text_1 = get_theme_mod('call_to_action_text_1');
$call_to_action_link_1 = get_theme_mod('call_to_action_link_1');

$call_to_action_type_2 = get_theme_mod('call_to_action_type_2');
$call_to_action_text_2 = get_theme_mod('call_to_action_text_2');
$call_to_action_link_2 = get_theme_mod('call_to_action_link_2');

$call_to_action_type_3 = get_theme_mod('call_to_action_type_3');
$call_to_action_text_3 = get_theme_mod('call_to_action_text_3');
$call_to_action_link_3 = get_theme_mod('call_to_action_link_3');

$call_to_action_type_4 = get_theme_mod('call_to_action_type_4');
$call_to_action_text_4 = get_theme_mod('call_to_action_text_4');
$call_to_action_link_4 = get_theme_mod('call_to_action_link_4');

$call_to_action_type_5 = get_theme_mod('call_to_action_type_5');
$call_to_action_text_5 = get_theme_mod('call_to_action_text_5');
$call_to_action_link_5 = get_theme_mod('call_to_action_link_5');

$call_to_action_type_6 = get_theme_mod('call_to_action_type_6');
$call_to_action_text_6 = get_theme_mod('call_to_action_text_6');
$call_to_action_link_6 = get_theme_mod('call_to_action_link_6');
?>

<!-- Call to Action Section 1 -->
<?php if (!empty($call_to_action_type_1)) {  ?>
<div class="col-md-3 my-1">
<a class="btn btn-lg btn-secondary btn-block" href="<?php echo $call_to_action_link_1; ?>" target="_blank">
<?php
switch ($call_to_action_type_1) {
case 'mensaje':
?><i class="fas fa-comments"></i> <?php
if (empty($call_to_action_text_1)) {
echo "Enviar Mensaje";
} else {
echo $call_to_action_text_1;
}
break;
case 'llamar':
?><i class="fas fa-phone"></i> <?php
if (empty($call_to_action_text_1)) {
echo "Llamar";
} else {
echo $call_to_action_text_1;
}
break;
case 'registrar':
?><i class="fas fa-pencil-alt"></i> <?php
if (empty($call_to_action_text_1)) {
echo "Registrar";
} else {
echo $call_to_action_text_1;
}
break;
case 'comprar':
?><i class="fas fa-shopping-cart"></i> <?php
if (empty($call_to_action_text_1)) {
echo "Comprar";
} else {
echo $call_to_action_text_1;
}
break;
case 'descargar':
?><i class="fas fa-cloud-download-alt"></i> <?php
if (empty($call_to_action_text_1)) {
echo "Descargar";
} else {
echo $call_to_action_text_1;
}
break;
}
?>
</a>
</div>
<?php  } ?>

<!-- Call to Action Section 2 -->
<?php if (!empty($call_to_action_type_2)) {  ?>
<div class="col-md-3 my-1">
<a class="btn btn-lg btn-secondary btn-block" href="<?php echo $call_to_action_link_2; ?>" target="_blank">
<?php
switch ($call_to_action_type_2) {
case 'mensaje':
?><i class="fas fa-comments"></i> <?php
if (empty($call_to_action_text_2)) {
echo "Enviar Mensaje";
} else {
echo $call_to_action_text_2;
}
break;
case 'llamar':
?><i class="fas fa-phone"></i> <?php
if (empty($call_to_action_text_2)) {
echo "Llamar";
} else {
echo $call_to_action_text_2;
}
break;
case 'registrar':
?><i class="fas fa-pencil-alt"></i> <?php
if (empty($call_to_action_text_2)) {
echo "Registrar";
} else {
echo $call_to_action_text_2;
}
break;
case 'comprar':
?><i class="fas fa-shopping-cart"></i> <?php
if (empty($call_to_action_text_2)) {
echo "Comprar";
} else {
echo $call_to_action_text_2;
}
break;
case 'descargar':
?><i class="fas fa-cloud-download-alt"></i> <?php
if (empty($call_to_action_text_2)) {
echo "Descargar";
} else {
echo $call_to_action_text_2;
}
break;
}
?>
</a>
</div>
<?php  } ?>
<!-- Call to Action Section 3 -->
<?php if (!empty($call_to_action_type_3)) {  ?>
<div class="col-md-3 my-1">
<a class="btn btn-lg btn-secondary btn-block" href="<?php echo $call_to_action_link_3; ?>" target="_blank">
<?php
switch ($call_to_action_type_3) {
case 'mensaje':
?><i class="fas fa-comments"></i> <?php
if (empty($call_to_action_text_3)) {
echo "Enviar Mensaje";
} else {
echo $call_to_action_text_3;
}
break;
case 'llamar':
?><i class="fas fa-phone"></i> <?php
if (empty($call_to_action_text_3)) {
echo "Llamar";
} else {
echo $call_to_action_text_3;
}
break;
case 'registrar':
?><i class="fas fa-pencil-alt"></i> <?php
if (empty($call_to_action_text_3)) {
echo "Registrar";
} else {
echo $call_to_action_text_3;
}
break;
case 'comprar':
?><i class="fas fa-shopping-cart"></i> <?php
if (empty($call_to_action_text_3)) {
echo "Comprar";
} else {
echo $call_to_action_text_3;
}
break;
case 'descargar':
?><i class="fas fa-cloud-download-alt"></i> <?php
if (empty($call_to_action_text_3)) {
echo "Descargar";
} else {
echo $call_to_action_text_3;
}
break;
}
?>
</a>
</div>
<?php  } ?>
<!-- Call to Action Section 4 -->
<?php if (!empty($call_to_action_type_4)) {  ?>
<div class="col-md-3 my-1">
<a class="btn btn-lg btn-secondary btn-block" href="<?php echo $call_to_action_link_4; ?>" target="_blank">
<?php
switch ($call_to_action_type_4) {
case 'mensaje':
?><i class="fas fa-comments"></i> <?php
if (empty($call_to_action_text_4)) {
echo "Enviar Mensaje";
} else {
echo $call_to_action_text_4;
}
break;
case 'llamar':
?><i class="fas fa-phone"></i> <?php
if (empty($call_to_action_text_4)) {
echo "Llamar";
} else {
echo $call_to_action_text_4;
}
break;
case 'registrar':
?><i class="fas fa-pencil-alt"></i> <?php
if (empty($call_to_action_text_4)) {
echo "Registrar";
} else {
echo $call_to_action_text_4;
}
break;
case 'comprar':
?><i class="fas fa-shopping-cart"></i> <?php
if (empty($call_to_action_text_4)) {
echo "Comprar";
} else {
echo $call_to_action_text_4;
}
break;
case 'descargar':
?><i class="fas fa-cloud-download-alt"></i> <?php
if (empty($call_to_action_text_4)) {
echo "Descargar";
} else {
echo $call_to_action_text_4;
}
break;
}
?>
</a>
</div>
<?php  } ?>
<!-- Call to Action Section 5 -->
<?php if (!empty($call_to_action_type_5)) {  ?>
<div class="col-md-6 my-1">
<a class="btn btn-lg btn-secondary btn-block" href="<?php echo $call_to_action_link_5; ?>" target="_blank">
<?php
switch ($call_to_action_type_5) {
case 'mensaje':
?><i class="fas fa-comments"></i> <?php
if (empty($call_to_action_text_5)) {
echo "Enviar Mensaje";
} else {
echo $call_to_action_text_5;
}
break;
case 'llamar':
?><i class="fas fa-phone"></i> <?php
if (empty($call_to_action_text_5)) {
echo "Llamar";
} else {
echo $call_to_action_text_5;
}
break;
case 'registrar':
?><i class="fas fa-pencil-alt"></i> <?php
if (empty($call_to_action_text_5)) {
echo "Registrar";
} else {
echo $call_to_action_text_5;
}
break;
case 'comprar':
?><i class="fas fa-shopping-cart"></i> <?php
if (empty($call_to_action_text_5)) {
echo "Comprar";
} else {
echo $call_to_action_text_5;
}
break;
case 'descargar':
?><i class="fas fa-cloud-download-alt"></i> <?php
if (empty($call_to_action_text_5)) {
echo "Descargar";
} else {
echo $call_to_action_text_5;
}
break;
}
?>
</a>
</div>
<?php  } ?>
<!-- Call to Action Section 6 -->
<?php if (!empty($call_to_action_type_6)) {  ?>
<div class="col-md-6 my-1">
<a class="btn btn-lg btn-secondary btn-block" href="<?php echo $call_to_action_link_6; ?>" target="_blank">
<?php
switch ($call_to_action_type_6) {
case 'mensaje':
?><i class="fas fa-comments"></i> <?php
if (empty($call_to_action_text_6)) {
echo "Enviar Mensaje";
} else {
echo $call_to_action_text_6;
}
break;
case 'llamar':
?><i class="fas fa-phone"></i> <?php
if (empty($call_to_action_text_6)) {
echo "Llamar";
} else {
echo $call_to_action_text_6;
}
break;
case 'registrar':
?><i class="fas fa-pencil-alt"></i> <?php
if (empty($call_to_action_text_6)) {
echo "Registrar";
} else {
echo $call_to_action_text_6;
}
break;
case 'comprar':
?><i class="fas fa-shopping-cart"></i> <?php
if (empty($call_to_action_text_6)) {
echo "Comprar";
} else {
echo $call_to_action_text_6;
}
break;
case 'descargar':
?><i class="fas fa-cloud-download-alt"></i> <?php
if (empty($call_to_action_text_6)) {
echo "Descargar";
} else {
echo $call_to_action_text_6;
}
break;
}
?>
</a>
</div>
<?php  } ?>
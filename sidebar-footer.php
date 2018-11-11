<?php 
if (is_active_sidebar( 'sidebar-2' )) { ?>
	
		<div class="row d-flex justify-content-center m-1">
			<div class="card-group">
				<?php dynamic_sidebar('sidebar-2'); ?>
			</div>
		</div>
	
<?php }else{return;}
?>



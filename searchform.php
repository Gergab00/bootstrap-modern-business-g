<?php if (!is_search()) {  ?>
<form role="search" method="get" class="form-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group input-group-lg">
    <input type="search" id="<?php echo $unique_id; ?>" class="form-control" placeholder="Buscar" value="<?php echo get_search_query(); ?>" name="s" aria-describedby="button-addon">
    <input type="hidden" name="post_type" value="post" />
    <div class="input-group-append">
      <button type="submit" id="button-addon" class="search-submit btn btn-primary mb-1"> <i class="fas fa-search"></i></button></div>
    </div>
</form>
<?php }else{ ?>
<form role="search" method="get" class="form-group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group input-group-lg">
    <input type="search" id="<?php echo $unique_id; ?>" class="form-control" placeholder="Buscar" value="<?php echo get_search_query(); ?>" name="s" aria-describedby="button-addon">
    <input type="hidden" name="post_type" value="post" />
    <div class="input-group-append">
      <button type="submit" id="button-addon" class="search-submit btn btn-primary mb-1"> <i class="fas fa-search"></i></button></div>
    </div>
	<div class="form-group row d-flex align-items-center">
    <label for="customSelect" class="col-sm-1 col-form-label">Ordenar por: </label>
    <div class="col-sm-4">
      <select class="custom-select custom-select-lg" id="customSelect" name="orderby">
		  <option value="date" selected>Fecha</option>
		  <option value="title">Título</option>
		  <option value="modified">Última Actualización</option>
		  <option value="comment_count">Mas Comentadas</option>
		</select>
    </div>
    <div class="col-sm-4">
    	<div class="input-group input-group-lg">
    	<div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline1" name="order" class="custom-control-input" value="ASC" checked>
		  <label class="custom-control-label" for="customRadioInline1">Ascendente</label>
		</div>
		<div class="custom-control custom-radio custom-control-inline">
		  <input type="radio" id="customRadioInline2" name="order" class="custom-control-input" value="DESC">
		  <label class="custom-control-label" for="customRadioInline2">Descendente</label>
		</div>
    </div>
    </div>
    <label for="category_name" class="col-sm-1 col-form-label">Filtrar por: </label>
    <div class="col-sm-2">
    	<select class="custom-select custom-select-lg" id="category_name" name="category_name">
		    <option value="">Todas</option>
		    <?php $categories = get_categories();
		    foreach ($categories as $key => $category) {?>
		      <option value="<?php echo $category->slug;?>"><?php echo $category->name;?></option>
		    <?php }?>
		  </select>
    </div>
  </div>
  
</form>
<?php } ?>


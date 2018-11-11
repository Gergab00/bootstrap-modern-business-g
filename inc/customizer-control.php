<?php 
class Category_Dropdown_Custom_control extends WP_Customize_Control{
public $type = 'dropdown-taxonomies';
public function render_content(){
?>
	<label>
		<span class="customize-category-select-control"><?php echo esc_html( $this->label ); ?></span>
		<select <?php $this->link(); ?>>
		<?php
			$cats = get_categories('category');
			foreach ( $cats as $cat ) {
				echo '<option value="'.$cat->term_id.'">'.$cat->name.'</option>';
			}
		?>
		</select>
	</label>
<?php
	}
}

class TagsCloud_Dropdown_Custom_control extends WP_Customize_Control{
  public $type = 'dropdown-tagcloud';
  public function render_content(){
?>
    <label>
      <span class="customize-tags-cloud-dropdown"><?php echo esc_html( $this->label ); ?></span>
      <select <?php $this->link(); ?>>
      <?php
          	$args = wp_parse_args($this->args, array('numberposts' => '-1'));
          	$posts = get_posts($args);
			foreach ( $posts as $post ) {
				$tagCloud = '';
				$terms=get_the_terms( $post->ID, 'post_tag');
				if (!empty($terms)) {
					foreach( $terms as $term ){
						$tagCloud .= ' '. $term->name.',';
					}
				echo '<option value="'.$post->ID.'">'.$tagCloud.'</option>';
				}
          }
        ?>
      </select>
    </label>
<?php
        }
    }
?>
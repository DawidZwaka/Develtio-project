<?php 
class BootstrapWalker extends Walker_Nav_Menu {
    
	// Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    	$object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
    	$description = $item->description;
    	$permalink = $item->url;

      $output .= "<li class='nav-item" .  implode(" ", $item->classes) . "'>";
        
      //Add SPAN if no Permalink
      if( $permalink && $permalink != '#' ) {
      	$output .= '<a href="' . $permalink . '" class="nav-link">';
      } else {
      	$output .= '<span class="text-secondary">';
      }
       
      $output .= $title;

      if( $description != '' && $depth == 0 ) {
      	$output .= '<small class="description">' . $description . '</small>';
      }

      if( $permalink && $permalink != '#' ) {
      	$output .= '</a>';
      } else {
      	$output .= '</span>';
      }
    }
}

?>
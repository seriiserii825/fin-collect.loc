<?php 

class Header_Menu_Class extends Walker_Nav_Menu {

	public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
		$html = '';

		if($depth === 0){
			$html .= '<li';

			if($args->walker->has_children){
				$html .= ' class="down"';
			}

			$html .= '><a href="%s"><span>%s</span></a>';

			$output .= sprintf($html, $item->url, $item->title);
		}elseif($depth === 1){
			$html .= '<li><a href="%s">%s</a>';

			$output	.= sprintf($html, $item->url, $item->title);
		}


	}

	public function end_el(&$output, $item, $depth = 0, $args = array() ){
		if($depth === 0){
			$output .= '</li>';
		}elseif($depth === 1){
			$output	.= '</li>';
		}
	}

	public function start_lvl(&$output, $depth = 0, $args = array()){
		$output .= '<ul>';

		if($dept === 0){
			$output	.= '<ul>';
		}
	}

	public function end_lvl(&$output, $depth = 0, $args = array() ){
		$output .= '</ul>';

		if($dept === 0){
			$output	.= '</ul>';
		}
	}

}
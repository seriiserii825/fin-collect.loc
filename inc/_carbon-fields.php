<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_phone', 'Поле для телефона' )
             ->set_help_text( 'Добавьте поле для телефона в формате 8 (800) 700-77-46' )
             ->set_attribute( 'placeholder', '(***) ***-**-**' )
        ) );
}
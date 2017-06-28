<?php
/*
Title: Datos Item
Post Type: imgd_directorio
Description: Datos para el Item del Directorio
Priority: default
Order: 3
*/
piklist (
    'field',
    array(
        'type' => 'number',
        'scope' => 'post_meta',
        'field' => 'imgd_dir_cant_habitaciones',
        'label' => __('Habitaciones', 'imgd'),
        'value' => '',
        'attributes' => array(
            'class' => 'text'
        ),
        'position' => 'wrap'
    )
);
piklist (
    'field',
    array(
        'type' => 'number',
        'scope' => 'post_meta',
        'field' => 'imgd_dir_cant_habitaciones_accesibles',
        'label' => __('Habitaciones Accesibles', 'imgd'),
        'value' => '',
        'attributes' => array(
            'class' => 'text'
        ),
        'position' => 'wrap'
    )
);

piklist (
    'field',
    array(
        'type' => 'number',
        'scope' => 'post_meta',
        'field' => 'imgd_dir_estrellas',
        'label' => __('Cantidad de Estrellas', 'imgd'),
        'value' => '',
        'attributes' => array(
            'class' => 'text'
        ),
        'position' => 'wrap'
    )
);

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'imgd_dir_rampa',
    'label' => __('Rampa y puerta de entrada','imgd'),
    'value' => 'no', // set default value
    'choices' => array(
      'no' => __('No', 'imgd')
      ,'si' => __('Si', 'imgd')
    )
  ));

/*
* 
» Hall de ingreso: Espacios libres de obstáculos, anchos, señalizaciones en braille, sonoras y lumínicas.
» Mostradores: Altura adaptada a personas en silla de ruedas.
» Escaleras: Ancho y alto adecuado de los escalones.
» Espacios comunes: Libre de obstáculos, Rampas alternativas dentro del establecimiento, Puertas de apertura fácil, ancho apropiado.
» Sanitarios públicos: Símbolo internacional, Reserva mínima, Suelo antideslizante, Grifería a presión, palanca o de fácil uso.
» Ascensores: Información visual, Espacio libre en frente a la puerta, Altura de la botonera, Botones en braille o con relieve.
» Pasillos: Ancho apropiado, Suelo antideslizante, Libre de obstáculos, Suelo de alfombras.
» Habitaciones accesibles: Reserva mínima, Espacio libre de giro, Ancho de acceso lateral a la cama, Cajones y repisas accesibles, Pisos sin alfombras, Interruptores a la altura adecuada, Ventanas bajas (1,20 mts al suelo).
» Baños: Puerta: tamaño y apertura hacia el exterior, Suelo antideslizante, espacio libre, Barras de apoyo antideslizantes, Lavamanos sin pedestal ni mobiliario inferior, Grifería tipo palanca o presión, Espejo a 1 mt del suelo y con inclinación, Inodoro a 50 cm del nivel del suelo, Ducha, Asiento fijo y abatible o movible, Libre de obstáculos para entrar a la ducha.
» Sala de internet accesible: Espacio amplio.
» Varios: Teléfonos accesibles.
» Observaciones/Otros: Las plataformas se encuentran pedidas, Menú adaptado con previo aviso. Teléfonos de emergencia en baños adaptados.
*/

piklist (
    'field',
    array(
        'type' => 'number',
        'scope' => 'post_meta',
        'field' => 'imgd_programa_ano',
        'label' => __('Año', 'imgd'),
        'value' => 2016,
        'attributes' => array(
            'class' => 'text'
        ),
        'position' => 'wrap'
    )
);

piklist (
    'field',
    array(
        'type' => 'text',
        'scope' => 'post_meta',
        'field' => 'imgd_programa_director',
        'label' => __('Director', 'imgd'),
        'value' => 'Carlos Snaimon',
        'attributes' => array(
            'class' => 'text'
        ),
        'position' => 'wrap'
    )
);

piklist (
    'field',
    array(
        'type' => 'text',
        'scope' => 'post_meta',
        'field' => 'imgd_programa_produccion',
        'label' => __('Producción', 'imgd'),
        'value' => 'Filmarte',
        'attributes' => array(
            'class' => 'text'
        ),
        'position' => 'wrap'
    )
);

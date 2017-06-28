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

piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_habitaciones_accesibles_desc'
        ,'description' => __('Descripción de las Habitaciones Accesibles', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        ,'attributes' => array(
                'class' => 'regular-text'
        )
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
    'type' => 'radio',
    'field' => 'imgd_dir_rampa',
    'label' => __('Rampa y puerta de entrada','imgd'),
    'value' => 0, // set default value
    'choices' => array(
        0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_rampa_desc'
        ,'description' => __('Descripción de la Rampa', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_rampa'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);


  piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_hallingreso',
    'label' => __('Hall de ingreso accesible','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_hallingreso_desc'
        ,'description' => __('Descripción del Hall del Ingreso', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_hallingreso'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);


piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_mostradores',
    'label' => __('Mostradores','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

  piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_mostradores_desc'
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_mostradores'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_escaleras',
    'label' => __('Escaleras','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));
piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_escaleras_desc'
        ,'description' => __('Descripción de la Escalera', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_escaleras'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_espacios',
    'label' => __('Espacios Comunes','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

  piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_espacios_desc'
        ,'description' => __('Descripción de los Espacios Comunes', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_espacios'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_sanitarios',
    'label' => __('Sanitarios Públicos','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

  piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_sanitarios_desc'
        ,'description' => __('Descripción de los Sanitarios Públicos', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_sanitarios'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_ascensores',
    'label' => __('Ascensores','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

  piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_ascensores_desc'
        ,'description' => __('Descripción de los Sanitarios Públicos', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_ascensores'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_pasillos',
    'label' => __('Pasillos','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

  piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_pasillos_desc'
        ,'description' => __('Descripción de los Pasillos', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_pasillos'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_banos',
    'label' => __('Baños Accesibles','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

  piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_banos_desc'
        ,'description' => __('Descripción de los Baños Accesibles', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_banos'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_internet',
    'label' => __('Sala de Internet','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

  piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_internet_desc'
        ,'description' => __('Descripción de la Sala de Internet', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_internet'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist('field', array(
    'type' => 'radio',
    'field' => 'imgd_dir_varios',
    'label' => __('Extras','imgd'),
    'value' => 0, // set default value
    'choices' => array(
      0 => __('No', 'imgd')
      ,1 => __('Si', 'imgd')
    )
  ));

  piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_extras_desc'
        ,'description' => __('Varios', 'imgd')
        ,'value' => ''
        ,'label' => __('Descripción', 'imgd')
        , 'conditions' => array(
                    array(
                    'field' => 'imgd_dir_extras'
                    , 'value' => 1
                )
            )
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

piklist(
    'field', 
    array(
        'type' => 'text'
        ,'field' => 'imgd_dir_observaciones'
        ,'description' => __('Todo lo que no se pudo agregar en loas campos Anteriores', 'imgd')
        ,'value' => ''
        ,'label' => __('Observaciones', 'imgd')
        ,'attributes' => array(
                'class' => 'regular-text'
        )
    )
);

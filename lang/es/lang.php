<?php return [
    'plugin' => [
        'name' => 'Administración',
        'description' => ''
    ],
    'backend' => [
        'general' => [
            'side_menu_item_label' => 'Gestión de cursos',
            'created_at' => 'Creado en',
            'updated_at' => 'Actualizado en',
            'deleted_at' => 'Eliminado en',
        ],
        'navbar' => [
            'course' => 'Cursos',
            'lesson' => 'Lecciones',
            'coursestatus' => 'Estados de cursos',
            'lessonstatus' => 'Estados de lecciones',
        ],
        'course' => [
            'list' => [
                'name' => 'Nombre',
                'state' => 'Estado',
            ],
            'form' => [
                'name_es' => 'Nombre (ES)',
                'description_es' => 'Descripción (ES)',
                'name_en' => 'Nombre (EN)',
                'description_en' => 'Descripción (EN)',
                'coursestatus_id' => 'Estado',
                'coursestatus_id_placeholder' => 'Seleccionar un estado',
            ],
        ],
        'lesson' => [
            'list' => [
                'name' => 'Nombre',
                'state' => 'Estado',
            ],
            'form' => [
                'name_es' => 'Nombre (ES)',
                'description_es' => 'Descripción (ES)',
                'name_en' => 'Nombre (EN)',
                'description_en' => 'Descripción (EN)'
            ],
        ],
        'coursestatus' => [
            'list' => [
                'name_es' => 'Nombre (ES)',
                'name_en' => 'Nombre (EN)',
            ],
            'form' => [
                'name_es' => 'Nombre (ES)',
                'description_es' => 'Descripción (ES)',
                'name_en' => 'Nombre (EN)',
                'description_en' => 'Descripción (EN)',
                'hex_code' => 'Indicador de Estado del Curso',
            ],
        ],
        'lessonstatus' => [
            'list' => [
                'name_es' => 'Nombre (ES)',
                'name_en' => 'Nombre (EN)',
            ],
            'form' => [
                'name_es' => 'Nombre (ES)',
                'description_es' => 'Descripción (ES)',
                'name_en' => 'Nombre (EN)',
                'description_en' => 'Descripción (EN)',
                'hex_code' => 'Indicador de Estado de la Lección',
            ],
        ],
    ],
];
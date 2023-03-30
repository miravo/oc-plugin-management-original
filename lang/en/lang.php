<?php return [
    'plugin' => [
        'name' => 'Management',
        'description' => ''
    ],
    'backend' => [
        'general' => [
            'side_menu_item_label' => 'Courses Management',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at',
            'deleted_at' => 'Deleted at',
        ],
        'navbar' => [
            'course' => 'Courses',
            'lesson' => 'Lessons',
            'coursestatus' => 'Courses statuses',
            'lessonstatus' => 'Lessons statuses',
        ],
        'course' => [
            'list' => [
                'name' => 'Name',
                'state' => 'Status',
                'state'
            ],
            'form' => [
                'name_es' => 'Name (ES)',
                'description_es' => 'Description (ES)',
                'name_en' => 'Name (EN)',
                'description_en' => 'Description (EN)',
                'coursestatus_id' => 'Status',
                'coursestatus_id_placeholder' => 'Select a status',
            ],
        ],
        'lesson' => [
            'list' => [
                'name' => 'Name',
                'state' => 'Status',
            ],
            'form' => [
                'name_es' => 'Name (ES)',
                'description_es' => 'Description (ES)',
                'name_en' => 'Name (EN)',
                'description_en' => 'Description (EN)'
            ],
        ],
        'coursestatus' => [
            'list' => [
                'name_es' => 'Name (ES)',
                'name_en' => 'Name (EN)',
            ],
            'form' => [
                'name_es' => 'Name (ES)',
                'description_es' => 'Description (ES)',
                'name_en' => 'Name (EN)',
                'description_en' => 'Description (EN)',
                'hex_code' => 'Course Status Indicator',
            ],
        ],
        'lessonstatus' => [
            'list' => [
                'name_es' => 'Name (ES)',
                'name_en' => 'Name (EN)',
            ],
            'form' => [
                'name_es' => 'Name (ES)',
                'description_es' => 'Description (ES)',
                'name_en' => 'Name (EN)',
                'description_en' => 'Description (EN)',
                'hex_code' => 'Lesson Status Indicator',
            ],
        ],
    ],
];
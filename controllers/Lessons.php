<?php namespace Eduzoneco\Management\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Lessons extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Eduzoneco.Management', 'management', 'lesson');
    }
}

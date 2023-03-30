<?php namespace Eduzoneco\Management\Models;

use Model;
use App;
use Eduzoneco\Management\Models\CourseStatus;

/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'eduzoneco_management_courses';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'coursestatus_id' => 'required',
    ];

    public $belongsTo = [
        'status' => [\Eduzoneco\Management\Models\CourseStatus::class, 'key' => 'coursestatus_id']
    ];

    public function getCourseStatusIdOptions() {
        $locale = App::getLocale();
        $lang = explode('-', $locale)[0];
        return CourseStatus::all()->lists('description_'.$lang, 'id');
    }

    public function getCourseStatusColumnAttribute(){
        $status = CourseStatus::where('id', $this->attributes["coursestatus_id"])->first();
        $locale = App::getLocale();
        $lang = explode('-', $locale)[0];
        $description = $lang == 'es' ? 'description_es' : 'description_en';
        return $status->$description;
    }

    public function getNameAttribute(){
        $locale = App::getLocale();
        $lang = explode('-', $locale)[0];
        $name = $lang == 'es' ? 'name_es' : 'name_en';
        return $this->attributes[$name];
    }
}

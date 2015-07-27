<?php namespace Octohelp\Importexport\Models;

use Model;

/**
 * Entries Model
 */
class Entries extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'octohelp_importexport_entries';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['id','name','age','dob','occupation','city'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getCityOptions($keyValue = null) {
        return ['New-York' => 'New-York','Los Angeles'=>'Los Angeles'];
    }

}
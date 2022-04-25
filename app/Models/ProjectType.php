<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectType extends Model
{
    use HasFactory;

    protected $guarded = [];


    /*
    |--------------------------------------------------------------------------
    | CONSTANTS
    |--------------------------------------------------------------------------
    */

    public const ALREADY_ARCHIVED = 'already_archived';
    public const CUSTOMER_REQUEST = 'customer_request';
    public const COLLABORATION = 'collaboration';

    /*
    * return all project types
    * @param none
    * @return array
    */
    public static function getTypes() : array
    {
        return [
            self::ALREADY_ARCHIVED,
            self::CUSTOMER_REQUEST,
            self::COLLABORATION,
        ];
    }

    public function projects() : HasMany {
        return $this->hasMany(Project::class);
    }
}

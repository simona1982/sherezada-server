<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'services';

    protected $fillable = [
        'name'
    ];

    //======= RELATIONSHIPS //=======
    public function subservices() {
        return $this->hasMany('App\Subservice');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Treatment extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'treatments';

    
    protected $fillable = [
        'name', 
        'pvp',
        'subservice_id'
    ];

    //======= RELATIONSHIPS //=======
    public function subservice()
    {
        return $this->belongsTo('App\Subservice');
    }
}

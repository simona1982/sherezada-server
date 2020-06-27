<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subservice extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subservices';

    protected $fillable = [
        'name',
        'service_id'
    ];

    //======= RELATIONSHIPS //=======
    public function service() {
        return $this->belongsTo('App\Service');
    }

    public function treatments()
    {
        return $this->hasMany('App\Treatment');
    } 
}

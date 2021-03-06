<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerQuery extends Model
{
    protected $fillable = [
        'serviceArea', 'workArea', 'problemDescription', 'problemStatus',
        'problemSeverity', 'comments', 'hardwareType', 'softwareType',
    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }

    public function comments() {
        return $this->hasMany('App\Comments');
    }
}

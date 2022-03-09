<?php

namespace App\Containers\AppSection\DDFDetails\Models;

use App\Ship\Parents\Models\Model;

class DDFDetails extends Model
{
    protected $fillable = [

    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $table = 'ddf_detail';

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'DDFDetails';
}

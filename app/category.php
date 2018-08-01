<?php

namespace App;

use App\Models\Auth\Traits\Attribute\CategoryAttribute;
use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    protected $fillable = [
        'name',
    ];

    use CategoryAttribute;

    public function user()
    {
        return $this->hasMany('App\Models\Auth\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'sub_title', 'client', 'date', 'service', 'description'
    ];

    public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }
}

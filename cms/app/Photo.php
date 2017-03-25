<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function imageAble()
    {

        return $this->morphTo();
    }


}

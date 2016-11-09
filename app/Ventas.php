<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ventas';

    public function producto()
    {
        return $this->hasOne('App\Productos', 'id','producto');
    }
}

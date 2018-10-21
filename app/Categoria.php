<?php

namespace curso;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion',
    ];

    public function producto() 
    {
    	return $this->hasMany('curso\Producto', 'cat_id');
    }
}

<?php

namespace curso;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_id', 'descripcion', 'marca', 'cantidad', 'precio',
    ];

    public function categoria() 
    {
    	return $this->belongsTo('curso\Categoria', 'cat_id', 'id');
    }
}

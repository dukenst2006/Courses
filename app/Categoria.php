<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Categoria extends Model
{
    use Sluggable;

    protected $table = 'categorias';
    protected $fillable = ['nombre','slug'];

    public function cursos(){
        return $this->hasMany('App\Curso');
    }

    public function subcategorias(){
        return $this->hasMany('App\Subcategoria');
    }


    public function sluggable(){
        return [
            'slug' => [
                'source' => 'nombre'
            ]
        ];
    }
} 
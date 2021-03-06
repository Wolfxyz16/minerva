<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Ejercicio extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ejercicios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'enunciado',
        'preguntas',
        'soluciones',
    ];

    /**
     * Devuelve la categoria del ejercicio
     */
    public function categoria() 
    {
        return $this->belongsTo(Categoria::class);
    }
}

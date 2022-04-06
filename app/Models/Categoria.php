<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asignatura;

class Categoria extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'asignatura',
    ];

    /**
     * Devuelve la asignatura de la categoria
     */
    public function asignatura() 
    {
        return $this->belongsTo(asignatura::class);
    }
}

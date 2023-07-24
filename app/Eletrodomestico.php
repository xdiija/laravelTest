<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eletrodomestico extends Model
{
    protected $fillable = ['nome', 'descricao', 'tensao', 'marca'];

    // Validation rules for creating and updating Eletrodomestico records
    public static $rules = [
        'nome' => 'required|string|max:255',
        'descricao' => 'required|string',
        'tensao' => 'required|string|max:10',
        'marca' => 'required|string|max:255',
    ];

    // Optional: Define any relationships with other models if applicable
    // For example, if an Eletrodomestico belongs to a Category:
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // Optional: Accessor to get the full description of the Eletrodomestico
    // public function getFullDescriptionAttribute()
    // {
    //     return "{$this->nome} - {$this->descricao}";
    // }
}
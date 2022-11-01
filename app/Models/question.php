<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer'
    ];


    public static function createRule()
    {
        return [
            'question' => 'required',
            'answer' => 'required'
        ];
    }

    public static function deleteRule()
    {
        return [
            'id' => 'required|exists:questions,id'
        ];
    }

}

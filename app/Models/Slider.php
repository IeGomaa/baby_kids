<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['image'];


    public static function createRule()
    {
        return [
            'image' => 'required'
        ];
    }

    public static function deleteRule()
    {
        return [
            'id' => 'required|exists:sliders,id'
        ];
    }

    public function getImageAttribute($value)
    {
        return 'uploaded/slider/' . $value;
    }

}

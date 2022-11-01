<?php

namespace App\Http\Traits;

trait ModelTrait
{
    private function getRecordById($model, $id)
    {
        return $model::find($id);
    }
}

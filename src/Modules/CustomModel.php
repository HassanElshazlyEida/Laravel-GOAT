<?php

namespace Modules;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use LogicException;

abstract class CustomModel extends Model
{
    /**
     * @param    $query
     * @return Builder
     */
    public function newEloquentBuilder($query): Builder
    {
        throw new LogicException(sprintf('Model %s must define `newEloquentBuilder`', get_class()));
    }
}

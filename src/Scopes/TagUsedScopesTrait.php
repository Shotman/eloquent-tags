<?php 

namespace Shamil\Tags\Scopes;

trait TagUsedScopesTrait
{
    public function scopeUsedGte($query, $count)
    {
        return $query->where('count', '>=', $count);
    }

    public function scopeUsedGt($query, $count)
    {
        return $query->where('count', '>', $count);
    }

    public function scopeUsedLte($query, $count)
    {
        return $query->where('count', '<=', $count);
    }

    public function scopeUsedLt($query, $count)
    {
        return $query->where('count', '<', $count);
    }
}

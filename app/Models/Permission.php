<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function search($filter = null)
    {
        return $this->where(function ($query) use ($filter) {
            if ($filter) {
                $query
                    ->where('name', 'like', "%{$filter}%")
                    ->orWhere('description', 'like', "%{$filter}%");
            }
        })
        ->paginate();
    }

    public function profiles()
    {
        return $this->belongsToMany(Profile::class);
    }
}

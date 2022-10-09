<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class CostRecord extends Model
{
    protected $fillable = [
        'cost_category_id',
        'user_id',
        'total'
    ];

    const UPDATED_AT = null;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function costCategory() {
        return $this->belongsTo(CostCategory::class);
    }
}

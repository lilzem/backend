<?php

namespace App\Http\Controllers\Users\CostCategories;

use App\Http\Controllers\Controller;
use App\Models\CostCategory;
use App\Models\User;

class CostRecordController extends Controller
{
    public function index(User $user, CostCategory $cost_category) {
        return $user->costRecords()->where('cost_category_id', $cost_category->id)->get();
    }
}

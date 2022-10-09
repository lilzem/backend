<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostCategories\StoreRequest;
use App\Models\CostCategory;
use Illuminate\Http\Request;

class CostCategoryController extends Controller
{
    public function index() {
        return CostCategory::all();
    }

    public function store(StoreRequest $request) {
        return CostCategory::create($request->validated());
    }
}


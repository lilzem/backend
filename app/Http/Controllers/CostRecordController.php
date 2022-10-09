<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostRecords\StoreRequest;
use App\Models\CostRecord;
use Illuminate\Http\Request;

class CostRecordController extends Controller
{
    public function store(StoreRequest $request) {
        return CostRecord::create($request->validated());
    }
}

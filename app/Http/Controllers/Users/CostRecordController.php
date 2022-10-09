<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;

class CostRecordController extends Controller
{
    public function index(User $user) {
        return $user->costRecords;
    }
}

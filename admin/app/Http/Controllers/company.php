<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class company extends Controller
{
    public function info(){
         $company = [
            'name' => config('company.name'),
            'email' => config('company.email'),
            'phone' => config('company.phone'),
            'address' => config('company.address'),
        ];

        return response()->json($company);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\tenancy_register_request;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenancyController extends Controller
{
    public function createRegister(){

        return view ('tenancy_app.tenancy_register');
    }

    public function createPostRegister(tenancy_register_request $request){
//        dd($request->all());
        $tenant= Tenant::create($request->validated());
//        dd($tenant);
        $tenant->createDomain(['domain'=>$request->domain]);
        return 'ok';
    }
}

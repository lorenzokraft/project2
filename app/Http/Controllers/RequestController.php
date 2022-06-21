<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SaveTenantRequest;
use App\Models\Request as TenantsRequestModel;


class RequestController extends Controller
{


    //
    public function submit_request()
    {
        $user = Auth()->user();
        return view('requests.submit_request', ["user" => $user]);
    }



    //
    public function save_request(SaveTenantRequest $request)
    {
        $valid_data = $request->validated();

        TenantsRequestModel::create($valid_data);

        return redirect()->route("my_queries");
    }



    // my queries
    public function submitted_request(Request $request, $status = "all")
    {

        $queries = TenantsRequestModel::myQueries($status);

        return view('requests.submitted_request', ["queries" => $queries]);
    }

    public function request_details()
    {
        return view('requests.request_details');
    }
}

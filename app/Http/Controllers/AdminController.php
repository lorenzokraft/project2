<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request  as TenantsRequest; 
use App\Models\User;


class AdminController extends Controller
{
    //
    
    public function index(){
        
        $requests = TenantsRequest::all();
        
        
        return view("admin.home", [
            "requests" => $requests,
            "resolved_queries" => count( TenantsRequest::resolvedQueries() ),
            "total_queries" => count( TenantsRequest::totalQueries() ),
            "pending_queries" => count( TenantsRequest::pendingQueries() ),
            "cancelled_queries" => count( TenantsRequest::cancelledQueries() ),
            "total_tenants" => count( User::totalTenants() ),
        ]);        
    }
    
    
    
    public function view_request(Request $requests, $id){
        
        $request = TenantsRequest::findOrFail($id);
        
        return view("admin.detail_request", ["request" => $request ]);                
    }
    
    
    public function approve(Request $request, $id){
        TenantsRequest::find($id)->update(["status" => "approved"]);
        return redirect()->route("admin_home");
    }
    
    
    public function cancel(Request $request, $id){
        TenantsRequest::find($id)->update(["status" => "cancelled"]);
        return redirect()->route("admin_home");
    }
    
    
    public function pending(Request $request, $id){
        TenantsRequest::find($id)->update(["status" => "pending"]);
        return redirect()->route("admin_home");
    }
    
}

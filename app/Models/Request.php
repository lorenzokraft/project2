<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    
    
    // my queries
    public static function myQueries($status){
        $user_id  =  Auth()->user()->id;
        
        $queries = Request::where("user_id", $user_id)->get();         
       
        if($status !== "all"){
            $queries = Request::where([
                "user_id" => $user_id,
                "status" => $status
            ])->get();
        }
        
        return $queries;
    }
    
    
    public function user(){
        return $this->belongsTo("App\Models\User");
    }
    
    
    public static function resolvedQueries(){
        return Request::where("status", "approved")->get();
    }
    
    
    public static function totalQueries(){
        return Request::all();
    }
    
    
    public static function pendingQueries(){
        return Request::where("status", "pending")->get();
    }
    
    public static function cancelledQueries(){
        return Request::where("status", "cancelled")->get();
    }
    
    
    
}

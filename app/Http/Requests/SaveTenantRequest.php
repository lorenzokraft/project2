<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveTenantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "firstName" => ["bail", "required"],
            "lastName" => ["bail", "required"],
            "email" => ["bail", "email"],
            "telephone" => ["bail", "required", "integer"],
            "user_id" => ["bail", "required"],
            "email" => ["bail", "required", "email"],
            "typeOfMaintenance" => ["bail", "required"],
            "damageDate" => ["bail", "required"],
            "inspectionDate" => ["bail", "required"],
            "preferedTime" => ["bail", "required"],
            //"picture" => ["required"],
        ];
    }
}

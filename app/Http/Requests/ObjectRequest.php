<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use app\Objects;

class ObjectRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {

        return [
            'license_plate' => ['required', Rule::unique('objects')->ignore($this->id, 'obj_id')],
            'chassis_number' => ['required', Rule::unique('objects')->ignore($this->id, 'obj_id')],
            'obj_type' => 'required',
            'brand' => 'required',
            'type' => 'required',
            'year' => 'required',
            'mass_inventory' => 'required',
            'mass_max' => 'required',
            'length_till' => 'required',
            'length_construction' => 'required',
            'height' => 'required',
            'license_needed' => 'required',
            'image_link' => 'required',
            'day_view_image_link' => 'required',
            'night_view_image_link' => 'required',
            'price_day' => 'required',
            'price_week' => 'required'
        ];
    }
}

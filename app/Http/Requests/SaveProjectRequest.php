<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Project;

class SaveProjectRequest extends FormRequest
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
        // Check Create or Update
        if ($this->method() == 'PATCH') {
            $url_rule = ['required', 'unique:projects,url,' . $this->project->url . ',url']; //para actualizar

        } else {
            $url_rule = ['required', 'unique:projects,url']; //para crear nuevo
        }


        return [
            'title' => 'required',
            'url'  => $url_rule,
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El proyecto necesita el titulo'
        ];
    }
}

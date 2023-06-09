<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'group_name' => 'required|string',
            'job_title' => 'required|string',
            'role' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Только алфавит кириллицы или латиницы',
            'group_name.required' => 'Это поле необходимо для заполнения',
            'group_name.string' => 'Группа в формате XX-XX-XX',
            'job_title.required' => 'Это поле необходимо для заполнения',
            'job_title.string' => 'Н.р: Руководитель тьюторского корпуса',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Ваша почта должна соответствовать формату mail@some.domain',
            'email.unique' => 'Пользователь с таким email уже существует',

        ];
    }
}

<?php

namespace App\Http\Requests\Admin\Protocol;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'protocol_agenda' => 'required|string',
            'protocol_decision' => 'required|string',
            'date_of_meeting' => 'required|date',
            'date_of_next_meeting' => 'required|date',
            'user_ids' => 'nullable|array',
            'user_ids.*' => 'nullable|integer|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'protocol_agenda.required' => 'Это поле необходимо для заполнения',
            'protocol_agenda.string' => 'Данные должны соответствовать строчному типу',
            'protocol_decision.required' => 'Это поле необходимо для заполнения',
            'protocol_decision.string' => 'Данные должны соответствовать строчному типу',
            'date_of_meeting.required' => 'Это поле необходимо для заполнения',
            'date_of_meeting.date' => 'Поле для <strong>Даты</strong>',
            'date_of_next_meeting.required' => 'Это поле необходимо для заполнения',
            'date_of_next_meeting.date' => 'Поле для <strong>Даты</strong>',

            'user_ids.array' => 'Необходимо отправить массив данных',
        ];
    }
}

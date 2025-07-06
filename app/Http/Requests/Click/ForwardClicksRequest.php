<?php

namespace App\Http\Requests\Click;

use Illuminate\Foundation\Http\FormRequest;

class ForwardClicksRequest extends FormRequest
{
    private const DATE = 'date';

    public function rules(): array
    {
        return [self::DATE => ['required', 'date', 'date_format:Y-m-d']];
    }

    public function getDate(): string
    {
        return $this->query(self::DATE);
    }
}

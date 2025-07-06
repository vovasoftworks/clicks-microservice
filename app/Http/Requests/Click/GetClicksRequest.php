<?php

namespace App\Http\Requests\Click;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class GetClicksRequest extends FormRequest
{
    private const DATE_FROM = 'date_from';
    private const DATE_TO = 'date_to';
    private const SORT_BY = 'sort_by';
    private const DIRECTION = 'direction';

    public function rules(): array
    {
        return [
            self::DATE_FROM => ['required', 'date'],
            self::DATE_TO => ['required', 'date'],
            self::SORT_BY => ['nullable', 'string'],
            self::DIRECTION => ['nullable', Rule::in(['asc', 'desc'])],
        ];
    }

    public function getDateFrom(): string
    {
        return $this->query(self::DATE_FROM);
    }

    public function getDateTo(): string
    {
        return $this->query(self::DATE_TO);
    }

    public function getSortBy(): ?string
    {
        return $this->query(self::SORT_BY);
    }

    public function getDirection(): ?string
    {
        return $this->query(self::DIRECTION) ?? 'asc';
    }
}

<?php

namespace App\Http\Requests\Click;

use Carbon\Carbon;
use App\Models\Click;
use Illuminate\Foundation\Http\FormRequest;

class StoreClickRequest extends FormRequest
{
    private const CLICK_ID = 'click_id';
    private const OFFER_ID = 'offer_id';
    private const SOURCE = 'source';
    private const TIMESTAMP = 'timestamp';
    private const SIGNATURE = 'signature';

    public function authorize(): bool
    {
        return $this->user()->can('create', [Click::class, $this->getSignature(), $this->getClickId()]);
    }

    public function rules(): array
    {
        return [
            self::CLICK_ID  => ['required', 'string', 'max:64'],
            self::OFFER_ID  => ['required', 'integer'],
            self::SOURCE    => ['required', 'string', 'max:255'],
            self::TIMESTAMP => ['required', 'date'],
            self::SIGNATURE => ['required', 'string', 'size:64']
        ];
    }

    public function getClickId(): string
    {
        return $this->input(self::CLICK_ID);
    }

    public function getOfferId(): int
    {
        return $this->input(self::OFFER_ID);
    }

    public function getSource(): string
    {
        return $this->input(self::SOURCE);
    }

    public function getTimestamp(): string
    {
        return Carbon::parse($this->input(self::TIMESTAMP))->toDateTimeString();
    }

    public function getSignature(): string
    {
        return $this->input(self::SIGNATURE);
    }
}

<?php

namespace App\Http\Requests;

use App\Http\DataTransferObjects\ProposeTalkDto;
use Illuminate\Foundation\Http\FormRequest;

class ProposeTalkRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:254'],
            'email' => ['required', 'email', 'max:254'],
            'twitter' => ['nullable', 'string', 'max:254'],
            'topic' => ['required', 'string', 'max:254'],
            'abstract' => ['required', 'string', 'max:65000'],
            'g-recaptcha-response' => ['required', 'recaptchav3:send_email,0.5']
        ];
    }

    public function getProposeTalkDto(): ProposeTalkDto
    {
        return new ProposeTalkDto(
            name: $this->validated()['name'],
            email: $this->validated()['email'],
            twitter: $this->validated()['twitter'] ?? null,
            topic: $this->validated()['topic'],
            abstract: $this->validated()['abstract']
        );
    }
}

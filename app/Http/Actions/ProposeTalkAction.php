<?php

namespace App\Http\Actions;

use App\Http\DataTransferObjects\ProposeTalkDto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ProposeTalkAction
{
    public function handle(ProposeTalkDto $dto): void
    {
        $timestamp = date('U');
        Storage::put("propose_$timestamp.txt", $dto->toEmail());

        Mail::raw($dto->toEmail(), function ($message) use ($dto) {
            $message->from('propose.talk@webstack.sk', 'Propose Talk Webstack');
            $message->to(config('mail.to'));
            $message->subject('Proposed talk - '.$dto->name);
        });
    }
}

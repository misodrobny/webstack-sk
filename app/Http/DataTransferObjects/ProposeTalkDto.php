<?php

namespace App\Http\DataTransferObjects;

class ProposeTalkDto
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly ?string $twitter,
        public readonly string $topic,
        public readonly string $abstract,
    ) {
    }

    public function toEmail(): string
    {
        return $this->name . PHP_EOL .
            $this->email . PHP_EOL .
            $this->twitter . PHP_EOL . PHP_EOL .
            $this->topic . PHP_EOL . PHP_EOL .
            $this->abstract;
    }
}
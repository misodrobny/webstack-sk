<?php

namespace App\Http\Controllers;

use App\Http\Actions\ProposeTalkAction;
use App\Http\Requests\ProposeTalkRequest;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

class ProposeTalkController extends Controller
{
    public function __invoke(ProposeTalkRequest $request, ProposeTalkAction $action)
    {
        try {
            $action->handle($request->getProposeTalkDto());

            return response()->json([
                'message' => 'Thanks for submitting your topic.',
            ], ResponseAlias::HTTP_OK);

        } catch (Throwable) {
            return response()->json([
                'message' => 'We were unable to process your request. Please contact us at hello@webstack.sk.',
            ], ResponseAlias::HTTP_BAD_REQUEST);
        }
    }
}

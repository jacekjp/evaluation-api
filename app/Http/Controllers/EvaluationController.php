<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluationRequest;
use App\Http\Resources\EvaluationResource;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function store(EvaluationRequest $request)
    {
        try {
            return new EvaluationResource(Evaluation::create($request->all()));
        } catch (\Throwable $th) {
            return response()->json([
               'error' => $th->getMessage()
            ]);
        }

    }
}

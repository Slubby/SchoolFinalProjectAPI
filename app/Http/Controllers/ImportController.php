<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function Students(Request $request): JsonResponse
    {
        $import = new StudentImport();
        $import->import($request->file('students'));

        return response()->json(['message' => 'Students successfully imported']);
    }
}


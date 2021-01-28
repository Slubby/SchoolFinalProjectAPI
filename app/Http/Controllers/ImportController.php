<?php

namespace App\Http\Controllers;

use App\Http\Requests\Import\StudentRequest;
use App\Imports\StudentImport;
use Illuminate\Http\JsonResponse;

class ImportController extends Controller
{
    /**
     * Import students
     *
     * @group Teacher
     * @authenticated*
     *
     * @bodyParam students file required
     * @bodyParam password string required default password for students
     *
     * @param StudentRequest $request
     * @return JsonResponse
     */
    public function Students(StudentRequest $request): JsonResponse
    {
        $validation = (object) $request->validated();

        $import = new StudentImport();
        $import->password = $validation->password;
        $import->import($request->file('students'));

        return response()->json(['message' => 'Students successfully imported']);
    }
}


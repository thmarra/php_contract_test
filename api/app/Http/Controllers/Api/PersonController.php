<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $person = [
        1 => [
            'name' => 'John Doe',
            'age' => 25
        ],
        2 => [
            'name' => 'Jane Doe',
            'age' => 20
        ]
    ];

    public function index()
    {
        return response()->json($this->person, 200);
    }

    public function show(int $id)
    {
        if (isset($this->person[$id])) {
            return response()->json($this->person[$id], 200);
        }

        return response()->json([
            'message' => 'Not Found'
        ], 404);
    }
}
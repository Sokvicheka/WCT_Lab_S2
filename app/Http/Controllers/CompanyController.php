<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data;

class CompanyController extends Controller
{
    // Get all companies
    public function index()
    {
        $companies_data = Data::$companies_data;
        return response()->json($companies_data);
    }

    // Get a single company by ID
    public function show(string $id)
    {
        $companies_data = Data::$companies_data;
        if (isset($companies_data[$id])) {
            return response()->json($companies_data[$id]);
        }
        return response()->json(['error' => 'Company not found'], 404);
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
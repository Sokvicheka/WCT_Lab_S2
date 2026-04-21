<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Data;

class ContactController extends Controller
{
    public function index()
    {
        $data = Data::$contacts_data;
        $companies_data = Data::$companies_data;
        return view('contacts.index', compact('data', 'companies_data'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function show($id)
    {
        $contactsData = Data::$contacts_data;
        abort_if(!isset($contactsData[$id]), 404, 'Contact not found.');
        $data = $contactsData[$id];
        return view('contacts.show', compact('data'));
    }
}
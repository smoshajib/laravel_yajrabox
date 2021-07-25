<?php

namespace App\Http\Controllers;
use App\DataTables\UsersDataTable;
use App\DataTables\UsersDataTableEditor;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users');   
    }

    public function store(UsersDataTableEditor $editor)
    {
        return $editor->process(request());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Yajra\Datatables\Datatables;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('example1');   
    }


    public function getUser()
    {
        // $users = User::select(['id', 'name', 'email']);

        return Datatables::of(User::query())
        ->setRowClass(function ($user) {
            return $user->id % 2 == 0 ? 'alert-info' : 'alert-danger';
        })
        ->setRowId(function ($user) {
            return $user->id;
        })
        ->setRowAttr([
            'align' =>'center', 
        ])
        // ->setRowData([
        //     'data-name' => 'row-{{$name}}',
        // ])
        ->addColumn('country', '{{$country}}!')
        ->editColumn('edit', function(User $user) {
            return $user->created_at->diffForHumans();
        })
        ->editColumn('action','action')
        ->rawColumns(['action'])
        // ->removeColumn('id')
        ->make(true);
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

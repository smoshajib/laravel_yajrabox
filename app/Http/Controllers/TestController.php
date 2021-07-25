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
// user data
        return Datatables::of(User::query())
// user data

// row class
        ->setRowClass(function ($user) {
            return $user->id % 2 == 0 ? 'alert-info' : 'alert-danger';
        })
  // row class
  // row ID      
        ->setRowId(function ($user) {
            return $user->id;
        })
// row ID

// row Att
        ->setRowAttr([
            'align' =>'center', 
        ])
// row Att

// row data

        // ->setRowData([
        //     'data-name' => 'row-{{$name}}',
        // ])

   // row data
   
   // add col
        ->addColumn('country', '{{$country}}!')
   // add col

   // edit col
        ->editColumn('edit', function(User $user) {
            return $user->created_at->diffForHumans();
        })
    // edit col
    
    //edit col with action page
        ->editColumn('action','action')
        ->rawColumns(['action'])
    //edit col with action page    
    // remove col    
        // ->removeColumn('id')
    // remove col
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

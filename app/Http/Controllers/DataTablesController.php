<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use DataTables;
use App\Models\Auth\User;

class DataTablesController extends Controller
{
    public function datatable()
    {
        return view('backend.auth.user.index');
    }

    public function getPosts()
    {
        $query = \DataTables::of(User::query());

        return \DataTables
            ::eloquent($query)
            ->addColumn('discipline_name', function (User $user) {
                return $user->category->name;
            })
            ->addColumn('confirmed_label', function (User $user) {
                return $user->confirmed ==1? "Yes" : "No";
            })
            // ->rawColumns(['action_buttons', 'action_buttons'])
            // ->addColumn('action', 'eloquent.tables.users-action')
            ->make(true);

        // $users = User::join('categories', 'users.category_id', '=', 'categories.id')
        //     ->select(['users.*', 'categories.name as discipline_name']);
        // return Datatables::of($users)
        // ->addColumn('action', 'eloquent.tables.users-action')
        // // ->editColumn('dis_name', 'discipline_name')
        // ->make(true);
        // return \DataTables::of(User::query())->make(true);
    }
}

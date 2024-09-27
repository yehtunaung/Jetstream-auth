<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users;
    public function __construct(User $user)
    {
        $this->users = $user;
    }
    public function index()
    {
        $columns = [
            ['label' => 'Name', 'field' => 'name'],
            ['label' => 'Email', 'field' => 'email'],
            ['label' => 'Created At', 'field' => 'created_at'],
        ];

        // Pass the query builder instead of paginated results
        $dataModel = User::select('name', 'email', 'created_at')->get(); // array အဖြစ်ပြောင်းပါ

        return view('admin.users.index', compact('columns', 'dataModel'));
    }
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

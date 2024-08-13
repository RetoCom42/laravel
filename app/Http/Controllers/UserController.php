<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function assignRole(Request $request, $id)
    {
        $user = User::find($id);
        $user->assignRole($request->role);
        return response()->json(['success' => 'Rol asignado']);
    }
}

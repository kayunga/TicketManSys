<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming you have a User model set up

class UserController extends Controller
{

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
    ]);

    $validated['password'] = bcrypt($validated['password']);
    User::create($validated);

    return redirect()->back()->with('success', 'User added successfully!');
}
        public function show(){
        // Fetch all users from the database
        $users = User::all();
        // Return the view with the users data
        return view('users/edit-users', ['users' => $users]);
        }

        public function edit($id)
        {
            // Fetch the user data from the database
            $user = User::findOrFail($id);
            // Return the view with the user data
            return view('users/edit-user', ['user' => $user]);
        }

        public function update(Request $request, $id)
        {
            // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => 'nullable|string|min:8|confirmed',
            ]);

            // Update the user data in the database
            $user = User::findOrFail($id);
            $user->update($validatedData);

            // Redirect back with a success message
            return redirect()->back()->with('success', 'User updated successfully!');
        }
        public function destroy($id)
        {
            // Delete the user from the database
            $user = User::findOrFail($id);
            $user->delete();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'User deleted successfully!');
        }
        public function searchUsers(Request $request)
        {
            // Validate the search query
            $validatedData = $request->validate([
                'query' => 'required|string|max:255',
            ]);

            // Search for users in the database
            $users = User::where('name', 'like', '%' . $validatedData['query'] . '%')
                ->orWhere('email', 'like', '%' . $validatedData['query'] . '%')
                ->get();

            // Return the view with the search results
            return view('users/search-users', ['users' => $users]);
        }
}

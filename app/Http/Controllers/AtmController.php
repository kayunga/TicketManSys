<?php

namespace App\Http\Controllers;

use App\Models\Atm;
use Illuminate\Http\Request;

class AtmController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'atm_id' => 'required|string|max:255',
            'site' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'bank' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        // Store the ATM data in the database
        // Assuming you have an Atm model set up
        Atm::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'ATM added successfully!');
    }

    public function index()
    {

        // Fetch new ATMs from the database
        $atms = Atm::latest()->get()->take(5);
        // Return the view with the ATMs data
        return view('atm-manage', ['atms' => $atms]);
    }

    public function show()
    {

        // Fetch new ATMs from the database
        $atms = Atm::get();
        // Return the view with the ATMs data
        return view('show-atms', ['atms' => $atms]);
    }
    public function edit($id)
    {
        // Fetch the ATM data from the database
        $atm = Atm::findOrFail($id);
        // Return the view with the ATM data
        return view('edit-atm', ['atm' => $atm]);
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'atm_id' => 'required|string|max:255',
            'site' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'bank' => 'required|string|max:255',
        ]);

        // Update the ATM data in the database
        Atm::where('id', $id)->update($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'ATM updated successfully!');
    }
    public function destroy($id)
    {
        // Delete the ATM from the database
        Atm::destroy($id);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'ATM deleted successfully!');
    }

    public function searchAtms(Request $request)
    {
        $query = $request->input('search');
        $atms = Atm::where('atm_id', 'like', "%{$query}%")
            ->orWhere('site', 'like', "%{$query}%")
            ->orWhere('city', 'like', "%{$query}%")
            ->orWhere('model', 'like', "%{$query}%")
            ->orWhere('bank', 'like', "%{$query}%")
            ->get();

        return view('show-atms', ['atms' => $atms]);
    }
}

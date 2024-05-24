<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Employee;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    public function index()
    {
        $benefits = Benefit::all();
        $employees = Employee::all();
        return view('dashboard.benefit.index', compact('benefits','employees'));
    }

    public function create()
    {
        return view('benefits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'year' => 'required|integer',
            'total_vacation_days' => 'required|integer',
        ]);

        Benefit::create($request->all());

        return redirect()->route('benefits.index')->with('success', 'Benefit created successfully.');
    }

    public function edit(Benefit $benefit)
    {
        return view('benefits.edit', compact('benefit'));
    }

    public function update(Request $request, Benefit $benefit)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'year' => 'required|integer',
            'total_vacation_days' => 'required|integer',
        ]);

        $benefit->update($request->all());

        return redirect()->route('benefits.index')->with('success', 'Benefit updated successfully.');
    }

    public function destroy(Benefit $benefit)
    {
        $benefit->delete();

        return redirect()->route('benefits.index')->with('success', 'Benefit deleted successfully.');
    }
}

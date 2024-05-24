<?php

namespace App\Http\Controllers;

use App\Models\VacationDay;
use App\Models\Employee;
use Illuminate\Http\Request;

class VacationDayController extends Controller
{
    public function index()
    {
        $vacationDays = VacationDay::with('employee')->get();
        $employees = Employee::all();
        return view('dashboard.vacation_day.index', compact('vacationDays','employees'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('vacation_days.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'year' => 'required|integer',
            'total_vacation_days' => 'required|integer',
        ]);

        VacationDay::create($request->all());

        return redirect()->route('vacation_days.index')->with('success', 'Ngày nghỉ phép đã được thêm thành công.');
    }

    public function edit(VacationDay $vacationDay)
    {
        $employees = Employee::all();
        return view('vacation_days.edit', compact('vacationDay', 'employees'));
    }

    public function update(Request $request, VacationDay $vacationDay)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'year' => 'required|integer',
            'total_vacation_days' => 'required|integer',
        ]);

        $vacationDay->update($request->all());

        return redirect()->route('vacation_days.index')->with('success', 'Ngày nghỉ phép đã được cập nhật thành công.');
    }

    public function destroy(VacationDay $vacationDay)
    {
        $vacationDay->delete();
        return redirect()->route('vacation_days.index')->with('success', 'Ngày nghỉ phép đã được xóa thành công.');
    }
}

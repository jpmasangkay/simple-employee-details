<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Employee;
use App\Http\Requests\StoreSalaryRequest;
use App\Http\Requests\UpdateSalaryRequest;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salary = Salary::all();
        return view('employees.salary', compact('salary'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.salary');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'month' => 'required|string|max:255'
        ]);
        
        Salary::create($validated);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Salary $salary)
    {
        return view('salary.show', compact('salary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salary $salary)
    {
        return view('employees.editSalary', compact('salary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salary $salary)
    {
        $validated = $request->validate([
            'amount' => 'required|string|max:255',
            'month' => 'required|string|max:255'
        ]);
        
        $salary->update($validated);
        return redirect()->route('employees.show', $salary->employee_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salary $salary)
    {
        $salary->delete();
        return redirect()->back();
    }
}
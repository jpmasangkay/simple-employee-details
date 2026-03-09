@extends('layouts.app')
@section('content')
    <a href="{{ route('employees.index') }}" class="btn btn-ghost mb-3" id="btn-back">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
        Back to list
    </a>

    <!-- Employee Info -->
    <div class="section-block" style="padding:1rem 1.25rem;">
        <h2 class="section-heading" style="margin-bottom:0.5rem;">
            <span class="dot" style="background: linear-gradient(135deg,#38bdf8,#0ea5e9);"></span>
            Employee Profile
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            <div class="info-pair">
                <div class="info-pair-label">Name</div>
                <div class="info-pair-value">{{ $employee->name }}</div>
            </div>
            <div class="info-pair">
                <div class="info-pair-label">Email</div>
                <div class="info-pair-value">{{ $employee->email }}</div>
            </div>
            <div class="info-pair">
                <div class="info-pair-label">Position</div>
                <div class="info-pair-value"><span class="badge badge-teal">{{ $employee->position }}</span></div>
            </div>
            <div class="info-pair">
                <div class="info-pair-label">Phone</div>
                <div class="info-pair-value">{{ $employee->phone_number }}</div>
            </div>
        </div>
    </div>

    <!-- Add Salary -->
    <div class="section-block" style="padding:1rem 1.25rem;">
        <h2 class="section-heading" style="margin-bottom:0.5rem;">
            <span class="dot" style="background: linear-gradient(135deg,#34d399,#059669);"></span>
            Add Salary
        </h2>
        <form method="POST" action="{{ route('salary.store', $employee) }}" id="add-salary-form">
            @csrf
            <div class="flex gap-3 items-end flex-wrap">
                <div class="flex-1 min-w-[140px]">
                    <label class="form-label">Month</label>
                    <input type="text" name="month" class="form-input" placeholder="March 2026" required id="input-month" style="padding:0.45rem 0.7rem; font-size:0.8rem;">
                </div>
                <div class="flex-1 min-w-[140px]">
                    <label class="form-label">Amount</label>
                    <input type="text" name="amount" class="form-input" placeholder="50000" required id="input-amount" style="padding:0.45rem 0.7rem; font-size:0.8rem;">
                </div>
                <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                <button type="submit" class="btn btn-teal" style="margin-bottom:1px;" id="btn-add-salary">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                    Add
                </button>
            </div>
        </form>
    </div>

    <!-- Salary Table -->
    <div class="section-block p-0! overflow-hidden">
        <table class="clean-table" id="salary-table">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Amount</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($salary as $salaries)
                    <tr>
                        <td style="font-weight:600; color:#1e1b4b;">{{ $salaries->month }}</td>
                        <td><span class="salary-amt">₱ {{ number_format((float) $salaries->amount, 2) }}</span></td>
                        <td>
                            <div class="flex gap-1.5 justify-center">
                                <a href="{{ route('salary.edit', $salaries) }}" class="btn btn-primary" style="padding:0.25rem 0.6rem; font-size:0.68rem;" id="btn-edit-salary-{{ $salaries->id }}">Edit</a>
                                <form action="{{ route('salary.destroy', $salaries) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-coral" style="padding:0.25rem 0.6rem; font-size:0.68rem;" id="btn-delete-salary-{{ $salaries->id }}"
                                        onclick="return confirm('Delete this salary record?')">Del</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center" style="padding:1.25rem; color:#a1a1aa; font-size:0.8rem;">No salary records yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
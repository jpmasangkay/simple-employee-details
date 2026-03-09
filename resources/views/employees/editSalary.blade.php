@extends('layouts.app')
@section('content')
    <a href="{{ route('employees.show', $salary->employee_id) }}" class="btn btn-ghost mb-3" id="btn-back">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
        Back
    </a>
    <div class="section-block">
        <h2 class="section-heading">
            <span class="dot" style="background: linear-gradient(135deg,#8b5cf6,#a78bfa);"></span>
            Edit Salary
        </h2>
        <form method="POST" action="{{ route('salary.update', $salary) }}" id="edit-salary-form">
            @csrf @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-3">
                <div>
                    <label class="form-label">Month</label>
                    <input type="text" name="month" value="{{ $salary->month }}" class="form-input" required id="input-month">
                </div>
                <div>
                    <label class="form-label">Amount</label>
                    <input type="text" name="amount" value="{{ $salary->amount }}" class="form-input" required id="input-amount">
                </div>
            </div>
            <hr class="divider">
            <div class="flex items-center gap-3">
                <button type="submit" class="btn btn-primary" id="btn-update-salary">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182"/></svg>
                    Update
                </button>
                <a href="{{ route('employees.show', $salary->employee_id) }}" class="btn btn-ghost" id="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
@endsection
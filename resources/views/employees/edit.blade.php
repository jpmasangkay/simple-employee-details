@extends('layouts.app')
@section('content')
    <a href="{{ route('employees.index') }}" class="btn btn-ghost mb-3" id="btn-back">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
        Back
    </a>
    <div class="section-block">
        <h2 class="section-heading">
            <span class="dot" style="background: linear-gradient(135deg,#8b5cf6,#a78bfa);"></span>
            Edit Employee
        </h2>
        <form method="POST" action="{{ route('employees.update', $employee) }}" id="edit-employee-form">
            @csrf @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-3">
                <div>
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-input" required id="input-name">
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $employee->email }}" class="form-input" required id="input-email">
                </div>
                <div>
                    <label class="form-label">Position</label>
                    <input type="text" name="position" value="{{ $employee->position }}" class="form-input" required id="input-position">
                </div>
                <div>
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="phone_number" value="{{ $employee->phone_number }}" class="form-input" required id="input-phone">
                </div>
            </div>
            <hr class="divider">
            <div class="flex items-center gap-3">
                <button type="submit" class="btn btn-primary" id="btn-update">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182"/></svg>
                    Update
                </button>
                <a href="{{ route('employees.index') }}" class="btn btn-ghost" id="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
@endsection
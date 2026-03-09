@extends('layouts.app')
@section('content')
    <a href="{{ route('employees.index') }}" class="btn btn-ghost mb-3" id="btn-back">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
        Back
    </a>
    <div class="section-block">
        <h2 class="section-heading">
            <span class="dot" style="background: linear-gradient(135deg,#2dd4bf,#14b8a6);"></span>
            Add New Employee
        </h2>
        <form method="POST" action="{{ route('employees.store') }}" id="create-employee-form">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-3">
                <div>
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-input" placeholder="John Doe" required id="input-name">
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-input" placeholder="john@company.com" required id="input-email">
                </div>
                <div>
                    <label class="form-label">Position</label>
                    <input type="text" name="position" class="form-input" placeholder="Software Engineer" required id="input-position">
                </div>
                <div>
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="phone_number" class="form-input" placeholder="+63 912 345 6789" required id="input-phone">
                </div>
            </div>
            <hr class="divider">
            <div class="flex items-center gap-3">
                <button type="submit" class="btn btn-teal" id="btn-save">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>
                    Save Employee
                </button>
                <a href="{{ route('employees.index') }}" class="btn btn-ghost" id="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
@endsection
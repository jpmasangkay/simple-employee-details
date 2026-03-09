@extends('layouts.app')
@section('content')
    <div class="flex items-center justify-between mb-3">
        <h2 class="section-heading mb-0!">
            <span class="dot" style="background: linear-gradient(135deg,#8b5cf6,#a78bfa);"></span>
            Team Directory
        </h2>
        <a href="{{ route('employees.create') }}" class="btn btn-primary" id="btn-new-employee">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
            New Employee
        </a>
    </div>

    <div class="section-block p-0! overflow-hidden">
        <table class="clean-table" id="employee-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Phone</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($employees as $employee)
                    <tr>
                        <td><span class="badge badge-violet">{{ $employee->id }}</span></td>
                        <td style="font-weight:600; color:#1e1b4b;">{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td><span class="badge badge-teal">{{ $employee->position }}</span></td>
                        <td>{{ $employee->phone_number }}</td>
                        <td>
                            <div class="flex justify-center" style="gap:0.375rem;">
                                <a href="{{ route('employees.show', $employee) }}" class="btn btn-sky" style="padding:0.3rem 0.65rem; font-size:0.7rem;" id="btn-view-{{ $employee->id }}">View</a>
                                <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary" style="padding:0.3rem 0.65rem; font-size:0.7rem;" id="btn-edit-{{ $employee->id }}">Edit</a>
                                <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-coral" style="padding:0.3rem 0.65rem; font-size:0.7rem;" id="btn-delete-{{ $employee->id }}"
                                        onclick="return confirm('Delete this employee?')">Del</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center" style="padding:2rem; color:#a1a1aa;">
                            No employees yet — click <strong>New Employee</strong> to add one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
@extends('master.front.master')
@section('title')
    Admin Panel
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-center text-secondary">Select Action</h3>
                        </div>
                        <div class="container-fluid">
                            <div class="card-body">
                                <table class="table table-hover">
                                    <tr><td><a href="{{route('employee.add')}}" class="nav-link text-secondary"> # Add New Employee</a></td></tr>
                                    <tr><td><a href="{{route('employee.list')}}" class="nav-link text-secondary"> # All Employee List</a></td></tr>
                                    <tr><td><a href="" class="nav-link text-secondary"> # Update Employee Information</a></td></tr>
                                    <tr><td><a href="" class="nav-link text-secondary"> # Employee Salary</a></td></tr>
                                    <tr><td><a href="" class="nav-link text-secondary"> # Dispatch an employee</a></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

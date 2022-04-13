@extends('master.front.master')
@section('title')
    All Employee
@endsection
@section('body')
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-center text-secondary">All Employee</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Employee Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Birth Cer</th>
                                    <th>NID</th>
                                    <th>Designation</th>
                                    <th>Salary</th>
                                    <th>Degree</th>
                                    <th>Result</th>
                                    <th>Passing Year</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <p class="text-center text-success">{{Session::get('message')}}</p>
                                @foreach($employees as $employee)
                                <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$employee->first_name}}</td>
                                   <td>{{$employee->last_name}}</td>
                                   <td>{{$employee->e_bc}}</td>
                                   <td>{{$employee->e_nid}}</td>
                                    <td>{{$employee->e_designation}}</td>
                                   <td>{{$employee->e_salary}}</td>
                                   <td>{{$employee->edu_name}}</td>
                                   <td>{{$employee->edu_result}}</td>
                                   <td>{{$employee->edu_year}}</td>
                                   <td>{{$employee->address}}</td>
                                    <td><img src="{{asset($employee->image)}}" alt="" class="img-fluid" height="50" width="80"></td>
                                   <td>
                                       <a href="{{route('employee.edit', ['id' => $employee->id])}}" class="btn btn-success btn-sm">E</a>
                                       <a href="{{route('employee.delete', ['id' => $employee->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Agree To Delete Employee?');">D</a>
                                   </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

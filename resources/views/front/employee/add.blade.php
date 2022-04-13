@extends('master.front.master')
@section('title')
    Add New Employee
@endsection

@section('body')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-center text-secondary">Employee Registration Form</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <form action="{{route('employee.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="address" class="form-label">Identity</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="e_bc" placeholder="Birth Certificate">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="e_nid" placeholder="NID">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Include</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="e_designation" placeholder="Designation">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="e_salary" placeholder="Salary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Education</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="edu_name" class="form-control" placeholder="Degree">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="edu_result" class="form-control" placeholder="Result">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="edu_year" class="form-control" placeholder="Passing Year">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="address" class="form-label">Address</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="address" class="form-control" id="address" placeholder="Permanent Address"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Image</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="file" class="form-control" name="e_image" placeholder="Passport Size Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Create New Employee">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

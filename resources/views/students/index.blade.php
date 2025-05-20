@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Student Information') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
                        <div class="row">               
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h3 class="card-title">Add student</h3>
                                    </div>
                                <div class="card-body">
                                    
                                <form action="{{ route ('students.store') }}" method="POST"> @csrf
                                    <div class="form-group mb-3">
                                        <label for="student_id">Student Number</label>
                                        <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Enter student number" required>
                                    </div>                                <div class="row mb-3">                                    <div class="col-md-4">                                        <div class="form-group">                                            <label for="firstname">First Name</label>                                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First name" required>                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label for="middlename">Middle Name</label>                                            <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter Middle name">                                        </div>                                    </div>                                    <div class="col-md-4">                                        <div class="form-group">                                            <label for="lastname">Last Name</label>                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last name" required>                                        </div>                                    </div>                                </div>                                <div class="form-group mb-3">                                    <label for="address">Address</label>                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>                                </div>                                <div class="form-group mb-3">                                    <label for="date_of_birth">Birthday</label>                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>                                </div>                                <div class="form-group">                                    <button type="submit" class="btn btn-primary w-100">Submit</button>                                </div>                            </form>                        </div>                    </div>                </div>                <!-- Student List -->                <div class="col-12 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Birthday</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->student_id }}</td>
                                        <td>{{ $student->firstname }}</td>
                                        <td>{{ $student->lastname }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->date_of_birth }}</td>
                                        <td>
                                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

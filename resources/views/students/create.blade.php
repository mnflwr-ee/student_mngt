@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Student Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">

                  @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif

                <div class="col-6 m-auto">
                  <div class="card card-secondary">
                   <div class="card-header">
                     <h3 class="card-title">Add new student</h3>
                   </div>

                     <form action="{{ route('students.store') }}" method="POST">
                      @csrf
                       <div class="row card-body col-12">
                         <div class="form-group col-12">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control g-2" id="first_name" name="first_name" placeholder="Enter First Name" required>
                         </div>
                          @error('first_name') <span class="text-danger">{{$message}}</span> @enderror
                  
                        <div class="form-group col-12">
                          <label for="last_name">Last Name</label>
                          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
                        </div>
                          @error('last_name') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                          <label for="middle_name">Middle Name</label>
                          <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
                        </div>
                          @error('middle_name') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                        </div>
                          @error('address') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-6">
                          <label for="zip_code">Zip Code</label>
                          <input type="number" class="form-control" id="zip_code" name="zip_code" placeholder="Enter Zip Code" required>
                        </div>
                        @error('zip_code') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-6">
                          <label for="age">Age</label>
                          <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" required>
                        </div>
                        @error('age') <span class="text-danger">{{$message}}</span> @enderror
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success col-12">Submit</button>
                </div>
              </form>

                </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

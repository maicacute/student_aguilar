@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ __('Student Management') }}</h1>
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 m-auto">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Add new student</h3>
                    </div>

                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="row card-body col-12">
                            <div class="form-group col-12">
                                <label for="stud_no">Student No.</label>
                                <input type="number" class="form-control g-2" id="stud_no" name="stud_no"
                                    placeholder="Enter your Student No." required>
                                @error('stud_no') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group col-12">
                                <label for="stud_fname">First Name</label>
                                <input type="text" class="form-control g-2" id="stud_fname" name="stud_fname"
                                    placeholder="Enter your Firstname" required>
                                @error('stud_fname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group col-12">
                                <label for="stud_mname">Middle Name</label>
                                <input type="text" class="form-control" id="stud_mname" name="stud_mname"
                                    placeholder="Enter your Middle Name">
                                @error('stud_mname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group col-12">
                                <label for="stud_lname">Last Name</label>
                                <input type="text" class="form-control" id="stud_lname" name="stud_lname"
                                    placeholder="Enter your Last Name" required>
                                @error('stud_lname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group col-6">
                                <label for="stud_bday">Birthday</label>
                                <input type="date" class="form-control" id="stud_bday" name="stud_bday" required>
                                @error('stud_bday') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group col-6">
                                <label for="zip">Zip</label>
                                <input type="number" class="form-control" id="zip" name="zip" required>
                                @error('zip') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success col-12">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

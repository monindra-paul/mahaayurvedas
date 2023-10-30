@extends('admin.layout.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Appoinments</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url('admin/appoinments') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="" method="post" id="appoinmentsForm" name="appoinmentsForm">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="name" >Name</label>
                                    <input type="text" readonly name="name" id="name" class="form-control" placeholder="Name" value="{{ $appoinments->name }}">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" readonly name="email" id="email" value="{{ $appoinments->email }}" class="form-control"
                                        placeholder="Email">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="mobile">Mobile No.</label>
                                    <input type="text" readonly name="mobile" id="mobile" value="{{ $appoinments->mobile }}" class="form-control"
                                        placeholder="Mobile No.">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="date">Date & Time (Time is in 24 Hours Format)</label>
                                    <input type="datetime-local" readonly name="date" id="date" value="{{ $appoinments->date }}" class="form-control"
                                        placeholder="Date">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="age">Age</label>
                                    <input type="text" readonly name="age" id="age" value="{{ $appoinments->age }}" class="form-control"
                                        placeholder="Age">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="doctor">Doctor name</label>
                                    <input type="text" readonly name="doctor" id="doctor" value="{{ $appoinments->doctor }}" class="form-control"
                                        placeholder="Doctor">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" readonly name="address" id="address" value="{{ $appoinments->address }}" class="form-control"
                                        placeholder="Address">
                                    <p></p>
                                </div>
                            </div>
                           
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="message">Message</label>
                                    <textarea type="text" class="form-control" value="" rows="8" disabled>{{ $appoinments->message }}</textarea>
                                       
                                    <p></p>
                                </div>
                            </div>
                           
                           
                           
                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    {{-- <button class="btn btn-primary" type="submit">Update</button> --}}
                    <a href="{{ url('admin/appoinments') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection


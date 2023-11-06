@extends('admin.layout.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Doctors</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url('admin/doctors') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="" method="post" id="doctorForm" name="doctorForm">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $doctors->name }}">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="designation">Designation</label>
                                    <input type="text" name="designation" id="designation" class="form-control" placeholder="Name" value="{{ $doctors->designation }}">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="slug">Slug</label>
                                    <input type="text" readonly name="slug" id="slug" value="{{ $doctors->slug }}" class="form-control"
                                        placeholder="Slug">
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="aboutdoctor">About Doctor</label>
                                    <textarea name="about" id="about" cols="30" rows="10"
                                        class="summernote" placeholder="About Doctor">{{ $doctors->about }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <input type="hidden" id="image_id" name="image_id" value="">
                                    <label for="image">Image</label>
                                    <div id="image" class="dropzone dz-clickable">
                                        <div class="dz-message needsclick">
                                            <br>Drop files here or click to upload.<br><br>
                                        </div>
                                    </div>
                                </div>
                                @if(!empty($doctors->image))
                                <div>
                                    <img width="250px" src="{{ asset('uploads/doctor/thumb/'. $doctors->image) }}" alt="" srcset="">
                                </div>
                                @endif
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option {{ ($doctors->status == 1) ? 'selected' : ''}} value="1">Active</option>
                                        <option {{ ($doctors->status == 0) ? 'selected' : ''}} value="0">Block</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="status">Show on Home</label>
                                    <select name="showHome" id="showHome" class="form-control">
                                        <option {{ ($doctors->showHome == 'Yes') ? 'selected' : ''}} value="Yes">Yes</option>
                                        <option {{ ($doctors->showHome == 'No') ? 'selected' : ''}} value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ url('admin/doctors') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section ('customJs')
<script>
    $("#doctorForm").submit(function (event) {

        event.preventDefault();
        var element = $(this);
        $("button[type=submit]").prop('disabled', true);
        $.ajax({
            url: '{{ route("doctors.update",$doctors->id) }}',
            type: 'put',
            data: element.serializeArray(),
            dataType: 'json',
            success: function (response) {

                if (response["status"] == true) {

                    $("button[type=submit]").prop('disabled', false);
                    window.location.href = "{{route('doctors.index')}}";


                    $("#name").removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html(errors['name']);


                    $("#designation").removeClass('is-invalid')
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html(errors['designation']);

                    $("#slug").addClass('is-invalid')
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors['slug']);

                }
                else {
                    if(response['notFound'] == true){
                        window.location.href = "{{route('doctors.index')}}";
                    }

                    var errors = response['errors'];

                    if (errors['name']) {
                        $("#name").addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['name']);
                    }
                    else {
                        $("#name").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback')
                            .html(errors['name']);

                    }

                    if (errors['designation']) {
                        $("#designation").addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['designation']);
                    } else {
                        $("#designation").addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['designation']);
                    }

                    if (errors['slug']) {
                        $("#slug").addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['slug']);
                    } else {
                        $("#slug").addClass('is-invalid')
                            .siblings('p')
                            .addClass('invalid-feedback')
                            .html(errors['slug']);
                    }
                }


            }, error: function (jqXHR, exception) {
                console.log("Something went wrong");
            }
        })
    });

    
    $("#name").change(function () {
        element = $(this);
        $("button[type=submit]").prop('disabled', true);
        $.ajax({
            url: '{{ route("getSlug") }}',
            type: 'get',
            data: { title: element.val() },
            dataType: 'json',
            success: function (response) {
                $("button[type=submit]").prop('disabled', false);
                if (response["status"] == true) {
                    $("#slug").val(response["slug"]);
                }
            }
        });
    });



    Dropzone.autoDiscover = false;
    const dropzone = $("#image").dropzone({
        init: function () {
            this.on('addedfile', function (file) {
                if (this.files.length > 1) {
                    this.removeFile(this.files[0]);
                }
            });
        },
        url: "{{ route('temp-images.create') }}",
        maxFiles: 1,
        paramName: 'image',
        addRemoveLinks: true,
        acceptedFiles: "image/jpeg,image/png,image/gif",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, success: function (file, response) {
            $("#image_id").val(response.image_id);
            //console.log(response)
        }
    });

</script>
@endsection

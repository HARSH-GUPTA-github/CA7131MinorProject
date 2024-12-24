
@extends('layouts.admin')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                            <h2 style="font-size: 2em;">EDIT SLIDER</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{url('admin/slider/edit/'.$slider->id)}}" enctype="multipart/form-data">
                            @csrf 

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" value="{{ucwords(strtolower($slider->name))}}" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div style="color: gray;">
                                        <label class="form-label">Image</label>
                                    </div>
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="image" <?php if($slider->image==null){ echo "required";} ?>>
                                    </div>
                                    <div>
                                        <img src="{{url('public/slider_img',$slider->image)}}" style="background:black;" width="20%">
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>


 @endsection('content')

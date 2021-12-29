@extends('layouts.admin')
@section('content') 
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row"> 
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Edit Doctor </h5> 
                        </div>
                        
                        <div class="ibox-content">
                            <form method="POST" action="{{ route('doctor.update', ['doctor' => $edit->id]) }}" id="save-frm"> 
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">MR <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-control select2" name="mr" id="mr">
                                            <option value="">Select MR</option>
                                            <option value="{{ $edit->mr->fldi_id }}" selected>{{ $edit->mr->fldv_name }}</option>
                                        </select> 
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Name <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Name" name="name" id="name" class="form-control" value="{{ $edit->name }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Email Address</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Email Address" name="email" id="email" class="form-control" value="{{ $edit->email }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Contact <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Contact Number" name="contact" id="contact" class="form-control" maxlength="10" value="{{ $edit->contact }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Speciality</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Speciality" name="speciality" id="speciality" class="form-control"  value="{{ $edit->speciality }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">SVL No.</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter SVL No." name="svl" id="svl" class="form-control" value="{{ $edit->svl_no }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Potential for Product</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Potencial for Product" name="potential_for_product" id="potential_for_product" class="form-control" value="{{ $edit->potential_for_product }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Clinic Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Clinic Name" name="clinic_name" id="clinic_name" class="form-control"  value="{{ $edit->clinic_name }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Place of Practice</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Place of Practice" name="place" id="place" class="form-control" value="{{ $edit->place }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">City</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter City" name="city" id="city" class="form-control" value="{{ $edit->city }}">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Username <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Username" name="username" id="username" class="form-control" value="{{ $edit->username }}">  
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Password <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Password" name="password" id="password" class="form-control" value="{{ $edit->plain_password }}">  
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                        <a href="{{ route('doctor.index') }}"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>   
 @endsection
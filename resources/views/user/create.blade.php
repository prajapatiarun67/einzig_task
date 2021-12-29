@extends('layouts.app')
@section('content') 
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row"> 
                <div class="col-lg-6 offset-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Add User </h5> 
                        </div>
                        <div class="ibox-content">
                            <form method="POST" action="{{ route('user.store') }}" id="save-frm"> 
                                @csrf  
 
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Name <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Name" name="name" id="name" class="form-control">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Email Address</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Email Address" name="email" id="email" class="form-control">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Subject <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Enter Subject" name="subject" id="subject" class="form-control">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Message <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <textarea placeholder="Enter Message" name="message" id="message" class="form-control"></textarea>
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Date</label>
                                    <div class="col-lg-10">
                                        <input type="date" placeholder="Enter Date" name="date" id="date" class="form-control" value="{{date('Y-m-d')}}">  
                                    </div>
                                </div>  

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Time</label>
                                    <div class="col-lg-4">
                                        <select name="hour" id="hour" class="form-control">
                                            <option value="">Select Hour</option>
                                            @for($i = 1; $i <= 12; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </div>
                                    <div class="col-lg-4">
                                     <select name="minute" id="minute" class="form-control">
                                            <option value="">Select Minute</option>
                                            @for($i = 1; $i <= 60; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </div>
                                    <div class="col-lg-2">
                                     <select name="am_pm" id="am_pm" class="form-control">
                                            <option value="">Select AM/PM</option> 
                                            <option value="AM">AM</option> 
                                            <option value="PM">PM</option> 
                                        </select>  
                                    </div>
                                </div>  

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Image <span class="text-danger h6">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="file" placeholder="Choose Image" name="image" id="image" class="form-control">  
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                        <a href="{{ route('user.index') }}"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>   
 @endsection
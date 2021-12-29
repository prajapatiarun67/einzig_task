@extends('layouts.app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-5 offset-1">
            <h2 class="ecme-ttl">User</h2>  
            <div class="total-rec-text">Total Record(s) <span class='total'>{!! $collection->total() !!}</span></div>
        </div>
        <div class="col-lg-3 text-right">
        <a href="{{ $base_url }}/create" class="mr-1">
            <button title="Add" class="btn btn-success dim btn-md" type="button">Add User</button>
        </a>
     </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="ibox"> 
                    <div class="ibox-content"> 
                        <div class="table-responsive"> 
                            
                            <form action="" method="post" enctype="multipart/form-data" id="frmListing" accept-charset="utf-8">
                            @csrf
                                <table class="table table-striped">
                                    <thead>
                                        <tr> 
                                            <th>Sr. No </th> 
                                            <th>Name</th>     
                                            <th>Email Address</th>     
                                            <th>Subject</th>     
                                            <th>Message</th>     
                                            <th>Date Time</th>        
                                            <th>Image</th>        
                                            <th>Date</th> 
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @include('user.records')
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
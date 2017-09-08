@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-12">
                        <center>
                                
                               
                               <a class="btn btn-info" href="{{ url('index') }}">หน้าหลัก</a>

                        </center>
                    </div>      
                </div>
            </div>
         </div> 
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> User Dashboard</div>
                <a href= "{{ route('/change) }}" >Reset Password</a> 
                <div class="card-body">

                    You are User.

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
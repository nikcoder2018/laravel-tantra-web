@extends('layouts.app')

@section('content')
<div class="container main-content no-padding">
    <div class="page_header">
        <div class="col-lg-6">
            <h1>Registration</h1>
        </div>
        <div class="col-lg-6 breadcrumbs">
            <strong><a href="./index.html">Home</a> / Registration</strong>
        </div>
    </div>
    <div class="reg-form container">
        <div class="col-md-7 reg-form-inner">
        <center><h2 style="color:red">ERROR #1001: Invalid Data</h2><br>
            <p>Email might be already verified, please recheck your account!</p>
        </center>
        </div>
    </div>
</div>
@endsection

@extends('layouts.index')

@section('title')
    All Dashboard
@endsection

@section('content')
<div>
    <div class="container-fluid">
        <div class="row text-center pt-5">
            <div class="col-lg-6">
                <h6>Total Amount</h6>
                <h1>&#8358 <span>0.00</span></h1>
                <h5>Total Transaction : <span>0</span></h5>
            </div>
            <div class="col-lg-6">
                <h6>Pending Payment</h6>
                <h1>&#8358 <span>0.00</span></h1>
                <h5>Total Transaction : <span>0</span></h5>
            </div>
        </div>
        <div class="row pt-5 cardd">
            <div class="col-lg-4 shadow">123</div>
            <div class="col-lg-4 shadow">123</div>
            <div class="col-lg-4 shadow">123</div>
        </div>
    </div>
</div>
@endsection

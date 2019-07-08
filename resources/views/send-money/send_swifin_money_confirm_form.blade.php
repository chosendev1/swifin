@extends('layouts.confirm-body')
@section('content')
@include('layouts.header_title',['header_title' => 'Send Swifin Money']) 
{{-- @include('layouts.username',['username' => $username]) 
@include('layouts.balance',['balance' => $user_balance])  --}}
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 justify-content-center">
      <div class="card">
        <div class="card-body">
            @include('layouts.success')   
            @include('layouts.errors')
            <div class="example-wrap">
            <h4 class="example-title">Send Money to Swifin User</h4>
            <div class="example">
                <div class="row justify-content-center">
                    <span>
                    <p class="card-text">
                    Name: {{ $name }}
                    </p>
                    <p class="card-text">
                    Phone Number: {{ $phone_number }}
                    </p>
                    <p class="card-text">
                    Amount: {{ $amount }}
                    </p>
                    <p class="card-text">
                    Description: {{ $description}}
                    </p>
                  </span>
                </div>
                <hr>
            <form class="form-horizontal" method="POST" action="/send-money">
                @csrf
                  <div class="row">
                  <div class="form-group col-md-6 offset-md-3">
                    <label class="form-control-label">Enter pin to confirm: </label>
                    <input type="text" class="form-control" name="pin" placeholder="Pin">
                  </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6 offset-md-3">
                    <button class="btn btn-primary" type="submit">Confirm</button>
                  </div>
              </form>
  </div>
  </div>
 </div>
 </div>
 </div>
@endsection

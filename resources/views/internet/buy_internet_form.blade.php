@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @include('layouts.success')   
                  @include('layouts.errors')
                  <div class="example-wrap">
                  <h4 class="example-title">Buy Internet</h4>
                  <p>
                    Fill form below to buy <code>Internet</code> using <code>Swifin Money</code>
                  </p>
                  <div class="example">
                    <form class="form-horizontal" method="POST" action="/buy/internet">
                      {{ csrf_field() }}
                       <input type="hidden" name="sender_id" value="1237898765432345">
                        <input type="hidden" name="sender_name" value="sender">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Phone No: </label>
                        <div class="col-md-9">
                          <input type="integer" class="form-control" name="receiver_phone_number" value="{{ old('phone_number') }}"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Amount: </label>
                        <div class="col-md-9">
                          <input type="integer" class="form-control" name="amount" value="{{ old('amount') }}" placeholder="amount"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Pin:</label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" name="pin" placeholder="Your swifin pin to confirm"
                            value="{{ old('pin') }}" autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Submit </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

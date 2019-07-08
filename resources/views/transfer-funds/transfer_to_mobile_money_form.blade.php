@extends('layouts.master')

@section('content')
<div class="container">
  <!-- <h2>Transfer Funds</h2> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                  @include('layouts.success')   
                  @include('layouts.errors')
                  <div class="example-wrap">
                  <h4 class="example-title">Swifin to Mobile Money</h4>
                  <p>
                    Fill form below to transfer Swifin money to your <code>Mobile Money Account</code> (MTN,Airtel,Africell and M-Sente)
                  </p>
                  <div class="example">
                    <form class="form-horizontal" method="POST" action="/swifin-to-mobile-money-transfer">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-4 form-control-label">Mobile Money Phone No: </label>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Your Mobile Money Phone No" autocomplete="off"
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
                        <label class="col-md-3 form-control-label">Description: </label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="description"placeholder="Reason for sending money">{{ old('description') }}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Pin: </label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" name="pin" value="{{ old('pin') }}" placeholder="Your swifin pin to confirm"
                            autocomplete="off" />
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

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
                  <h4 class="example-title">Pay Yaka</h4>
                  <p>
                    Fill form below to pay Yaka bills using <code>Swifin Money</code>
                  </p>
                  <div class="example">
                    <form class="form-horizontal" method="POST" action="/paybills/umeme/yaka">
                      {{ csrf_field() }}
                      <input type="hidden" name="umeme_bill_type" value="yaka">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Yaka Account No: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="customer_account" value="{{ old('customer_account') }}" placeholder="Yaka Account No." autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Phone No: </label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Customer Phone Number"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Amount: </label>
                        <div class="col-md-9">
                          <input type="number" class="form-control" name="amount" value="{{ old('amount') }}" placeholder="amount"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Description: </label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="description" placeholder="Reason for Transfer">
                          </textarea>
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

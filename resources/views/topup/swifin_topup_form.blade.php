@extends('layouts.master')

@section('content')
<div class="container">
  <!-- <h2>TopUp/Deposit</h2> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @include('layouts.success')   
                    @include('layouts.errors')
                  <div class="example-wrap">
                  <h4 class="example-title">Deposit Swifin Money to Swifin Account</h4>
                  <p>
                    Use form below to deposit money from your wallet to any <code>Swifin User</code>.
                  </p>
                  <div class="example">
                    <form class="form-horizontal" method="POST" action="/topup-swifin">
                      @csrf
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Receiver Phone No./Swifin ID: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="receiver_id" value="{{ old('receiver_id') }}"placeholder="Receiver Phone No./Swifin ID"
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
                          <textarea class="form-control" name="description"placeholder="Reason for sending money">
                          {{ old('description') }}
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Pin: </label>
                        <div class="col-md-9">
                          <input type="integer" class="form-control" name="pin" value="{{ old('pin') }}" placeholder="Your swifin pin to confirm"
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

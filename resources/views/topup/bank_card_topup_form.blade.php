@extends('layouts.master')

@section('content')
<div class="container">
  <!-- <h2>TopUp/Deposit</h2> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="example-wrap">
                  <h4 class="example-title">Send Money to Swifin User</h4>
                  <p>
                    Fill form below to send money to any <code>Swifin User</code>.
                  </p>
                  <div class="example">
                    <form class="form-horizontal" method="POST" action="/customers">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Receiver Phone No./Swifin ID: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="name" placeholder="Receiver Phone No./Swifin ID" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Amount: </label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" name="email" placeholder="amount"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Description: </label>
                        <div class="col-md-9">
                          <textarea class="form-control" placeholder="Reason for sending money"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Pin: </label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" name="email" placeholder="Your swifin pin to confirm"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          <button type="button" class="btn btn-primary">Submit </button>
                          <button type="reset" class="btn btn-default btn-outline">Reset</button>
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

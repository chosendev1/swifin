@extends('layouts.master-body')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @if (session('account_balance'))
                        <div class="alert alert-success" role="alert">
                            {{ session('account_balance') }}
                        </div>
                    @endif

                    <div class="example-wrap">
                  <h4 class="example-title">Send Money</h4>
                  <p>
                    Use <code>.form-horizontal</code> class to set horizontal form.
                  </p>
                  <div class="example">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Receiver Phone Number: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="name" placeholder="Full Name" autocomplete="off"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Your Gender: </label>
                        <div class="col-md-9">
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputHorizontalMale" name="inputRadiosMale2" />
                            <label for="inputHorizontalMale">Male</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input type="radio" id="inputHorizontalFemale" name="inputRadiosMale2" checked
                            />
                            <label for="inputHorizontalFemale">Female</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Your Email: </label>
                        <div class="col-md-9">
                          <input type="email" class="form-control" name="email" placeholder="@email.com"
                            autocomplete="off" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Description: </label>
                        <div class="col-md-9">
                          <textarea class="form-control" placeholder="Briefly Describe Yourself"></textarea>
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
@endsection --}}

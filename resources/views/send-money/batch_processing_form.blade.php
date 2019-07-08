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
                  <h4 class="example-title">Send Money In Bulk</h4>
                  <p>
                    Fill The form below to send <code>Swifin Money</code> In bulk 
                  </p>
                  <div class="example">
                    <form class="form-horizontal" method="POST" action="/send-money/bulk" enctype="multipart/form-data"> 
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Upload File: </label>
                        <div class="col-md-6">
                            <input type="file" id="input-file-events" name ="send_money_file" class="dropify-event"
                            />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Pin:</label>
                        <div class="col-md-6">
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

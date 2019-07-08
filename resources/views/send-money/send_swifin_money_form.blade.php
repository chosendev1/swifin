@extends('layouts.master-body')
@section('content')
@include('layouts.header_title',['header_title' => 'Send Swifin Money']) 
{{-- @include('layouts.username',['username' => $username]) 
@include('layouts.balance',['balance' => $user_balance])  --}}
        <div class="col-md-8">
                  @include('layouts.success')   
                  @include('layouts.errors')
                  <h4 class="example-title">Send Money to Swifin User</h4>
                  {{-- <h4>User Balance: {{ $user_balance }}</h4> --}}
                  <p>
                    Fill form below to send money to any <code>Swifin User</code>.
                  </p>
                    <form class="form-horizontal" method="POST" action="/send-money/confirm">
                       @csrf
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label text-body">Receiver Phone No: </label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="phone_number" value="{{ old('phone_nember') }}" placeholder="eg. +256789765239"
                          /></span>
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
                      {{-- <div class="form-group row">
                        <label class="col-md-3 form-control-label">Pin: </label>
                        <div class="col-md-9">
                          <input type="password" class="form-control" name="pin" value="{{ old('pin') }}" placeholder="Your swifin pin to confirm"
                            autocomplete="off" />
                        </div>
                      </div> --}}
                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
                          <button class="btn btn-primary" 
                      type="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

     <!-- Modal -->
    {{-- <div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
      role="dialog" tabindex="-1">
      <div class="modal-dialog modal-simple">
        <form class="modal-content" method="POST" action="/send-money">
          @csrf
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="exampleFormModalLabel">Confirm Transaction</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-xl-6 form-group">
                <p>
                Name:
                <p>
                Phone Number:
                </p>
                Amount:
                </p>
                Description:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-4 form-group">
                <input type="text" class="form-control" name="pin" placeholder="Enter pin">
              </div>
            </div>
              <div class="col-md-12 float-right">
                <button class="btn btn-primary" data-dismiss="modal" type="button">Confirm</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div> --}}
@endsection

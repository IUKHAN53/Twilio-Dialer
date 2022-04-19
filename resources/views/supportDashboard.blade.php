@extends('layouts.master')

@section('title')
    Test Dashboard
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-5 order-md-2 mb-4">
        <div class="card">
          <h5 class="card-header">
              Answer a call
          </h5>
          <div class="card-body">
            <div class="form-group row">
              <label for="call-status" class="col-3 col-form-label">Status</label>
              <div class="col-9">
                <input id="call-status" class="form-control" type="text" placeholder="Connecting to Twilio..." readonly>
              </div>
            </div>
            <button class="btn btn-lg btn-success answer-button" disabled>Answer call</button>
            <button class="btn btn-lg btn-danger hangup-button" disabled onclick="hangUp()">Hang up</button>
          </div>
        </div>
      </div>

      <div class="col-md-7 order-md-1">
          <div class="card border-default">
            <h5 class="card-header">
              Call Custom number
            </h5>
            <div class="card-body">
              <div class="row">
                <div class="col">
                    <input id="custom_phone" class="form-control" type="text" placeholder="+923011234567">
                </div>
                <div class="col col-auto">
                  <button onclick="callCustom()" type="button" class="btn btn-primary btn-lg call-customer-button">
                    Custom call
                  </button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection('content')

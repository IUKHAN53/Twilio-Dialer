@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 order-md-2 mb-4">
                <div class="card">
                    <h5 class="card-header">
                      Call callisto test number now
                    </h5>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="call-status" class="col-2 col-form-label">Status</label>
                            <div class="col-10">
                                <input id="call-status" class="form-control" type="text" placeholder="Connecting to Twilio..." readonly>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary call-support-button" onclick="callSupport()">
                          Call test number
                        </button>
                        <button class="btn btn-lg btn-danger hangup-button" disabled onclick="hangUp()">Hang up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

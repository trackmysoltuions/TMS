@extends('layouts.app')

@section('styleCss')

.homeTop-button {
      text-align: center;
      font-size:100%;
      margin: 0px;
      padding:32px 22px 22px 22px;
      width: 100%;
      height: 200px;
      cursor:pointer;
      border-radius: 12px;
      border: 1px solid #007dc3;
  }

  .homeTop-button:hover {

      background-color: #ddeeff;

  }

.button-image {
    height: 72px;
    max-height:50%;
  }

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if($v == '1')

            <div style="text-align:center; color:#f60;">There was a problem connecting to the appointment system.  Please try again later or contact support.

                <br>

                Info: {!! $m ?? '' !!}

            </div>

        @endif

        <div class="col-md-8">
          @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
          @endif

          @if(Auth::check() && Auth::user()->hasRole('patient'))
            <div class="row">
              <div class="col-3">
                <div id="myvaccine-button" class="homeTop-button">
                  <img class="button-image" src="{{ asset('images/syringe.png') }}">
                  <br>
                  {{ __('My Vaccines') }}
                </div>
              </div>

              <div class="col-3">
                <div  title="This feature is currently unnavailable" disabled='disabled' class="alert-button homeTop-button">
                  <img class="button-image" src="{{ asset('images/alert-icon.png') }}" />
                  <br/>
                  {{ __('Alerts') }}
                </div>
              </div>

              <div class="col-3">
                <div  title="This feature is currently unnavailable" disabled='disabled' class="settings-button homeTop-button">
                  <img class="button-image" src="{{ asset('images/settings-icon.png') }}" />
                  <br/>
                  {{ __('Settings') }}
                </div>
              </div>

              <div class="col-3">
                <div class="help-button homeTop-button" onclick="$('.help-page-modal').show()">
                  <img class="button-image" src="{{ asset('images/help-icon.png') }}" />
                  <br/>
                  {{ __('Help') }}
                </div>
              </div>

            </div>
            <br/><br/><br/>
            <div class="row">

                @if($token == '0')

                    <div class="col-6">
                    <button id="scheduleVaccineAppointment" onclick="doPatientQuestionnaire();" class="btn btn-primary form-control">{{ __('Schedule a Vaccine Appointment') }}</button>
                    </div>
                    <div class="col-6">
                        <button id="addVaccine" disabled='disabled' class="btn btn-primary form-control" id="addVaccine">{{ __('Add a Vaccine') }}</button>
                    </div>

                @else

                    <div class="col-6">
                        <a target = "_blank" href="/vsee/return" class="btn btn-primary form-control">{{ __('Go to Appointments') }}</a>
                    </div>
                    <div class="col-6">
                        <button id="addVaccine" disabled='disabled' class="btn btn-primary form-control" id="addVaccine">{{ __('Add a Vaccine') }}</button>
                    </div>

                @endif

            </div>
          @endif

          @if(Auth::check() && Auth::user()->hasRole('provider'))
            <div class="row">
              <div class="col-3">
                <div class="patient-button homeTop-button">
                  <img class="button-image" src="{{ asset('images/magnifyingglass-icon.png') }}">
                  <br>
                  {{ __('Search For Patient') }}
                </div>
              </div>

              <div class="col-3">

                <div class="provider-button homeTop-button" title="This feature is currently unnavailable" disabled='disabled'>

                  <img class="button-image" src="{{ asset('images/friend-icon.png') }}" />
                  <br/>
                  {{ __('Scheduled Patients by Location') }}
                </div>
              </div>

              <div class="col-3">

                <div class="settings-button homeTop-button" title="This feature is currently unnavailable" disabled='disabled'>

                  <img class="button-image" src="{{ asset('images/settings-icon.png') }}" />
                  <br/>
                  {{ __('Settings') }}
                </div>
              </div>

              <div class="col-3">

                <div class="help-button homeTop-button" title="This feature is currently unnavailable" disabled='disabled'>

                  <img class="button-image" src="{{ asset('images/help-icon.png') }}" />
                  <br/>
                  {{ __('Help') }}
                </div>
              </div>
            </div>
            <br><br><br>
            <div class="row justify-content-center"  title="This feature is currently unnavailable" >
              <div class="col-6">
                <button disabled='disabled' id="setVaccineLocation" class="btn btn-primary form-control set-vaccine-location">{{ __('Set Vaccine Location') }}</button>
              </div>
            </div>
          @endif

          <br/><br/>
          <div class="row">
            <div class="col-12 text-center">
              <img src = "{{ asset('images/trackmysolutionslogoregtm-web.jpg') }}">
               <br/>
                [
                <a href="https://trackmyapp.us/files/default/terms.html" target="_blank">Terms</a>
                |
                <a href="https://trackmyapp.us/files/default/terms.html" target="_blank">Privacy policy</a>
                ]
            </div>
          </div>
        </div>
    </div>
</div>

@endsection

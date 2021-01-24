@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @if(request()->get('rt') == "patient")
        <div class="col-md-12 text-center">
          <h3>{{ __('Patient Registration') }}</h3>
        </div>

        <form method="POST" action="{{ route('register') }}" onsubmit="Javascript: return false;">
          @csrf
          <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                {{ __('REQUIRED FIELDS') }}
              </div>
              <div class="card-body text-center">
                {{ __('Please fill all the Required fields to ensure that all neccessary information is captured for clinical and billing purposes.') }}
                <br><br>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('EMAIL') }}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('PASSWORD') }}" >

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('REPEAT PASSWORD') }}" >
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name"  placeholder="{{ __('First Name') }}">

                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="{{ __('Last Name') }}">

                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="date_of_birth" type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" placeholder="{{ __('Date Of Birth (MM/DD/YYYY)') }}" onfocus="(this.type='date')">

                        @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="{{ __('PRIMARY PHONE NUMBER') }}">

                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="row">
                          <div class="col-4">
                            <input type="radio" name="phone_type" id="Mobile" value="Mobile" checked> <label for ="Mobile">{{ __('Mobile') }}</label>
                          </div>
                          <div class="col-4">
                            <input type="radio" name="phone_type" id="Home" value="Home"> <label for ="Home">{{ __('Home') }}</label>
                          </div>
                          <div class="col-4">
                            <input type="radio" name="phone_type" id="Work" value="Work"> <label for ="Work">{{ __('Work') }}</label>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1') }}" required autocomplete="address1" placeholder="{{ __('ADDRESS 1') }}">

                        @error('address1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ old('address2') }}" autocomplete="address2" placeholder="{{ __('ADDRESS 2') }}">

                        @error('address2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="{{ __('CITY') }}">

                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-4 text-center">
                        <select id="state" class="form-control @error('state') is-invalid @enderror" name="state" required placeholder="{{ __('State') }}">
                          <option value="">STATE</option>
                          <option value="AL">Alabama</option>
                        	<option value="AK">Alaska</option>
                        	<option value="AZ">Arizona</option>
                        	<option value="AR">Arkansas</option>
                        	<option value="CA">California</option>
                        	<option value="CO">Colorado</option>
                        	<option value="CT">Connecticut</option>
                        	<option value="DE">Delaware</option>
                        	<option value="DC">District Of Columbia</option>
                        	<option value="FL">Florida</option>
                        	<option value="GA">Georgia</option>
                        	<option value="HI">Hawaii</option>
                        	<option value="ID">Idaho</option>
                        	<option value="IL">Illinois</option>
                        	<option value="IN">Indiana</option>
                        	<option value="IA">Iowa</option>
                        	<option value="KS">Kansas</option>
                        	<option value="KY">Kentucky</option>
                        	<option value="LA">Louisiana</option>
                        	<option value="ME">Maine</option>
                        	<option value="MD">Maryland</option>
                        	<option value="MA">Massachusetts</option>
                        	<option value="MI">Michigan</option>
                        	<option value="MN">Minnesota</option>
                        	<option value="MS">Mississippi</option>
                        	<option value="MO">Missouri</option>
                        	<option value="MT">Montana</option>
                        	<option value="NE">Nebraska</option>
                        	<option value="NV">Nevada</option>
                        	<option value="NH">New Hampshire</option>
                        	<option value="NJ">New Jersey</option>
                        	<option value="NM">New Mexico</option>
                        	<option value="NY">New York</option>
                        	<option value="NC">North Carolina</option>
                        	<option value="ND">North Dakota</option>
                        	<option value="OH">Ohio</option>
                        	<option value="OK">Oklahoma</option>
                        	<option value="OR">Oregon</option>
                        	<option value="PA">Pennsylvania</option>
                        	<option value="RI">Rhode Island</option>
                        	<option value="SC">South Carolina</option>
                        	<option value="SD">South Dakota</option>
                        	<option value="TN">Tennessee</option>
                        	<option value="TX">Texas</option>
                        	<option value="UT">Utah</option>
                        	<option value="VT">Vermont</option>
                        	<option value="VA">Virginia</option>
                        	<option value="WA">Washington</option>
                        	<option value="WV">West Virginia</option>
                        	<option value="WI">Wisconsin</option>
                        	<option value="WY">Wyoming</option>
                        </select>

                        @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-8 text-center">
                        <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode" placeholder="{{ __('ZIPCODE') }}">

                        @error('zipcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                {{ __('OPTIONAL FIELDS') }}
              </div>
              <div class="card-body text-center">
                {{ __('Please fill out the fields below to provide additional information and to ensure proper identification during the testing and vaccination process.') }}
                <br><br>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="ssn" type="text" class="form-control @error('ssn') is-invalid @enderror" name="ssn" value="{{ old('ssn') }}"  autocomplete="ssn" placeholder="{{ __('SOCIAL SECURITY NUMBER') }}">

                        @error('ssn')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input id="phone_number1" type="text" class="form-control @error('phone_number1') is-invalid @enderror" name="phone_number1" value="{{ old('phone_number1') }}"  autocomplete="phone_number1"  placeholder="{{ __('SECONDARY PHONE NUMBER') }}">

                        @error('phone_number1')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div class="row">
                          <div class="col-4">
                            <input type="radio" name="phone_type1" id="Mobile1" value="Mobile" checked> <label for ="Mobile1">{{ __('Mobile') }}</label>
                          </div>
                          <div class="col-4">
                            <input type="radio" name="phone_type1" id="Home1" value="Home"> <label for ="Home1">{{ __('Home') }}</label>
                          </div>
                          <div class="col-4">
                            <input type="radio" name="phone_type1" id="Work1" value="Work"> <label for ="Work1">{{ __('Work') }}</label>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-4 text-center">
                        <select id="dl_state" class="form-control @error('dl_state') is-invalid @enderror" name="dl_state" placeholder="{{ __('State') }}">
                          <option value="">STATE</option>
                          <option value="AL">Alabama</option>
                        	<option value="AK">Alaska</option>
                        	<option value="AZ">Arizona</option>
                        	<option value="AR">Arkansas</option>
                        	<option value="CA">California</option>
                        	<option value="CO">Colorado</option>
                        	<option value="CT">Connecticut</option>
                        	<option value="DE">Delaware</option>
                        	<option value="DC">District Of Columbia</option>
                        	<option value="FL">Florida</option>
                        	<option value="GA">Georgia</option>
                        	<option value="HI">Hawaii</option>
                        	<option value="ID">Idaho</option>
                        	<option value="IL">Illinois</option>
                        	<option value="IN">Indiana</option>
                        	<option value="IA">Iowa</option>
                        	<option value="KS">Kansas</option>
                        	<option value="KY">Kentucky</option>
                        	<option value="LA">Louisiana</option>
                        	<option value="ME">Maine</option>
                        	<option value="MD">Maryland</option>
                        	<option value="MA">Massachusetts</option>
                        	<option value="MI">Michigan</option>
                        	<option value="MN">Minnesota</option>
                        	<option value="MS">Mississippi</option>
                        	<option value="MO">Missouri</option>
                        	<option value="MT">Montana</option>
                        	<option value="NE">Nebraska</option>
                        	<option value="NV">Nevada</option>
                        	<option value="NH">New Hampshire</option>
                        	<option value="NJ">New Jersey</option>
                        	<option value="NM">New Mexico</option>
                        	<option value="NY">New York</option>
                        	<option value="NC">North Carolina</option>
                        	<option value="ND">North Dakota</option>
                        	<option value="OH">Ohio</option>
                        	<option value="OK">Oklahoma</option>
                        	<option value="OR">Oregon</option>
                        	<option value="PA">Pennsylvania</option>
                        	<option value="RI">Rhode Island</option>
                        	<option value="SC">South Carolina</option>
                        	<option value="SD">South Dakota</option>
                        	<option value="TN">Tennessee</option>
                        	<option value="TX">Texas</option>
                        	<option value="UT">Utah</option>
                        	<option value="VT">Vermont</option>
                        	<option value="VA">Virginia</option>
                        	<option value="WA">Washington</option>
                        	<option value="WV">West Virginia</option>
                        	<option value="WI">Wisconsin</option>
                        	<option value="WY">Wyoming</option>
                        </select>

                        @error('dl_state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-8 text-center">
                        <input id="dl_number" type="text" class="form-control @error('dl_number') is-invalid @enderror" name="dl_number" value="{{ old('dl_number') }}"  autocomplete="dl_number"  placeholder="{{ __('DRIVER LICENSE NUMBER') }}">

                        @error('dl_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                      <select id="ethnicity" class="form-control @error('ethnicity') is-invalid @enderror" name="ethnicity" placeholder="{{ __('ETHINICITY') }}">
                        <option value="">ETHINICITY</option>
                        <option value="American Indian or Alaska Native">American Indian or Alaska Native.</option>
                        <option value="Asian">Asian</option>
                        <option value="Black or African American">Black or African American</option>
                        <option value="Hispanic or Latino">Hispanic or Latino</option>
                        <option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific Islander</option>
                        <option value="White">White</option>

                      </select>
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-12 text-center">
                      <select id="race" class="form-control @error('race') is-invalid @enderror" name="race" placeholder="{{ __('RACE') }}">
                        <option value="">RACE</option>
                        <option value="American Indian or Alaska Native">American Indian or Alaska Native.</option>
                        <option value="Asian">Asian</option>
                        <option value="Black or African American">Black or African American</option>
                        <option value="Hispanic or Latino">Hispanic or Latino</option>
                        <option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific Islander</option>
                        <option value="White">White</option>
                      </select>
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                  <div class="col-md-12 text-center">

                    <br><br>
                  </div>
                </div>

                <div class="form-group row justify-content-center">
                  <div class="col-md-12 text-center">
                    NOTICE: By clicking Register, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Privacy policy</a>.
                  </div>
                </div>

                <div class="form-group row justify-content-center">
                  <div class="col-md-12 text-center">
                    <input type="hidden" name="r_type" value="{{ request()->get('rt') }}">
                    <button type="submit" class="btn btn-primary form-control">
                        {{ __('Register') }}
                    </button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        </form>
      @endif
    </div>

</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country"  required>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('dateGraduated') ? ' has-error' : '' }}">
                            <label for="dateGraduated" class="col-md-4 control-label">Year Graduated</label>

                            <div class="col-md-6">
                                <input id="dateGraduated" type="text" class="form-control" name="dateGraduated" value="{{ old('dateGraduated') }}"required>

                                @if ($errors->has('dateGraduated'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateGraduated') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }}">
                            <label for="degree" class="col-md-4 control-label">Degree Acquired</label>

                            <div class="col-md-6">
                                <select id="degree" type="text" class="form-control" name="degree" value="{{ old('degree') }}">
                                    <option value="B.Sc. Computer Science">B.Sc. Computer Science</option>
                                    <option value="B.Sc. Computer Science and Management">B.Sc. Computer Science and Management</option>
                                    <option value="B.Sc. General with a major/minor in Computer Science">B.Sc. General: Major or Minor in Computer Science</option>
                                    <option value="B.Sc. Information Technology">B.Sc. Information Technology</option>
                                    <option value="B.Sc. General with a major/minor in Information Technology">B.Sc. General: Major or Minor in Information Technology</option>
                                </select required>

                                @if ($errors->has('degree'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('degree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('degreeClass') ? ' has-error' : '' }}">
                            <label for="degree_class" class="col-md-4 control-label">Class of Degree Awarded</label>

                            <div class="col-md-6">
                                <select id="degreeClass" type="text" class="form-control" name="degreeClass" value="{{ old('degreeClass') }}">          
                                    <option value="First Class">First Class Honours</option>
                                    <option value="Upper Second">Upper Second Honours</option>
                                    <option value="Lower Second">Lower Second Honours</option>
                                    <option value="Passed Degree">Passed Degree</option>
                                </select required>
                                @if ($errors->has('degreeClass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('degreClass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                            <label for="occupation" class="col-md-4 control-label">Occupation</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control" name="occupation" value="{{ old('occupation') }}" required>

                                @if ($errors->has('occupation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('countryEmployed') ? ' has-error' : '' }}">
                            <label for="countryEmployed" class="col-md-4 control-label">Country Employed</label>

                            <div class="col-md-6">
                                <input id="countryEmployed" type="text" class="form-control" name="countryEmployed" value="{{ old('countryEmployed') }}" required>

                                @if ($errors->has('countryEmployed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('countryEmployed') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company" class="col-md-4 control-label">Company</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control" name="company" value="{{ old('company') }}" required>

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('companyEmail') ? ' has-error' : '' }}">
                            <label for="companyEmail" class="col-md-4 control-label">Company Email</label>

                            <div class="col-md-6">
                                <input id="companyEmail" type="email" class="form-control" name="companyEmail" value="{{ old('companyEmail') }}" required>

                                @if ($errors->has('companyEmail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('companyEmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('interests') ? ' has-error' : '' }}">
                            <label for="interests" class="col-md-4 control-label">Interests</label>

                            <div class="col-md-6">
                                <textarea id="interests" type="text" textarea rows="4" cols="50" class="form-control" name="interests" value="{{ old('interests') }}"></textarea required>

                                @if ($errors->has('interests'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('interests') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                            <label for="facebook" class="col-md-4 control-label">Facebook Link(www.facebook.com/profile)</label>

                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control" name="facebook" value="{{ old('facebook') }}" >

                                @if ($errors->has('facebook'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('github') ? ' has-error' : '' }}">
                            <label for="github" class="col-md-4 control-label">GitHub (www.github.com/profile)</label>

                            <div class="col-md-6">
                                <input id="github" type="text" class="form-control" name="github" value="{{ old('github') }}" >

                                @if ($errors->has('github'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('github') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
                            <label for="linkedin" class="col-md-4 control-label">Linked-In (www.linkedin.com/profile)</label>

                            <div class="col-md-6">
                                <input id="linkedin" type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}" >

                                @if ($errors->has('linkedin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                                         
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection

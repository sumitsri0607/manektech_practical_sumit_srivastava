<div>
   
@if(!empty($successMessage))
<div class="alert alert-success">
   {{ $successMessage }}
</div>
@endif
  
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
            <p>Step 3</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}">4</a>
            <p>Step 4</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-circle {{ $currentStep != 5 ? 'btn-default' : 'btn-primary' }}">5</a>
            <p>Step 5</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-6" type="button" class="btn btn-circle {{ $currentStep != 6 ? 'btn-default' : 'btn-primary' }}">6</a>
            <p>Step 6</p>
        </div>
        <!-- <div class="stepwizard-step">
            <a href="#step-7" type="button" class="btn btn-circle {{ $currentStep != 7 ? 'btn-default' : 'btn-primary' }}">7</a>
            <p>Step 7</p>
        </div> -->
    </div>
</div>
  
    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Personal Information </h3>
  
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" wire:model="first_name" class="form-control" id="first_name" required>
                    @error('first_name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" wire:model="last_name" class="form-control" id="last_name" required>
                    @error('last_name') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <div class="form-group">
                    <label for="designation">designation:</label>
                    <input type="text" wire:model="designation" class="form-control" id="designation" required>
                    @error('designation') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" wire:model="email" class="form-control" id="email" required> 
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" wire:model="phone" class="form-control" id="phone" required>
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="address_line_1">Address Line 1:</label>
                    <input type="text" wire:model="address_line_1" class="form-control" id="address_line_1">
                    @error('address_line_1') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="address_line_2">Address Line 2:</label>
                    <input type="text" wire:model="address_line_2" class="form-control" id="address_line_2">
                    @error('address_line_2') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="country_id">{{ __('Country') }}</label>
                        <select class="form-control" id="country_id" name="country_id" focus>
                            <option value="" disabled selected>Select Country</option>        
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                            @error('country_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>  
                <div class="form-group">
                            <label for="state_id" class="">{{ __('State') }}</label>
                                <select class="form-control" id="state_id" name="state_id"  focus>
                                    
                                </select>
                                @error('state_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>   

                 <div class="form-group">
                            <label for="city_id" class="">{{ __('City') }}</label>
                                <select class="form-control" id="city_id" name="city_id"  focus>
                                    
                                </select>
                                @error('city_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
   
                <div class="form-group">
                    <label for="pincode">Pin Code</label>
                    <input type="text" wire:model="pincode" class="form-control" id="pincode" required>
                    @error('pincode') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="gender" value="Male" {{{ $gender == 'Male' ? "checked" : "" }}}> Male </label>
                    <label class="radio-inline"><input type="radio" wire:model="gender" value="Female" {{{ $gender == 'Female' ? "checked" : "" }}}> Female </label>
                    @error('status') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="text" wire:model="dob" class="datepicker form-control" id="dob">
                    @error('dob') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Personal Information </h3>
                <h3> SSC RESULT </h3>
                <div class="form-group">
                    <label for="ssc_name_of_board">Name of board</label>
                    <input type="text" wire:model="ssc_name_of_board" class="form-control" id="ssc_name_of_board" required>
                    @error('ssc_name_of_board') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <div class="form-group">
                    <label for="ssc_passing_year">Passing year</label>
                    <input type="text" wire:model="ssc_passing_year" class="form-control" id="ssc_passing_year" required>
                    @error('ssc_passing_year') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="ssc_percentage">Percentage</label>
                    <input type="text" wire:model="ssc_percentage" class="form-control" id="ssc_percentage" required>
                    @error('ssc_percentage') <span class="error">{{ $message }}</span> @enderror
                </div>

                <h3> SSC RESULT </h3>
                <div class="form-group">
                    <label for="hsc_name_of_board">Name of board</label>
                    <input type="text" wire:model="hsc_name_of_board" class="form-control" id="hsc_name_of_board" required>
                    @error('hsc_name_of_board') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="hsc_passing_year">Passing year</label>
                    <input type="text" wire:model="hsc_passing_year" class="form-control" id="hsc_passing_year" required>
                    @error('hsc_passing_year') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="hsc_percentage">Percentage</label>
                    <input type="text" wire:model="hsc_percentage" class="form-control" id="hsc_percentage" required>
                    @error('hsc_percentage') <span class="error">{{ $message }}</span> @enderror
                </div>

                <h3>Bachelor Degree</h3>
                <div class="form-group">
                    <label for="bd_course_name">Course Name</label>
                    <input type="text" wire:model="bd_course_name" class="form-control" id="bd_course_name">
                    @error('bd_course_name') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="bd_university">University</label>
                    <input type="text" wire:model="bd_university" class="form-control" id="bd_university">
                    @error('bd_university') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="bd_passing_year">Passing year</label>
                    <input type="number" wire:model="bd_passing_year" class="form-control" id="bd_passing_year">
                    @error('bd_passing_year') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="bd_percentage">Percentage</label>
                    <input type="text" wire:model="bd_percentage" class="form-control" id="bd_percentage">
                    @error('bd_percentage') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Experience</h3>  
                            <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" wire:model="company_name" class="form-control" id="company_name">
                                    @error('company_name') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="ex_designation">Designation</label>
                                <input type="text" wire:model="ex_designation" class="form-control" id="ex_designation">
                                @error('ex_designation') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="from_date">From date</label>
                                <input type="text" wire:model="from_date" class="form-control datepicker" id="from_date">
                                @error('from_date') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="to_date">To date</label>
                                <input type="text" wire:model="to_date" class="form-control datepicker" id="to_date">
                                @error('to_date') <span class="error">{{ $message }}</span> @enderror
                            </div> 
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="thirdStepSubmit">Next</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                    </div>
                          
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 4</h3>
                <div class="form-group">
                    <label for="hindi">Hindi</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="hindi" value="Read" {{{ $hindi == 'Read' ? "checked" : "" }}}> Read </label>
                    <label class="radio-inline"><input type="radio" wire:model="hindi" value="Write" {{{ $hindi == 'Write' ? "checked" : "" }}}> Write </label>
                    @error('hindi') <span class="error">{{ $message }}</span> @enderror
                    <label class="radio-inline"><input type="radio" wire:model="hindi" value="Speak" {{{ $hindi == 'Speak' ? "checked" : "" }}}> Speak </label>
                    @error('hindi') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="english">English</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="english" value="Read" {{{ $english == 'Read' ? "checked" : "" }}}> Read </label>
                    <label class="radio-inline"><input type="radio" wire:model="english" value="Write" {{{ $english == 'Write' ? "checked" : "" }}}> Write </label>
                    @error('hindi') <span class="error">{{ $message }}</span> @enderror
                    <label class="radio-inline"><input type="radio" wire:model="english" value="Speak" {{{ $english == 'Speak' ? "checked" : "" }}}> Speak </label>
                    @error('hindi') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="gujarati">Gujarati</label><br/>
                    <label class="radio-inline"><input type="radio" wire:model="gujarati" value="Read" {{{ $gujarati == 'Read' ? "checked" : "" }}}> Read </label>
                    <label class="radio-inline"><input type="radio" wire:model="gujarati" value="Write" {{{ $gujarati == 'Write' ? "checked" : "" }}}> Write </label>
                    @error('hindi') <span class="error">{{ $message }}</span> @enderror
                    <label class="radio-inline"><input type="radio" wire:model="gujarati" value="Speak" {{{ $gujarati == 'Speak' ? "checked" : "" }}}> Speak </label>
                    @error('hindi') <span class="error">{{ $message }}</span> @enderror
                </div>
  
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="forthStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
                </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Reference Contact</h3>
                <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" wire:model="name" class="form-control" id="name">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" wire:model="contact_number" class="form-control" id="contact_number">
                    @error('contact_number') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="relation">Relation</label>
                    <input type="text" wire:model="relation" class="form-control" id="relation">
                    @error('relation') <span class="error">{{ $message }}</span> @enderror
                </div>
  
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="fifthStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(4)">Back</button>
                </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 6 ? 'displayNone' : '' }}" id="step-6">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Peference location other and information</h3>
                <div class="form-group">
                    <label for="preferd_location"> Preferd location</label>
                    <input type="text" wire:model="preferd_location" class="form-control" id="preferd_location">
                    @error('preferd_location') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="notice_period">Notice Period</label>
                    <input type="text" wire:model="notice_period" class="form-control" id="notice_period">
                    @error('notice_period') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="current_ctc">Current CTC</label>
                    <input type="text" wire:model="current_ctc" class="form-control" id="current_ctc">
                    @error('relation') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="expected_ctc">Expected CTC</label>
                    <input type="text" wire:model="expected_ctc" class="form-control" id="expected_ctc">
                    @error('expected_ctc') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(5)">Back</button>
    </div>

    <!-- <div class="row setup-content {{ $currentStep != 7 ? 'displayNone' : '' }}" id="step-7">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 7</h3>
  
                <table class="table">
                            Personal Information
                    <tr>
                        <td>First name:</td>
                        <td><strong>{{$first_name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Last name:</td>
                        <td><strong>{{$last_name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Designation:</td>
                        <td><strong>{{$designation}}</strong></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><strong>{{$email}}</strong></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><strong>{{$phone}}</strong></td>
                    </tr>
                    <tr>
                        <td>Address line 1:</td>
                        <td><strong>{{$address_line_1}}</strong></td>
                    </tr>
                    <tr>
                        <td>Address line 2:</td>
                        <td><strong>{{$address_line_2}}</strong></td>
                    </tr>
                    <tr>
                        <td>State id</td>
                        <td><strong>{{$state_id}}</strong></td>
                    </tr>
                    <tr>
                        <td>City id</td>
                        <td><strong>{{$city_id}}</strong></td>
                    </tr>
                    <tr>
                        <td>Country id</td>
                        <td><strong>{{$country_id}}</strong></td>
                    </tr>
                    <tr>
                        <td>Pincode</td>
                        <td><strong>{{$pincode}}</strong></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><strong>{{$gender}}</strong></td>
                    </tr>
                    <tr>
                        <td>dob</td>
                        <td><strong>{{$dob}}</strong></td>
                    </tr>
                </table>
  
                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
            </div>
        </div> -->
</div


        
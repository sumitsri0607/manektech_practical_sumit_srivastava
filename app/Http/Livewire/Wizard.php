<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PersonalInformation;
use App\Models\EducationDetail;
use App\Models\Experience;
use App\Models\Language;
use App\Models\OtherInformation;
use App\Models\ReferenceContact;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Wizard extends Component
{
    public $currentStep = 1;
    public $first_name, $last_name, $designation, $email, $phone, $address_line_1, $address_line_2, $state_id, $city_id, $country_id, $pincode, $gender, $dob, $personal_information_id, $ssc_name_of_board, $ssc_passing_year, $ssc_percentage, $hsc_name_of_board, $hsc_passing_year, $hsc_percentage;
    public $bd_course_name, $bd_university, $bd_passing_year, $bd_percentage;
    public $md_course_name, $md_university, $md_passing_year, $md_percentage;
    public $company_name, $ex_designation, $from_date, $to_date, $hindi, $english, $gujarati, $name, $contact_number, $relation, $preferd_location, $notice_period, $current_ctc, $expected_ctc, $PersonalInformation;
    public $successMessage = '';

    public function render()
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('livewire.wizard', ['countries' => $countries, 'states' => $states, 'city' => $cities]);
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'designation' => 'required',
            'email' => 'required|email|unique:personal_information,email',
            'phone' => 'required|unique:personal_information,phone',
            'pincode' => 'required|numeric|min:6'
        ]);
 
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'ssc_name_of_board' => 'required',
            'ssc_passing_year' => 'required',
            'ssc_percentage' => 'required|numeric',
            'hsc_name_of_board' => 'required',
            'hsc_passing_year' => 'required|numeric',
            'hsc_percentage' => 'required|numeric'
        ]);
  
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
  
        $this->currentStep = 4;
        
    }

    public function forthStepSubmit()
    {
  
        $this->currentStep = 5;
        
    }

    public function fifthStepSubmit()
    {
  
        $this->currentStep = 6;
        
    }

    public function sixthStepSubmit()
    {
        $validatedData = $this->validate([
            'preferd_location' => 'required',
            'notice_period' => 'required',
            'current_ctc' => 'required',
            'expected_ctc' => 'required',
        ]);
  
        $this->currentStep = 7;
    }

    public function submitForm()
    {
       $PersonalInformation = PersonalInformation::create([
          
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'designation' => $this->designation,
            'email' => $this->email,
            'phone' => $this->phone,
            'pincode' =>$this->pincode,
            'address_line_1' =>$this->address_line_1,
            'address_line_2' =>$this->address_line_2,
            'state_id' =>$this->state_id,
            'city_id' =>$this->city_id,
            'country_id' =>$this->country_id,
            'gender' =>$this->gender,
            'dob' => $this->dob,

        ]);
        // dd($PersonalInformation->id);
        EducationDetail::create([
            'personal_information_id' => $PersonalInformation->id,
            'ssc_name_of_board' => $this->ssc_name_of_board,
            'ssc_passing_year' => $this->ssc_passing_year,
            'ssc_percentage' => $this->ssc_percentage,
            'hsc_name_of_board' => $this->hsc_name_of_board,
            'hsc_passing_year' =>$this->hsc_passing_year,
            'hsc_percentage' =>$this->hsc_percentage,
            'bd_course_name' =>$this->bd_course_name,
            'bd_university' =>$this->bd_university,
            'bd_passing_year' =>$this->bd_passing_year,
            'bd_percentage' =>$this->bd_percentage,
            'md_course_name' =>$this->md_course_name,
            'md_university' =>$this->md_university,
            'md_passing_year' =>$this->md_passing_year,
            'md_percentage' =>$this->md_percentage,
        ]);

        Experience::create([
            'personal_information_id' => $PersonalInformation->id,
            'designation' => $this->ex_designation,
            'from_date' => $this->from_date,
            'to_date' => $this->to_date,
        ]);

        Language::create([
            'personal_information_id' => $PersonalInformation->id,
            'hindi' => $this->hindi,
            'english' => $this->english,
            'gujarati' => $this->gujarati,
        ]);

        ReferenceContact::create([
            'personal_information_id' => $PersonalInformation->id,
            'name' => $this->name,
            'contact_number' => $this->contact_number,
            'relation' => $this->relation,
        ]);

        OtherInformation::create([
            'personal_information_id' => $PersonalInformation->id,
            'preferd_location' => $this->preferd_location,
            'notice_period' => $this->notice_period,
            'current_ctc' => $this->current_ctc,
            'expected_ctc' => $this->expected_ctc,
        ]);

  
        $this->successMessage = 'Details Saved Successfully.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    public function clearForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
    }

    public function getStates(Request $request)
    {
        $id = $request->input('id');
        $get_state = State::where('country_id', $id)->get();
        $cap = array('get_state' => $get_state);
        // dd($get_state);
        $output = '<option>Select State</option>';
        foreach ($get_state as $key){
            $output.= '<option value = "'.$key->id.'">'.$key->name.'</option>';
        }
        echo json_encode($output);
    }

    public function getCity(Request $request)
    {
        $id = $request->input('id');
        $get_city = City::where('state_id', $id)->get();
        $cap = array('get_city' => $get_city);
        $output = '<option>Select City</option>';
        foreach ($get_city as $key){
            $output.= '<option value = "'.$key->id.'">'.$key->name.'</option>';
        }
        echo json_encode($output);
    }

}

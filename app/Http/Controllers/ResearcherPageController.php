<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResearcherPageController extends Controller
{

  public function getIndex(){
    return view('researcher.index');
  }

  public function getBasicInfo(){
    return view('researcher.include.info');
  }

  public function getInstitute(){
    return view('researcher.include.institute');
  }

  public function getAddress(){
    return view('researcher.include.address');
  }

  public function getWorkHistory(){
    return view('researcher.include.workhistory');
  }

  public function getEducation(){
    return view('researcher.include.education');
  }

  public function getAchievement(){
    return view('researcher.include.achievement');
  }

  public function getAward(){
    return view('researcher.include.award');
  }

  public function getTalentMobility(){
    return view('researcher.include.talentm');
  }

  //modal
  public function getProfileimgModal(){
    return view('researcher.include.modal.profile-image');
  }

  // New Coding
  public function postInsertInstitute(Request $request)
  {
    DB::table('researcherinstitution')->insert([
      'researcher_id'         =>  1,
      'inst_type_id'          =>  1,
      'university_name'       =>  $request->university,
      'university_program'    =>  $request->faculty,
      'university_department' =>  $request->subject,
      'place_name'            =>  $request->school,
      'ministry_name'         =>  $request->department,
      'ministry_department'   =>  $request->unit,
      'ministry_devision'     =>  $request->lab,
      'private_org_name'      =>  $request->pri_organization,
      'lastupdate_date'       =>  date('Y-m-d h:i:s')
    ]);
    return redirect()->back();
  }

  public function postSaveInfo(Request $request)
  {
    $titlename_type = null;
    $academicpos = null;

    if ($request->academicpos_text != null) {
      $academicpos = $request->academicpos_text;
    } else {
      $academicpos = $request->academicpos_type;
    }

    if ($request->titlename_type == "oth") {
      $titlename_type = $request->titlename_list;
    } else {
      $titlename_type = $request->titlename_type;
    }

    DB::table('researcher_profiles')->where('id', 1)->update([
      'name_title_id'         =>  $titlename_type,
      'academic_position'     =>  $academicpos,
      'firstname_th'          =>  $request->firstname_th,
      'firstname_en'          =>  $request->firstname_en,
      'middlename_th'         =>  $request->middlename_th,
      'middlename_en'         =>  $request->middlename_en,
      'lastname_th'           =>  $request->lastname_th,
      'lastname_en'           =>  $request->lastname_en,
      'gender'                =>  $request->gender,
      'lastupdate_date'       =>  date('Y-m-d h:i:s')
    ]);

    return redirect()->back();
  }

  public function postSaveAddress(Request $request)
  {
    $home_tel         = $request->home_tel;
    $ext_no           = $request->ext_no;
    $fax_no           = $request->fax_no;
    $mobileMask       = $request->mobileMask;
    $email            = $request->email;
    $facebook_account = $request->facebook_account;
    $twitter_account  = $request->twitter_account;
    $line_account     = $request->line_account;
    $address          = $request->address;
    $country_type     = $request->country_type;
    $country_combo    = null;
    $province_list    = $request->province_list;

    if ($country_type == "oth") {
      $country_combo  = $request->country_combo;
      $get_country_combo  = DB::table('countries')->where('country_name_th', $country_combo)->first();
      $country_combo  = $get_country_combo->id;
    } else {
      $country_combo  = $country_type;
      $get_country_combo  = DB::table('countries')->where('country_name_th', $country_combo)->first();
      $country_combo  = $get_country_combo->id;
    }

    $amphur_list      = "amphur_list_" . $province_list;
    $amphur_list      = $request->$amphur_list;

    $district_list    = "district_list_" . $amphur_list;
    $district_list    = $request->$district_list;

    $postcode         = $request->postcode;

    DB::table('researcher_addresses')->where('researcher_id', 1)->update([
      'home_tel'          =>  $home_tel,
      'tel_extension'     =>  $ext_no,
      'fax'               =>  $fax_no,
      'mobile'            =>  $mobileMask,
      'email'             =>  $email,
      'facebook_account'  =>  $facebook_account,
      'twitter_account'   =>  $twitter_account,
      'line_account'      =>  $line_account,
      'address'           =>  $address,
      'country_id'        =>  $country_combo,
      'province_id'       =>  $province_list,
      'amphur_id'         =>  $amphur_list,
      'district_id'       =>  $district_list,
      'postcode'          =>  $postcode,
      'lastupdate_date'   =>  date('Y-m-d h:i:s')
    ]);

    return redirect()->back();
  }

  public function postInsertWorkHistory(Request $request)
  {
    DB::table('researcher_work_histories')->insert([
      'researcher_id' =>  1,
      'year_start'    =>  $request->from,
      'year_end'      =>  $request->current,
      'position'      =>  $request->position,
      'institution'   =>  $request->institution,
      'job'           =>  $request->work_job
    ]);
    return redirect()->back();
  }

}

?>

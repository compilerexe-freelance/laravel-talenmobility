<?php
  namespace App\Http\Controllers;

  use App\Users;
  use App\Http\Controllers\Controller;

  class CompanyPageController extends Controller
  {

    public function getIndex(){
      return view('company.index');
    }
	
	public function getProjectList(){
	  return view('company.include.project-management.project-list');
	}
	
	public function getResearcherSearch(){
	  return view('company.include.researcher-search.search');
	}
	
	public function getProjectRegistration(){
	  return view('company.include.project-management.add-project');
	}
	
	public function getProjectInfoTab(){
	  return view('company.include.project-management.tab-projectinfo');
	}
	
	public function getProjectResearcherTab(){
	  return view('company.include.project-management.tab-researcher');
	}
	
	public function getProjectResearcherAddTab(){
  	  return view('company.include.project-management.tab-researcher-add');
  	}
	
	public function getProfile(){
	  return view('company.include.company-info.profile');
	}
	
	// Modal
	public function getConfirmResearcherAndStudentModal($modalID){
	  return  view('company.include.project-management.modal.confirm-researcher', ['id' => ''.$modalID]);
    }
	
	public function getDeleteProjectModal($modalID){
        return  view('company.include.project-management.modal.delete-project', ['id' => ''.$modalID]);
    }
	
	public function getSelectedReasearcherAndStudentModal($modalID){
		return  view('company.include.project-management.modal.selectedname', ['id' => ''.$modalID]);
    }
	
	public function getDeleteResearcherModal($modalID){
        return  view('company.include.project-management.modal.delete-researcher', ['id' => ''.$modalID]);
    }
	
	public function getResearcherBasicAdditionModal($modalID){
		return  view('company.include.project-management.modal.add-basic-researcher', ['id' => ''.$modalID]);
    }
	
	public function getStudentAdditionModal($modalID){
		return  view('company.include.project-management.modal.add-student', ['id' => ''.$modalID]);
    }
	
  }

?>

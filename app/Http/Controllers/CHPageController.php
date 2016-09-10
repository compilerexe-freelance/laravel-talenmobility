<?php
  namespace App\Http\Controllers;

  use App\Users;
  use App\Http\Controllers\Controller;

  class CHPageController extends Controller
  {

    public function getIndex(){
      return view('clearinghouse.index');
    }

	public function getProjectManagement(){
	  return view('clearinghouse.include.project-management.projectmanagement');
	}

  	public function getProjectList(){
  	  return view('clearinghouse.include.project-management.projectlist');
  	}
	
	public function getCompanyApprovalWaitingList(){
  	  return view('clearinghouse.include.company-approval.wait-list');
  	}
	
	public function getResearcherSearch(){
		return view('clearinghouse.include.researcher-search.search');	
	}
	
	public function getStatistic(){
		return view('clearinghouse.include.statistic.statistic');	
	}

	// Tabs
  	public function getProjectInfoTab(){
  	  return view('clearinghouse.include.project-management.tab-projectinfo');
  	}

  	public function getProjectResearcherTab(){
  	  return view('clearinghouse.include.project-management.tab-researcher');
  	}

  	public function getProjectResearcherAddTab(){
  	  return view('clearinghouse.include.project-management.tab-researcher-add');
  	}

  	public function getProjectProposalTab(){
  	  return view('clearinghouse.include.project-management.tab-proposal');
  	}

  	public function getProjectContractTab(){
  	  return view('clearinghouse.include.project-management.tab-contract');
  	}

  	public function getProjectEvaluateTab(){
  	  return view('clearinghouse.include.project-management.tab-evaluation');
  	}

  	public function getProjectReportTab(){
  	  return view('clearinghouse.include.project-management.tab-report');
  	}

  	//Modal
  	public function getProfileimgModal($modalID){
  		return 	view('clearinghouse.include.modal.ch-profileimage-modal', ['id' => ''.$modalID]);
  	}
	
	public function getProjectStatus($modalID){
		return 	view('clearinghouse.include.modal.project-status', ['id' => ''.$modalID]);
	}

  	public function getCompanyinfoModal($modalID){
  		return 	view('clearinghouse.include.project-management.modal.company-detail', ['id' => ''.$modalID]);
  	}
	
	public function getEvaluationModal($modalID){
  		return 	view('clearinghouse.include.project-management.modal.evaluation-form', ['id' => ''.$modalID]);
  	}

  	public function getCompanydeleteModal($modalID){
  		return 	view('clearinghouse.include.project-management.modal.delete-company', ['id' => ''.$modalID]);
  	}

    public function getProjectinfoModal($modalID){
        return  view('clearinghouse.include.project-management.modal.project-detail', ['id' => ''.$modalID]);
    }
	
	public function getProjectdeleteModal($modalID){
        return  view('clearinghouse.include.project-management.modal.delete-project', ['id' => ''.$modalID]);
    }
	
	public function getResearcherAdditionDeletemodal($modalID){
        return  view('clearinghouse.include.project-management.modal.delete-researcher', ['id' => ''.$modalID]);
    }
	
	public function getResearcherBasicAdditionModal($modalID){
		return  view('clearinghouse.include.project-management.modal.add-basic-researcher', ['id' => ''.$modalID]);
    }
	
	public function getResearcherAdvanceAdditionModal($modalID){
		return  view('clearinghouse.include.project-management.modal.add-advance-researcher', ['id' => ''.$modalID]);
    }
	
	public function getStudentAdditionModal($modalID){
		return  view('clearinghouse.include.project-management.modal.add-student', ['id' => ''.$modalID]);
    }
	
	public function getConfirmResearcherAndStudentModal($modalID){
		return  view('clearinghouse.include.project-management.modal.confirm-researcher', ['id' => ''.$modalID]);
    }
	
	public function getResearcherTabDeleteresearcherModal($modalID){
		return  view('clearinghouse.include.project-management.modal.delete-researcher', ['id' => ''.$modalID]);
    }
	
	public function getSelectedReasearcherAndStudentModal($modalID){
		return  view('clearinghouse.include.project-management.modal.selectedname', ['id' => ''.$modalID]);
    }
	
	public function getUploadContract($modalID){
		return  view('clearinghouse.include.project-management.modal.upload-contract', ['id' => ''.$modalID]);
    }

  }

?>

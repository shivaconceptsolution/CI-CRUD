<?php
class StudentController extends CI_Controller
{
	function __construct()
	{
           parent::__construct();
           $this->load->model('Studentmodel');
	}

	function index()
	{
         $this->load->view('studentview');
   
	}

	function indexlogic()
	{
       $r=$this->Studentmodel->insertstudent($this->input->post('txtrno'),$this->input->post('txtname'));
       if($r)
       {
      $x= "data inserted";
       }
       else
       {
       	$x= "data not inserted";
       }

        $this->load->view('studentview',array("data"=>$x));

	}

	function viewstu()
	{
		   $r=$this->Studentmodel->viewstudent();
		   $this->load->view('selectview',array("data"=>$r));

	}

	function findstudent($id)
	{
		$r=$this->Studentmodel->searchstudent($id);
		$this->load->view('editview',array("data"=>$r));
	}

	function updatelogic()
	{
		$r=$this->Studentmodel->updatestudent($this->input->post('txtrno'),$this->input->post('txtname'));
       if($r)
       {
          return redirect('StudentController/viewstu');
       }
     
	}

	function deletestudent($id)
	{
		$r=$this->Studentmodel->deletestudent($id);
       if($r)
       {
          return redirect('StudentController/viewstu');
       }
     
	}

}



?>
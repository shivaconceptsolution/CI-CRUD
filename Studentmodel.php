<?php

class Studentmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
    function insertstudent($r,$s)
    {
       $res=$this->db->insert('student',array("rno"=>$r,"sname"=>$s));

       return $res;

    }

    function viewstudent()
    {
    	 $res = $this->db->get('student');
    	 return $res->result_array();
    }
     function searchstudent($rno)
    {
    	 $res = $this->db->get_where('student',array('rno'=>$rno));
    	 return $res->result_array();
    }

    function updatestudent($r,$s)
    {
    	$this->db->where('rno',$r);
       $res=$this->db->update('student',array("sname"=>$s));

       return $res;

    }
    function deletestudent($r)
    {
    	$this->db->where('rno',$r);
       $res=$this->db->delete('student');

       return $res;

    }
}


?>
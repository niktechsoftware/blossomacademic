<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page']='home';
$this->load->view('all',$data);
}
public function director_massage()
{
	$data['page']='director';
$this->load->view('all',$data);
}
public function manager_massage()
{
	$data['page']='manager';
$this->load->view('all',$data);
}
public function principal_massage()
{
	$data['page']='principal';
$this->load->view('all',$data);
}
public function vision_mission()
{
	$data['page']='vision';
$this->load->view('all',$data);
}
public function rule()
{
	$data['page']='rules';
$this->load->view('all',$data);
}
public function Admision()
{
	$data['page']='Admisions';
$this->load->view('all',$data);
}
public function Admission_Proccedure()
{
	$data['page']='Admission_Proccedure';
$this->load->view('all',$data);
}
public function library_rule()
{
	$data['page']='library';
$this->load->view('all',$data);
}
public function gallery()
{
	$data['page']='gallery';
$this->load->view('all',$data);
}
public function login()
{
	$data['page']='login';
$this->load->view('all',$data);
}
public function login2()
{
	$data['page']='login2';
$this->load->view('all',$data);
}
public function exam_result()
{
	$data['page']='exam';
$this->load->view('all',$data);
}
public function contact()
{
	$data['page']='contact';
$this->load->view('all',$data);
}

public function contactus_value()
{	   
	   $data['f_name']=$this->input->post('f_name');
	   $data['l_name']=$this->input->post('l_name');
	   $data['mobile']=$this->input->post('mobile');
	   $data['email']=$this->input->post('email');
	   $data['message']=$this->input->post('message');
	   $data['date']=date('Y-m-d H:i:s');
	   
	 $insert=  $this->db->insert('contactus',$data);
	   if($insert)
	   {?>
		<script type=text/javascript>alert("Your request succesfully submitted");</script>
		<?php
		   redirect('welcome','refresh');
	   }
   
}
}


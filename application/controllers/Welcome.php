<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
            $this->load->view('pages/index');
	}
	public function category()
	{
		$this->load->view('pages/category');
	}
	public function shop()
	{
		$this->load->view('pages/shop');
	}
	public function about_us()
	{
		$this->load->view('pages/about-us');
	}
	public function contact_us()
	{
		$this->load->view('pages/contact-us');
	}
        public function validateUserLogin()
	{
            if(empty($_REQUEST['password']) || empty($_REQUEST['name'])){
                $result['success'] = 0;
                $result['message'] = 'Name/Password is empty';
            }else{
                $this->load->model('Library/Library_management', 'Library_management');
                $adminData= $this->Library_management->validateUser($_REQUEST['name'],$_REQUEST['mobile_number']);
                if(!empty($adminData)){
                    $dbPassword = $adminData['password'];
                    if($_REQUEST['password'] != $dbPassword){
                        $result['success'] = 0;
                        $result['message'] = 'Invalid Password.';
                    }else{
                        $result['success'] = 1;
                        $result['message'] = 'Login Successfully';
                    }
                }else{
                    $result['success'] = 0;
                    $result['message'] = 'Not a Valid User.';
                }
            }
            echo json_encode($result);
	}
        public function register()
	{
		$this->load->view('pages/register');
	}
        public function allstudent()
	{
            $addmission_date = date('Y-m-d');
            $this->load->model('Library/Library_management', 'Library_management');
            $dataSet['action'] = 'limit';
            $table_name= 'student_master';
            $response['data'] = $this->Library_management->getSavedData($dataSet,$table_name);
            $this->load->view('pages/tables',$response);
	}
        public function saveStudentData()
	{
            $result  =[];
            $this->autoRender = false;
            $addmission_date = date('Y-m-d');
            $this->load->model('Library/Library_management', 'Library_management');
            $response = $this->Library_management->saveData($_REQUEST);
            if($response){
                $result['success'] =1;
                $result['message'] = 'success';
            }else{
                $result['success'] =0;
                $result['message'] = 'Error.';
            }
            echo json_encode($result);
	}
        public function library_expenses()
	{
            $result  =[];
            $this->autoRender = false;
            $addmission_date = date('Y-m-d');
            $this->load->model('Library/Library_management', 'Library_management');
            $response = $this->Library_management->save_library_expenses($_REQUEST);
            if($response){
                $result['success'] =1;
                $result['message'] = 'success';
            }else{
                $result['success'] =0;
                $result['message'] = 'Error.';
            }
            echo json_encode($result);
	}
        public function view_profile()
	{
            die('sds');
	}
}

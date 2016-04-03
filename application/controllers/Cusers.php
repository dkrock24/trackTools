<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Cusers extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        $this->load->model('users/users_model');		
        $this->load->helper('url');
        $this->load->database('default');
    }
	public function usersView()
	{

		$users['users'] = $this->users_model->allUsers('track_users');
		
		$this->load->view('users/users.php', $users);
	}

	public function usersAdd(){
		$this->load->view('users/addUsers.php');
	}







	public function login()
	{
		$this->load->view('login/login.html');
	}

	public function autenticacion(){
		$domain 	= $this->input->post('domain');
 		$username 	= $this->input->post('usuario');
 		$password 	= $this->input->post('password');

 		$response = array (
	            "domain" => $domain,
	            "success" => $username,
	            "error" => 0,
	            "error_msg" => "",
	            "result" => false,
	            "user_db" => "",
	            "user_email" => ""
	    );

	 	try {
	        $adldap = null;
	        switch ($domain)
	        {
				case 'SV':
	                //require('/adLDAP.php');
					break;

				case 'TI':
	                //require('/adLDAP_ti.php');
					break;

	            case 'GT':
	                require('/adLDAP_gt.php');
					break;
			}
			//$adldap = new adLDAP();
		}
		catch (adLDAPException $e)
		{
			echo $e;
			exit();
		}
		/*
		if($adldap->authenticate($username,$password))
		{
	    	//$password = 'admin123456';

	        try
	        {
	        	echo "yes - Autenticado";
	        	$_SESSION['user']=$username;
	        	header('Location: '.'home');
	        	//redirect('home');

	        }
	        catch (Exeption $e)
	        {
	           echo "yes Ex";
	        }
	        if (!$response['result'])
	        {
	            echo "yes";
	        }
	    }
	    else
	    {//if adldap
				header('Location: '.'home');
	        echo "Fail Global";
	   	}
 			exit();
			*/
			$_SESSION['user']=$username;
			header('Location: '.'home');
		$this->load->view('index.php');
	}

	public function home(){
		if(!$_SESSION)
		{
			header('Location: '.'logout');
		}
		$data = array();
		$data 		= $this->consultas_model->users_entrys('track_config');
		$user 		= $this->consultas_model->users($_SESSION['user'],'track_users');
		$menu		= $this->consultas_model->menu();
		$subMenu	= $this->consultas_model->subMenu();


		$name['name'] 	= $data[0]->system_name;
		$name['user'] 	= $_SESSION['user'];
		$name['photo'] 	= $user[0]->vhur;
		$name['menu']	= $menu;
		$name['subMenu']	= $subMenu;

		$this->load->view('home/home.php',$name);
	}



	public function pageHome(){
		$developer 	= $this->consultas_model->developerCount('track_users');
		$name['developer'] 	= $developer;
		$this->load->view('home.php',$name);
	}

	public function addProject(){
		$this->load->view('project/add.php');
	}

	public function logout(){
		session_destroy();
		$this->load->view('login/login.html');
	}
	public function servers()
	{
		$dataServer['servers'] 		= $this->servers_model->allServers('track_server');
		$this->load->view('servers/Servers.php',$dataServer);
	}

	

}

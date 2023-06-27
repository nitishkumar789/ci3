<?php
class Register_model extends CI_Model
{
	function insert_data($name,$email,$phone,$password)
	{
	$query=$this->db->query("select * from user where (email='".$email."' or phone='".$phone."')");
		$row = $query->num_rows();
		if($row)
		{
		$data['message']="<h3 style='color:red'></h3>";
		}
		else
		{
		$query=$this->db->query("insert into user set name='$name',email='$email',phone='$phone',password='$password'");

		$data['message']="<h3 style='color:green'>successfully</h3>";
		}

		$this->load->view('registration_view',@$data);
		}

	}

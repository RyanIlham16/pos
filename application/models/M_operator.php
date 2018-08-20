<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_operator extends CI_Model
	{
		function login($table,$data)
		{
			$cek = $this->db->get_where($table,$data);
			if($cek->num_rows()>0)
			{
				return 1;
			}else
			{
				return 0;
			}	
		}
	}
?>
<?php

class AuthHook {
	
	public function Check() {
		$CI =& get_instance();
		
		if (!$CI->session->has_userdata('user')) {
			if (!($CI->uri->segment(1) == 'auth')) {
				redirect('auth/login');
			}
		}
	}
}
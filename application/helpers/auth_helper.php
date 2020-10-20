<?php 

function permission() {
	$ci = get_instance();
	$usuariologado = $ci->session->userdata('usuario_logado');
	if(!$usuariologado) {
		$ci->session->set_flashdata("danger", "Você precisa estar logado");
		redirect("login");
		}
	return $usuariologado;
	}	


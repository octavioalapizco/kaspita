<?php
class Controlador{
	var $nombre='Expresso';
	
	function render(){
																
		$nombre=$this->nombre;									#
		$tema="Default";										#
		require_once('../vistas/$tema/$nombre_view.php');		#
		require_once('../vistas/$tema/$nombre_view.php');		#
		$layout= new Layout();									#
		
		$vistaClassName=$nombre.'View';		#
		$vista=new $$vistaClassName;		#
		$tema->setVista($vista);			#
				
		$footer=new Vista();			#
		$tema->setFooter($footer);		#
		$tema->render();				#
	}
}
?>
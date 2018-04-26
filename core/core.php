<?php
	class App{
		public function init(){
			$this->_setHeader();
			$this->_loadSysFile();
			$this->_setAutoload();
			$this->register();
			$this->_setRoute();
		}
		public function _setHeader() {
			header('Content-type:text/html;charset=UTF-8');
		}
		public function _loadSysFile(){
			$GLOBALS['config']=require_once ROOTPATH.'/core/config.php';
		}
		public function _setAutoload(){
			require_once ROOTPATH.'/core/autoload.php';
			$autoload=new AutoLoad();
			$autoload->register();
		}
		public function register(){
			require_once ROOTPATH.'/core/route.php';
			$Route=new Route();
			Mvcproject::set('route',$Route);
			require_once ROOTPATH.'/core/session.php';
			$mvcsession=new Mvcsession();
			Mvcproject::set('mvcsession',$mvcsession);
		}
		public function _setRoute(){
			Mvcproject::get('route')->parse();
		}
	}

?>
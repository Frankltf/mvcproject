<?php
	class App{
		protected $autoload;
		protected $route;
		protected $mvcsession;
		public function __construct($autoload,$route,$mvcsession) {
			$this->autoload=$autoload;
			$this->route=$route;
			$this->mvcsession=$mvcsession;
		}
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
			$this->autoload->register();
		}
		public function register(){
			Mvcproject::set('route',$this->route);
			Mvcproject::set('mvcsession',$this->mvcsession);
		}
		public function _setRoute(){
			Mvcproject::get('route')->parse();
		}

	}

?>
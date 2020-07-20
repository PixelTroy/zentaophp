<?php
/**
 * The control file of index module of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
class index extends control
{
		public $a = '';
		/**
		 * The construct function.
		 * 
		 * @access public
		 * @return void
		 */
		public function __construct()
		{
				parent::__construct();
		}

		/**
		 * The index page.
		 * 
		 * @access public
		 * @return void
		 */
		public function index()
		{
				$this->display();
		}

		public function register()
		{
				$this->loadModel(user);
				
				$addUser = $this->user->create();
				a($addUser);
				$this->display();
		}

}

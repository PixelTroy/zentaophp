<?php
class userModel extends model
{
	public function create()
	{
 		$this->dao->insert('users')
 		    ->set('account')->eq($this->post->account)
 			->set('password')->eq($this->post->password)
 			->exec();
 		

	}
}

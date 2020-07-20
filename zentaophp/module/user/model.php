<?php
class userModel extends model
{
	public function create()
	{
			$user = $_POST;
			$this->dao->insert('users')->data($user)->exec();
			if(dao::isError()) die(dao::getError());

	}
}

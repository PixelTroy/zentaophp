<div style='text-align:center'>
	<form method='post'>
		<p><?php echo html::submitButton($lang->register)?></p>
		<h1><?php echo $lang->board?></h1>
		<p><?php echo $lang->account . html::input('account')?></p>
		<p><?php echo $lang->password . html::input('password')?></p>
		<p><?php echo $lang->password1 . html::input('password1')?></p>
		<p><?php echo html::submitButton($this->lang->login)?></p>
 	</form>
 </div> 

<?
/**
 * The html template file of index method of index module of zentaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
?>
<div style='text-align:center'>
		<p><?php echo html::submitButton($this->lang->register)?></p>
		<h1><?php echo $lang->board?></h1>
		<p><?php echo $lang->account . html::input('account')?></p>
		<p><?php echo $lang->password . html::input('password')?></p>
		<p><?php echo html::submitButton($this->lang->login)?></p>
		</div>

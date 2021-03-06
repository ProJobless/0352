<? 
$quiz_id = $this->uri->segment($BC->_getSegmentsOffset()+3);
$question_id = $this->uri->segment($BC->_getSegmentsOffset()+4);
?>

<p>
	<?=anchor($BC->_getBaseURI().'/questions_list/'.$quiz_id,language('questions_list'))?> 
	<?if(userAccess($BC->_getController(),'edit')):?>
		| <?=anchor($BC->_getBaseURI().'/questions_edit/'.$quiz_id.'/asc/0/'.$question_id,language('edit_question'))?>
	<?endif?>
</p>

<p><?=anchor($BC->_getBaseURI().'/answers_list/'.$quiz_id.'/'.$question_id,language('answers_list'))?></p>

<div class="red"><?=validation_errors()?></div>

<form action="" method="post">

<table class="list">
<tr>
	<td colspan="2"><span class="red">*</span> <?=language('required_fields')?>.</td>
</tr>
<tr>
	<td width="150"><?=$BC->_getFieldTitle("answer")?>: <span class="red">*</span></td>
	<td><?=form_input("answer",set_value('answer',@$answer),"class='largeinput'");?></td>
</tr>
<tr>
	<td><?=$BC->_getFieldTitle("correct")?>:</td>
	<td><?=form_dropdown("correct",array(0=>'No',1=>'Yes'),set_value('correct',@$correct));?></td>
</tr>
</table>

<p><?=form_submit("submit",language('save'));?></p>

</form>

<?$this->load->view('inc/js-tinymce')?>
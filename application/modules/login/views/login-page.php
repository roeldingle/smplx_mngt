<a href="<?php echo $common->list_sorter('t');?>">Title</a> <a href="<?php echo $common->list_sorter('s');?>">Status</a> | <a href="<?php echo $common->list_sorter('date');?>">Date3 Created</a>-->

<?php

$this->common->list_sorter('t');
?>

<?php

$aoption = array(
   "name"=>"myform",
   "method_type" => "post",
   "class" => "test",
   "onsubmit" => "test();",
   "module" =>"login",
   "controller" => "exec",
   "method" => "save"
);

$this->load->view('form');
$this->common->form_submit($aoption);
?>
<input type="text" name="firstname" /> <br />
<input type="text" name="lastname" /> <br />
<input type="submit" value="test" />
</form>

<?php
 echo $this->common->pager(300,10);
?>
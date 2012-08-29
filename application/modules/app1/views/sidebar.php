<div id="sidebar">  <!-- start of sidebar -->
    <ul>
      <li>
         <h3><a href="about.htm">Proin sollicitudin dignissim ligula sed vestibulum.</a></h3>
             <p>Vestibulum sed magna eu justo tempor facilisis sed ut felis. Ut vitae tortor neque, convallis lobortis enim.</p>
      </li>
      <li>
         <h3><a href="about.htm"> Quisque purus nisl, feugiat  vitae convallis eu</a></h3>
         <p>Nulla nunc magna, fringillavitae mattis insuscipitausto. Fusce laoreet, velit non feugiat laoreet, sem massa convallis tellus, et rutrum velit erat.</p>
      </li>
      <li>
          <h3><a href="about.htm">Nunc ullamcorper, velit quis  mattis eleifend </a></h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla tortor mauris, tempus in convallis in.</p>
      </li>
    </ul>

    <h3>Get In Touch</h3>
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
     $this->common->form_submit($aoption);



     ?>
         <table>
             <tr><td><input type="text" name="" value="Name" onblur="if(this.value==''){this.value=this.defaultValue;}" onfocus="if(this.value==this.defaultValue){this.value='';}" /></td></tr>
             <tr><td><input type="text" name="" value="Email" onblur="if(this.value==''){this.value=this.defaultValue;}" onfocus="if(this.value==this.defaultValue){this.value='';}" /></td></tr>
             <tr><td><textarea name="message" onblur="if(this.value==''){this.value=this.defaultValue;}" onfocus="if(this.value==this.defaultValue){this.value='';}">Message</textarea></td></tr>
             <tr><td><input type="submit" value="" class="button" /></td></tr>
         </table>
     </form>
</div>  <!-- end of sidebar -->

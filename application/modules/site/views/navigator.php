<ul class="mnb fr nl ar">
	 
		 <!--get menu-->
		 <?php 
			/*get the current url*/
				$aUrl = explode('/',$_SERVER['REQUEST_URI']);
				/*loop the menu/module data*/
				foreach($nav_menu as $val){
					$sCurrent = ($aUrl[1] == $val['tm_name'])? "current" : ""; # get the module name
					echo '<li class="fnt '.$sCurrent.'"><a href="'.base_url().$val['tm_action'].'">'.ucwords($val['tm_label']).'</a></li>';
				}

		 ?>
		 
		<li class="fnt nm"><a href="#">Login</a></li>
	 </ul>
 </div>
 <div id="content" class="np">
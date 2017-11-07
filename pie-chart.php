	<div class="right"><!--wrapper-->
		<?php 
			$tllink = get_field('top_left_link');
			$tl = get_field('top_left');
			$tlcurrent = get_field('top_left_current');
				if($tlcurrent[0] == 'Yes') {
					$tlcurrent = 'current';
				} else {
					$tlcurrent = '';
				}
			
			$trlink = get_field('top_right_link');
			$tr = get_field('top_right');
			$trcurrent = get_field('top_right_current');
				if($trcurrent[0] == 'Yes') {
					$trcurrent = 'current';
				} else {
					$trcurrent = '';
				}
			
			$blink = get_field('bottom_left_link');
			$bl = get_field('bottom_left');
				$blcurrent = get_field('bottom_left_current');
				if($blcurrent[0] == 'Yes') {
					$blcurrent = 'current';
				} else {
					$blcurrent = '';
				}
			
			$brlink = get_field('bottom_right_link');
			$br = get_field('bottom_right');
				$brcurrent = get_field('bottom_right_current');
				if($brcurrent[0] == 'Yes') {
					$brcurrent = 'current';
				} else {
					$brcurrent = '';
				}
		?>
		<div class="box-img one <?php echo $tlcurrent;?>">
			<a href="<?php echo $tllink;?>"><img src="<?php echo $tl['url'];?>" alt="<?php echo $tl['alt'];?>" class="tl" /></a>
		</div>
		<div class="box-img two <?php echo $trcurrent;?>">
			<a href="<?php echo $trlink;?>"><img src="<?php echo $tr['url'];?>" alt="<?php echo $tr['alt'];?>" class="tr" /></a>
		</div>
		<div class="box-img three <?php echo $blcurrent;?>">
			<a href="<?php echo $blink;?>"><img src="<?php echo $bl['url'];?>" alt="<?php echo $bl['alt'];?>" class="bl" /></a>
		</div>
		<div class="box-img four <?php echo $brcurrent;?>">
			<a href="<?php echo $brlink;?>"><img src="<?php echo $br['url'];?>" alt="<?php echo $br['alt'];?>" class="br" /></a>
		</div>
	</div><!--/right-->



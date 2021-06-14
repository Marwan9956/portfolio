</div>
<footer>
	<div class="container footer">
		<div class="logo">MR</div>
		<nav>
			<?php if(isset($projects)) :?>
				<a class="goProject" href="#projects">Projects</a>
			<?php else:?>
				<a href="<?php echo base_url();?>">Home</a>
			<?php endif;?>
   			<!-- <a href="<?php echo base_url('/contact'); ?>">Contact</a> -->
		</nav>
	</div>
</footer>

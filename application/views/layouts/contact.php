<section class="contact">
    <h2>Contact Me </h2>
    <p>Feel free to reach out to me at any time .</p>
    <div class="flex-2-col">
        <div>
            <img class="profileImg" src="<?php echo base_url('assets/img/myAvatar.png');?>"/>
        </div>
        <div class="personal_info">
            <h4>Marwan Saleh</h4>
            <p>marwan9956@gmail.com</p>
        </div>
    </div>
</section>
<div class="social-dev">
    <?php if(isset($links)):?>
    <div>
        <?php foreach($links as $link): ?>
        <a target="_blank" class="btn" href="<?php echo $link['url'] ?>"> 
            <?php echo $link['title']; ?>
        </a>
        <?php endforeach;?>
    </div>
    <?php endif;?>
</div>
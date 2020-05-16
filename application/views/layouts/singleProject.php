<?php if(isset($project)): ?>
<section class="projects">
    <h1><?php echo $project['title']; ?> :</h1>
    <div class="project">
        <div>
            <p><?php echo $project['description']; ?></p>
            <div class='tools'>
                <?php foreach($project['tools'] as $tool):?>
                    <a class="btn"><?php echo $tool?></a>
                <?php endforeach;?>
            </div>
        </div>
        <div>
            <img src="<?php echo base_url('/assets/img/') . $project['projectImg'];?>"/>
        </div>
        
    </div>
    <div class="center">
        <a href="<?php echo $project['link'];?>" class="btn btn-black">See Project</a>
    </div>
</section>
<?php else:?>
    <?php redirect(base_url()); ?>
<?php endif;?>
<?php //End Loop?>
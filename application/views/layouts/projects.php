<?php if(!isset($projects)){} ?>
<?php //Loop  ?>
<section id="projects" class="projects">
    <h1>Projects :</h1>
    <?php if(isset($projects)):?>
        <?php foreach($projects as $project):?>
        <div class="project">
            <div>
                <h2><a class="project_link" href="<?php echo $project['link'];?>"><?php echo $project['title']; ?></a></h2>
                <h5>Tools</h5>
                <div class='tools'>
                    <ul>
                    <?php foreach($project['tools'] as $tool):?>
                        <li><?php echo $tool; ?></li>
                    <?php endforeach;?>
                    </ul>
                </div>
                <a target="_blank" class="btn btn-black" href="<?php echo $project['link'];?>" >Link </a>
                <?php if(isset($project['backend'])):?>
                <a target="_blank" class="btn btn-black" href="<?php echo $project['backend'];?>" >Back end  </a>
                <?php endif;?>
                <a class="btn btn-black" href="<?php echo base_url('/projects/') . $project['id'];?>">About  </a>
            </div>
            <div>
                <img src="<?php echo base_url('assets/img/') . $project['projectImg']; ?>"/>
            </div>
            
        </div>
        <?php endforeach;?>
    <?php endif;?>
    <hr>
    
</section>
<hr>
<?php //End Loop?>
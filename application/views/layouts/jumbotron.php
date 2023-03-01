<section class="jumbotron">
    <h1 class="hello">Hello</h1>
    <h1>I'm Marwan Saleh</h1>
    <h2> 3D artist and  Developer </h2>
    <p>marwan9956@gmail.com</p>
    
    <?php if(isset($links)):?>
    <div>
        <?php foreach($links as $link): ?>
        &nbsp;&nbsp;
        <a target="_blank" class="btn" href="<?php echo $link['url'] ?>"> 
            <?php echo $link['title']; ?>
        </a>
        <?php endforeach;?>
    </div>
    <?php endif;?>
</section>
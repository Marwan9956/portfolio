<section class="jumbotron">
    <h1 class="hello">Hello</h1>
    <h1>I'm Marwan Saleh</h1>
    <h2> Full Stack Web Developer </h2>
    <p>Freelance Web developer </p>
    
    <?php if(isset($links)):?>
    <div>
        <?php foreach($links as $link): ?>
        <a target="_blank" class="btn" href="<?php echo $link['url'] ?>"> 
            <?php echo $link['title']; ?>
        </a>
        <?php endforeach;?>
    </div>
    <?php endif;?>
</section>
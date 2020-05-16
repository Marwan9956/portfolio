<div class="margin_t"></div>
<div class="contact-form">
    <h1>Contact Me: </h1>
    <hr>

    <?php echo validation_errors('<div class="msg msg_err">','</div>'); ?>
    <form method="post" action="<?php echo base_url('/contact') ?>">
        <div class="inp">
            <label for="name"> Name :</label>
            <input type="text" name="name" id="name" value="<?php echo set_value('name'); ?>" />
        </div>

        <div class="inp">
            <label for="email"> Email :</label>
            <input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" />
        </div>

        <div class="inp">
            <label for="subject"> Subject :</label>
            <input type="text" name="subject" id="subject" value="<?php echo set_value('subject'); ?>" />
        </div>

        <div class="inp">
            <label for="message"> Message :</label>
            <textarea  name="message" id="message"><?php echo set_value('message'); ?></textarea>
        </div>

        <input type="submit" class="btn btn-black btn-large" value="Send" name="send" />
    </form>
</div>
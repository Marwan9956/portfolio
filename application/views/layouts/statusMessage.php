<?php if($this->session->flashdata('success')): ?>
    <div class="msg msg_success">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<?php if($this->session->flashdata('error')): ?>
    <div class="msg msg_err">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>
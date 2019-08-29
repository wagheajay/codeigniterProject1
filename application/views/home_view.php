
<!-- this will run if login condition success -->
<p class="bg-success">
<?php if($this->session->flashdata('login_success')): ?>

<?php echo $this->session->flashdata('login_success'); ?>

<?php endif; ?>

</p>

<!-- this will run if login condition failed -->
<p class="bg-danger">
<?php if($this->session->flashdata('login_failed')): ?>

<?php echo $this->session->flashdata('login_failed'); ?>



<?php endif; ?>

</p>


<h1>User Login Area </h1>
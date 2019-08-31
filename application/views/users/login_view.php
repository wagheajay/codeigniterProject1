
<!-- this is used to keep user status logged in  -->
<!-- starts here -->
<?php if($this->session->userdata('logged_in')):?>
<h2>Welcome</h2>

<p class="bg-success">
<?php if($this->session->userdata('username')):  ?>

<?php echo "You are logged in as ".$this->session->userdata('username');?>

<?php endif;?>

</p>

<?php echo form_open('users/logout')?>

<?php   
   
   $data = array(

    'class' => 'btn btn-primary',
    'name' => 'submit',
    'value' => 'Logout'

   );
?>

<?php  echo form_submit($data);  ?>

<?php form_close()?>



<?php else:?>
<!-- if not logged in else will show content below -->


<h1>Login Form</h1>



<?php
//this will add attributes to form like id="login_form" class="form_horizontal"

$attributes = array('id' => 'login_form', 'class' => 'form_horizontal');
?>

<!-- this is to throw session error for form_validation -->
<!-- if endif start -->

<?php if( $this->session->flashdata('errors'))://flashdata?>
 <?php echo $this->session->flashdata('errors');?>
<?php endif; ?>
<!-- if endif finish -->








<?php
//createing form using codeigniter
//this will open form
echo form_open('/users/login', $attributes);
// this will do like

//<form action=""></form>
?>



<!-- this class is from bootstrap -->
<div class="form-group">

<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    
    'class'=> 'form-control',
    'name'=> 'username',
    'placeholder'=> 'Enter Username',
    'autocomplete' =>"off"

    );
    ?>

     <?php  echo form_label("Username")."<br>";  ?>
     <?php echo form_input($form_data); //means input type text?>
     
</div>





<!-- this class is from bootstrap -->
<div class="form-group">
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    
    'class'=> 'form-control',
    'name'=> 'password',
    'placeholder'=> 'Enter Password',
    'autocomplete' =>"off"

    );
    ?>

     <?php  echo form_label("Password")."<br>";  ?>
     <?php echo form_password($form_data); //means input type password?>
     
</div>

<!-- this class is from bootstrap -->
<div class="form-group">
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    
    'class'=> 'form-control',
    'name'=> 'confirm_password',
    'placeholder'=> 'Confirm Password',
    'autocomplete' =>"off"

    );
    ?>

     <?php  echo form_label("Confirm Password")."<br>";  ?>
     <?php echo form_password($form_data); //means input type password?>
     
</div>

<!-- this class is from bootstrap -->
<div class="form-group">
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    
    'class'=> 'btn btn-primary btn-block',
    'name'=> 'submit',
    'value' => 'Login'

    );
    ?>
     <?php echo form_submit($form_data); //means input type submit btn?>
     
</div>



<?php
//this will close form
echo form_close();
?>

<?php endif;?><!-- endif from condition that show logged in user  -->
<!-- logged in ends here -->
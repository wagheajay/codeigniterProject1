




<h1>Register Form</h1>



<?php
//this will add attributes to form like id="login_form" class="form_horizontal"

$attributes = array('id' => 'register_form', 'class' => 'form_horizontal');
?>

<?php echo validation_errors("<p class='bg-danger'>");?>







<?php
//createing form using codeigniter
//this will open form
echo form_open('/users/register', $attributes);
// this will do like
//<form action=""></form>
?>

<!-- First name  -->
<div class="form-group">

<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    
    'class'=> 'form-control',
    'name'=> 'first_name',
    'placeholder'=> 'Enter First Name',
    'autocomplete' =>"off"

    );
    ?>

     <?php  echo form_label("First Name")."<br>";  ?>
     <?php echo form_input($form_data); //means input type text?>
     
</div>

<!-- last name -->
<div class="form-group">

<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    
    'class'=> 'form-control',
    'name'=> 'last_name',
    'placeholder'=> 'Enter Last Name',
    'autocomplete' =>"off"

    );
    ?>

     <?php  echo form_label("Last Name")."<br>";  ?>
     <?php echo form_input($form_data); //means input type text?>
     
</div>

<!-- email -->

<div class="form-group">

<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    
    'class'=> 'form-control',
    'name'=> 'email',
    'placeholder'=> 'Enter Email',
    'autocomplete' =>"off"

    );
    ?>

     <?php  echo form_label("E-mail")."<br>";  ?>
     <?php echo form_input($form_data); //means input type text?>
     
</div>



















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
    
    'class'=> 'btn btn-primary',
    'name'=> 'submit',
    'value' => 'Register'

    );
    ?>
     <?php echo form_submit($form_data); //means input type submit btn?>
     
</div>



<?php
//this will close form
echo form_close();
?>
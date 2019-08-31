<?php

class User_model extends CI_Model{






    public function create_user(){


        $options = ['const'=>12];
          
        //using password_hash() function to hash password we can pass three or two parameters for security
          $encrypted_password = password_hash( $this->input->post('password'),PASSWORD_BCRYPT,$options);


          $data = array(

            'first_name'  => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $encrypted_password
                
       );
           $insert_data = $this->db->insert('users',$data);

        return $insert_data;
            

        


    }
    

    public function login_user($username,$password){


        $this->db->where('username',$username);
       // $this->db->where('password',$password);

        $result = $this->db->get('users');
        //because password is hash'ed we have to check verify hash with user entered password
        $db_password_hash = $result->row(2)->password;

        //if password not hashed/plaintext
        //$result->num_rows() == 1 we can use like this

        //if not using like below using  password_verify()
        //first parameter will be  user enetered password 
        //and 2nd parameter will be password hash from database to verify
        //password match or not


        if(password_verify($password,$db_password_hash)){

            return $result->row(0)->id;
        }
        else{
            return false;
        }

    }



}
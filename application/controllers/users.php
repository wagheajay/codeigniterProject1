<?php


class Users extends CI_Controller {






    public function register(){
        $this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');


        if($this->form_validation->run() == FALSE){

        $data['main_view'] = 'users/register_view';
        $this->load->view('layouts/main',$data);
        
        }else{

        
                     if($this->user_model->create_user()){
                     $this->session->set_flashdata('User_Registerd','User registered successfully ! Login Now');
                 redirect('home/index');

                }
                
           
            
            else
            {
                echo"something wrong";
            } 
            
        }
    
            
           

        }




    //check database and login user
    public function login(){

         //this is regular way to get post data
        // echo "username:"   .$_POST['username']."<br>";
        // echo "password:"   .$_POST['password']."<br>";

        //and this is code igniter framework way of doing it
        //echo "Username Is : ".$this->input->post('username');

        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');


        if($this->form_validation->run()==FALSE)
        {

            $data=array(
                'errors'=>validation_errors()
            );

            $this->session->set_flashdata($data);//set flashdata

            redirect('home');

        }

        else{


            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username,$password);


            if($user_id){

                $user_data = array(

                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success','You are logged in successfully !');
               // redirect('home/index');
               $data['main_view'] = "users/admin_view";

               $this->load->view('layouts/main',$data);
       
            }
            else{

                $this->session->set_flashdata('login_failed',"Sorry ! Login Failed");
                redirect('home/index');

            }


        }

    }




    //logout user session
    public function logout(){


        $this->session->sess_destroy();// sess_destroy()

        redirect('home/index');
    }
}

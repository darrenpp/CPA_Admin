<?php


class admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/header/header');
        $this->load->view('admin/header/css');
        $this->load->view('admin/header/navleft');
        $this->load->view('admin/header/navtop');
        $this->load->view('admin/home/index.php');
        $this->load->view('admin/header/footer');
        $this->load->view('admin/header/htmlclose');

    }

    public function login()
    {

        $this->load->view('admin/login');

    }


        public function checkAdmin($data)
        {
            $data ['email'] = $this->input->post('email', true);
            $data['password'] =  $this->input->post('password', true);
            if (!empty($data['email']) && !empty($data['password'])){
                $admin = $this->ModAdmin->checkAdmin($data);

                if (count($admin)== 1) {
                    echo 'found';
                }else {
                    echo 'not found';
                }

        }
            else{
                $this->session->set_flashdata('error, Please check required fields');
                redirect('admin/login');
            }





        }






}//class ends here

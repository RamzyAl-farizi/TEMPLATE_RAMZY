<?php
defined('BASEPATH') or exit('no direct script access allowed');

class web extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_header');
        $this->load->view('v_index');
        $this->load->view('v_footer');
    }

    public function about()
    {
        $this->load->view('v_header');
        $this->load->view('v_about');
        $this->load->view('v_footer');
    }

    public function profile()
    {
        $this->load->view('v_header');
        $this->load->view('v_profile');
        $this->load->view('v_footer');
    }
}
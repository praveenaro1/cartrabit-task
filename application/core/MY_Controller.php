<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    var $template  = array();
    var $data      = array();
    

    public function getLayout()
    {
        $this->template['header_scripts'] = $this->load->view('includes/admin/header_scripts', $this->data, true);
        $this->template['top_navigation'] = $this->load->view('includes/admin/top_navigation', $this->data, true);
        $this->template['side_navigation'] = $this->load->view('includes/admin/side_navigation', $this->data, true);
        $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
        $this->template['theme_control'] = $this->load->view('includes/admin/theme_control', $this->data, true);
        $this->template['footer'] = $this->load->view('includes/admin/footer', $this->data, true);
        $this->template['footer_scripts'] = $this->load->view('includes/admin/footer_scripts', $this->data, true);
        $this->load->view('includes/admin/index', $this->template);
    }

    public function getFrontLayout()
    {
        $this->template['header_scripts'] = $this->load->view('includes/front/header_scripts', $this->data, true);
        $this->template['top_navigation'] = $this->load->view('includes/front/top_navigation', $this->data, true);
        $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
        $this->template['footer'] = $this->load->view('includes/front/footer', $this->data, true);
        $this->template['footer_scripts'] = $this->load->view('includes/front/footer_scripts', $this->data, true);
        $this->load->view('includes/front/index', $this->template);
    }   
}

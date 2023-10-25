<?php

class Home extends Controller {
    public function index() {
        // echo "home/index";
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->views('templates/header', $data);
        $this->views('home/index', $data);
        $this->views('templates/footer');
    }
}
<?php

class PagesController extends Controller {
    public function home() {
        $this->view('pages/home');
    }

    public function about() {
        $this->view('pages/about');
    }

    public function contact() {
        $this->view('pages/contact');
    }
}

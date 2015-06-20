<?php

namespace App\Controller;

class Hello extends \App\Page {

    public function action_index() {
        $this->view->subview = 'list_customers';
        $this->view->customers = $this->pixie->orm->get('customer')->find_all();
    }

}

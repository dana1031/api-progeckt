<?php

namespace App\Views;

use App\App;

class Navigation extends \Core\View {

    public function __construct($data = []) {
        parent::__construct($data);

        $this->addLink('left', '/', 'Home');
        
        if (App::$session->userLoggedIn()) {
            $user = App::$session->getUser();
//            $label = $user->getEmail();
            $label = $user->getName();
            $this->addLink('right', '/logout.php', "Logout($label)");
            $this->addLink('right', '/about.php',"About");
            $this->addlink('right', '/cars.php', "Cars");
        } else {
            
            $this->addLink('right','https://google.lt', 'Win');
            $this->addLink('right', '/login.php', 'Prisijungti');
            $this->addLink('right', '/register.php', 'Registruotis');            
        }
    }

    public function addLink($section, $url, $title) {
        $link = ['url' => $url, 'title' => $title];
        
        if ($_SERVER['REQUEST_URI'] == $link['url']) {
            $link['active'] = true;
        }
        
        $this->data[$section][] = $link;
    }

    public function render($template_path = ROOT . '/app/templates/navigation.tpl.php') {
        return parent::render($template_path);
    }

}

<?php
 
class Menu_model extends CI_Model {
 
    private $menu_items;
     
    function __construct() {
        parent::__construct();
        $this->menu_items = array(
            array('name' => 'Homepage', 'img' => 'icons8-home-50.png', 'link' => 'home', 'className' => 'active'),
            array('name' => 'Resident', 'img' => 'icons8-customer-50.png', 'link' => 'selectTopic', 'className' => 'inactive'),
            array('name' => 'Statistics', 'img' => 'icons8-combo-chart-50.png', 'link' => '', 'className' => 'inactive'),
            array('name' => 'Message', 'img' => 'icons8-message-50.png', 'link' => '', 'className' => 'inactive'),
            array('name' => 'Settings', 'img' => 'icons8-settings-50.png', 'link' => 'settings', 'className' => 'inactive'),
            array('name' => 'Logout', 'img' => 'icons8-exit-50.png', 'link' => '', 'className' => 'inactive')
        );
    }
     
    function set_active($menutitle) {
        foreach ($this->menu_items as &$item) { // reference to item!!
            if (strcasecmp($menutitle, $item['name']) == 0) {
                $item['className'] = 'active';
            } else {
                $item['className'] = 'inactive';
            }
        }
    }
     
    function get_menuitems($menutitle) {
        $this->set_active($menutitle);
        return $this->menu_items;
    }
     
}
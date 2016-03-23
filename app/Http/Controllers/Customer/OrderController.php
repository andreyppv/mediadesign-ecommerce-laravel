<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\Customer;
use Input, Validator, Redirect;

class OrderController extends FrontController {
    protected $page_title = 'Order History';
    protected $page_menu = 'orders';
    public function __construct()
    {
        parent::__construct();
        
        // Check customer is logged in
        $this->auth->restrict();
    }

    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        return $this->view('customer.orders');   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////   
    
    ////////////////////////////////////////////////////////////////
    // Private Functions
    ////////////////////////////////////////////////////////////////
    
    ////////////////////////////////////////////////////////////////
    // Ajax Functions
    ////////////////////////////////////////////////////////////////

}
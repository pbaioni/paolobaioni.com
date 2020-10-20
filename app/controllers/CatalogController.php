<?php

class CatalogController {

    /**
     * Function to display store homepage with specific informations
     * 
     * @var $viewVars [array] Optionnal - Set of informations used for page content
     * 
     */
    public function store() 
    {
        $viewVars = [
            'openingHours'  => [
                'Monday'    => '7:00 AM to 8:00 PM',
                'Tuesday'   => '7:00 AM to 8:00 PM',
                'Wednesday' => '7:00 AM to 8:00 PM',
                'Thursday'  => '7:00 AM to 8:00 PM',
                'Friday'    => '7:00 AM to 8:00 PM',
                'Saturday'  => '9:00 AM to 5:00 PM',
                'Sunday'    => 'Closed', 
            ],
            'key2'          => 'value',
        ];

        $controller = new MainController();
        $controller->show('store', $viewVars);

    }

    /**
     * Function to display a product 
     * @param $p_params - product_id set in parameters when mapping url and transmitted through the result of match() (array $match[params])
     */
    public function product($p_params) 
    {
        $controller = new MainController();
        $controller->show('product', $p_params);

    }

   


}
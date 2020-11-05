<?php

    class Home extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['tag_page'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ea, voluptas repudiandae beatae exercitationem necessitatibus? Numquam enim aperiam fugit sit nemo? Suscipit dicta officiis, totam non vero ut dolore tempora?"; 
           $this->views->getView($this, "home", $data);
        }

        /* public function datos($params)
        {
            echo "Dato recibido: ".$params;
        }

        public function carrito($params)
        {
            $carrito = $this->model->getCarrito($params);
            echo $carrito;
        } */

    }

?>
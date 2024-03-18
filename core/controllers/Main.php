<?php

namespace core\controllers;

use core\classes\Sistema;

class Main
{

    public function index()
    {
        Sistema::Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    public function onu()
    {
        Sistema::Layout([
            'layouts/html_header',
            'layouts/header',
            'onu',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    
    public function ont()
    {
        Sistema::Layout([
            'layouts/html_header',
            'layouts/header',
            'ont',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

        
    public function tr069()
    {
        Sistema::Layout([
            'layouts/html_header',
            'layouts/header',
            'tr069',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    public function planos_internet()
    {
        Sistema::Layout([
            'layouts/html_header',
            'layouts/header',
            'planos_internet',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    public function planos_telefone()
    {
        Sistema::Layout([
            'layouts/html_header',
            'layouts/header',
            'planos_telefone',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    public function planos_tv()
    {
        Sistema::Layout([
            'layouts/html_header',
            'layouts/header',
            'planos_tv',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

}

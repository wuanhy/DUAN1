<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),
    'login' => (new HomeController) -> login(),
    'register' => (new HomeController) -> register(),
    'about'     =>(new HomeController) ->about(),
    'introduction'     =>(new HomeController) ->introduction(),
    'blog'     =>(new HomeController) ->blog(),
    'faq'     =>(new HomeController) ->faq(),

    'admin-dashboard'=>(new DashboardController)->index(),




    








   





};
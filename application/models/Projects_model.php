<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects_model extends CI_Model {
    public function getProjects(){
        if($_SERVER['SERVER_NAME'] === 'localhost'){
            $serverName = 'http://'. $_SERVER['SERVER_NAME'];
        }else{
            $serverName = 'https://'. $_SERVER['SERVER_NAME'];
        }
        $projects = [
            [
                'id'          =>  1,
                'projectType' => 'portfolio',
                'title'       => 'Sport news',
                'description' => 'laravel vue js app for real time news and headlines backend in laravel front end with vue js to see site click on front end.',
                'tools'       => ['laravel', 'vuejs' ,'HTML','CSS','PHP','postgresql'],
                'projectImg'  => 'sport_news.jpg',
                'link'        => 'http://marwan-sport-news.herokuapp.com'
            ],
            [
                'id'          => 2,
                'projectType' => 'portfolio',
                'title'       => 'Indeed Clone',
                'description' => 'codeigniter web app trying to create a prototype of main features in indeed site includes job search post job apply for jobs login system ',
                'tools'       => ['HTML','JAVASCRIPT','CSS', 'jQuery','PHP','MYSQL','Codeigniter'],
                'projectImg'  => 'indeed_clone.jpg',
                'link'        => 'https://marwan9956.000webhostapp.com/indeed/'
            ]
        ];
        if(empty($projects)){
            throw new siteException('Error : No Projects Available');
        }
        return $projects;
    }

    public function getLinks(){
        $links = [
            [
                'title' => 'Codesignal',
                'url'   => 'https://app.codesignal.com/profile/marwan9956'
            ],
            [
                'title' => 'Github',
                'url'   => 'https://github.com/Marwan9956'
            ],
            [
                'title' => 'Freecodecamp',
                'url'   => 'https://www.freecodecamp.org/marwan9956'
            ]
        ];
        return $links;
    }

}

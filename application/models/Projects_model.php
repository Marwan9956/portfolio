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
                'title'       => 'Bookmark',
                'description' => 'codeigniter Basic web app for Bookmarks implement login and crud operations ',
                'tools'       => ['HTML','CSS','PHP','MYSQL','Codeigniter'],
                'projectImg'  => 'bookmark.jpg',
                'link'        => $serverName.'/bookmark'
            ],
            [
                'id'          => 2,
                'projectType' => 'portfolio',
                'title'       => 'Indeed Clone',
                'description' => 'codeigniter web app trying to create a prototype of main features in indeed site includes job search post job apply for jobs login system ',
                'tools'       => ['HTML','JAVASCRIPT','CSS', 'jQuery','PHP','MYSQL','Codeigniter'],
                'projectImg'  => 'indeed_clone.jpg',
                'link'        => $serverName.'/indeed'
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

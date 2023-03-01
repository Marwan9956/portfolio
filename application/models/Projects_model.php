<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects_model extends CI_Model {
    public function getProjects(){
        if($_SERVER['SERVER_NAME'] === 'localhost'){
            $serverName = 'http://'. $_SERVER['SERVER_NAME'];
        }else{
            $serverName = 'https://'. $_SERVER['SERVER_NAME'];
        }
        /*
        [
                'id'          => 4,
                'projectType' => 'portfolio',
                'title'       => 'rest api',
                'description' => 'rest api done in Laravel ',
                'tools'       => ['PHP','Mysql','Laravel'],
                'projectImg'  => 'restapi.jpg',
                'link'        => 'https://rest.marwansaleh.com/'
            ]
        */
        $projects = [
            [
                'id'          => 1,
                'projectType' => 'portfolio',
                'title'       => 'Indeed Clone',
                'description' => 'codeigniter web app trying to create a prototype of main features in indeed site includes job search post job apply for jobs login system ',
                'tools'       => ['HTML','JAVASCRIPT','CSS', 'jQuery','PHP','MYSQL','Codeigniter'],
                'projectImg'  => 'indeed_clone.jpg',
                'link'        => 'https://indeed.marwansaleh.com/'
            ],
            [
                'id'          =>  2,
                'projectType' => 'portfolio',
                'title'       => 'Sport news',
                'description' => 'laravel vue js app for real time news and headlines backend in laravel front end with vue js to see site click on front end. to check the web site you can login in backend link with email: marwan@marwansaleh.com , Password : 123456789',
                'tools'       => ['laravel', 'vuejs' ,'HTML','CSS','PHP','postgresql'],
                'projectImg'  => 'sport_news.jpg',
                'link'        => 'https://github.com/Marwan9956/sport_news',
            ],
			[
                'id'          => 3,
                'projectType' => 'portfolio',
                'title'       => 'Quiz App',
                'description' => 'Laravel quiz app that has front end part to show quiz by topic in /quiz  and backend on /admin where you can add subject or add question and edit them  , if you want admin part it is on http://quizweb-site.herokuapp.com/admin',
                'tools'       => ['HTML','JAVASCRIPT','CSS','PHP','PostegreSql','Laravel'],
                'projectImg'  => 'quiz.jpg',
                'link'        => 'https://github.com/Marwan9956/quiz'
                
            ],
            [
                'id'          => 5,
                'projectType' => 'portfolio',
                'title'       => 'Angular Random quotes app ',
                'description' => 'Angular app to generate random quotes , getting quotes using http call and randomize colors on clicking new quotes with two share buttons for twitter and tumblar',
                'tools'       => ['Angular','http','typescript' , 'html' , 'css' , 'bootstrap'],
                'projectImg'  => 'randomQuotes.jpg',
                'link'        => 'https://marwansaleh.com/quotes/'
            ],
            [
                'id'          => 6,
                'projectType' => 'portfolio',
                'title'       => 'Angular Youtube search app ',
                'description' => 'Angular app that fetch youtube api and return youtube videos using angular http',
                'tools'       => ['Angular','http','typescript' , 'html' , 'css' , 'bootstrap'],
                'projectImg'  => 'youtube-api.jpg',
                'link'        => 'https://marwansaleh.com/youtubeapi/'
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
                'title' => 'Artstation',
                'url'   => 'https://marwan.artstation.com/'
            ],
            [
                'title' => 'VFX real time Samples',
                'url'   => 'https://www.dropbox.com/sh/8x8ngkzt32gdim0/AADR1groM63pDFyeC1ejnrnPa?dl=0'
            ],
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

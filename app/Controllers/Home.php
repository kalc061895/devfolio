<?php


namespace App\Controllers;
use App\Models\General;
class Home extends BaseController
{

    public function index(): string
    {
        $setData = array(
            'entries' => $this->lastEntries(),
            'projects' => $this->lastProjects(),

        );
        return view('assets/header').
        view('assets/main',$setData ).
        view('assets/footer');
    }

    function lastProjects() : array {
        
        $general = new General();
        $lastProjects = $general->selectSomeData(
                'pro_ide as ide,
                pro_name as title,
                pro_date as date_create,
                pro_category as category,
                pro_link as link,
                pro_images as images','quilla_project',
                'pro_status = 1',
                'pro_date DESC',
                false,6
            );

        return $lastProjects;
    }

    function lastEntries() : array {
        
        $general = new General();
        $lastEntries = $general->selectSomeData(
                'blo_ide as ide,
                blo_title as title,
                SUBSTR(blo_description,200) as resume,
                blo_date as date_create,
                blo_category as category,
                blo_author as author,
                blo_link as link,
                blo_images as images',
                'quilla_blog',
                'blo_status = 1',
                'blo_date DESC',
                false,3
            );

        return $lastEntries;
    }

    function getShowProject($pro_ide) : string {

        $general = new General();
        $setData = array(
            'project'=> $general->selectSomeData(
                '*',
                'quilla_project',
                'pro_ide = '.$pro_ide),
        );

        return view('portafolio/portafolio_individual',$setData);
    }

    function loadHead($title=false)  {
        $general = new General();
        $demos = $general->selectSomeData(
            '*','quilla_project',false,'pro_category'
        );
        $info = array(
            'title'=> '',
            'description'=> '',
            'image'=> '',
            'url'=> '',
            'type'=> '',
            'site_name'=> '',
        );
        $data = array(
            'title' => $title,
            'demos' => $demos,
            'og' => $info
        );

        return view('assets/header',$data);
    }

    
    function postRecibirMensaje() {
        
        return '';
    }

}

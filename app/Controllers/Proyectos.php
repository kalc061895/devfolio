<?php


namespace App\Controllers;
use App\Models\General;

class Proyectos extends BaseController
{
    public function getIndex(): string
    {
        
        return view('assets/header').
        view('portafolio/menu').
        view('assets/footer');
    }

    function getProjectById() : string  {
        $Ageneral =new General();
        $response = array(
            'project'=> $Ageneral->selectSomeData('*','quilla_project',
                array(
                    'pro_ide'=>$this->request->getGet('pro_ide'),
                    'pro_status'=>1
                )
            )
        );
        if ($response) {
            return json_encode($response[0]);
            
        }
        else{
            $fail = array(
                'error' => 'No se encontro el projecto');
            return json_encode($fail);
        }
    }

    function getFindProjectByContent() : string  {
        
        $Ageneral =new General();
        $response = array(
            'project'=> $Ageneral->selectSomeData('*','quilla_project',
            "pro_description like '%".$this->request->getGet('key_word')."%' AND pro_status = 1")
        );

        if ($response) {
            return json_encode($response);
            
        }
        else{
            $fail = array(
                'error' => 'No se encontraron coincidencias');
            return json_encode($fail);
        }
    }

    
    function getAllProjects() : string  {
        
        $Ageneral =new General();
        $response = array(
            'project'=> $Ageneral->selectSomeData('*','quilla_project',
            "pro_status = 1")
        );

        if ($response) {
            return json_encode($response);
            
        }
        else{
            $fail = array(
                'error' => 'No se encontraron projectos');
            return json_encode($fail);
        }
    }
    
    function getProjectsList($category = false) : string  {
        
        $Ageneral =new General();
        $response = array(
            'project'=> $Ageneral->selectSomeData(
                'pro_ide as ide,
                pro_name as name,
                pro_link as link,
                pro_category as category',
                'quilla_project',
                "pro_status = 1 ".(($category)? "AND pro_category =  '".$category."'":'' ),
            )
        );

        if ($response) {
            return json_encode($response);
            
        }
        else{
            $fail = array(
                'error' => 'No se encontraron projectos de esta categoría');
            return json_encode($fail);
        }
    }

    function getShowProject($pro_ide) : string {

        $general = new General();
        $setData = array(
            'project'=> $general->selectSomeData(
                '*',
                'quilla_project',
                'pro_ide = '.$pro_ide),
        );

        return view('assets/header').
            view('portafolio/portafolio_individual',$setData).
            view('assets/footer');
    }


}

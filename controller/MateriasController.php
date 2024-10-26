<?php

require_once 'BaseController.php';

class MateriasController extends BaseController 
{
    public function index(Request $request) 
    {
        $page = $request->get('page') ?? 1;
        $search = $request->get('search')??'';
        $params = $search ? ['search'=> $search]: [];

        
        $data= DB::table('asignaturas')->where('name', 'LIKE', '%'.$search.'%')->paginate(15, $page); 
        $materias = $data -> getItems();
        $paginador = $data->renderPagination('/materias',$params);
        
        return $this->view('materias/index', 
        [
            'materias' => $materias,
            'paginator' => $paginador,
            'search'=> $search 
        ]
    );
    }
}

<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Activite\AddRequestActivite;
use App\Application\Requests\Admin\Activite\UpdateRequestActivite;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\ActivitesDataTable;
use App\Application\Model\Activite;
use Yajra\Datatables\Request;
use Alert;

class ActiviteController extends AbstractController
{
    public function __construct(Activite $model)
    {
        parent::__construct($model);
    }

    public function index(ActivitesDataTable $dataTable){
        return $dataTable->render('admin.activite.index');
    }

    public function show($id = null){
        return $this->createOrEdit('admin.activite.edit' , $id);
    }

     public function store(AddRequestActivite $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('admin/activite');
     }

     public function update($id , UpdateRequestActivite $request){
          $item =  $this->storeOrUpdate($request , $id , true);
          return redirect()->back();
     }


    public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.activite.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/activite')->with('sucess' , 'Done Delete activite From system');
    }
}

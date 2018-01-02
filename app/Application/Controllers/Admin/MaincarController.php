<?php
 namespace App\Application\Controllers\Admin;
 use App\Application\Requests\Admin\Maincar\AddRequestMaincar;
use App\Application\Requests\Admin\Maincar\UpdateRequestMaincar;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\MaincarsDataTable;
use App\Application\Model\Maincar;
use Yajra\Datatables\Request;
use Alert;
 class MaincarController extends AbstractController
{
    public function __construct(Maincar $model)
    {
        parent::__construct($model);
    }
     public function index(MaincarsDataTable $dataTable){
        return $dataTable->render('admin.maincar.index');
    }
     public function show($id = null){
        return $this->createOrEdit('admin.maincar.edit' , $id);
    }
      public function store(AddRequestMaincar $request){
          $item =  $this->storeOrUpdate($request , null , true);
            if(count($request->brand_id) > 0){
   $item->brand()->sync($request->brand_id);
  }
          return redirect('admin/maincar');
     }
      public function update($id , UpdateRequestMaincar $request){
          $item =  $this->storeOrUpdate($request , $id , true);
          		if(count($request->brand_id) > 0){
			$item->brand()->sync($request->brand_id);
		}
          return redirect()->back();
     }
      public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.maincar.show' , $id , ['fields' =>  $fields]);
    }
     public function destroy($id){
        return $this->deleteItem($id , 'admin/maincar')->with('sucess' , 'Done Delete maincar From system');
    }
}

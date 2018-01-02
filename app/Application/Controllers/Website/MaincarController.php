<?php
 namespace App\Application\Controllers\Website;
 use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Maincar;
use App\Application\Requests\Website\Maincar\AddRequestMaincar;
use App\Application\Requests\Website\Maincar\UpdateRequestMaincar;
 class MaincarController extends AbstractController
{
      public function __construct(Maincar $model)
        {
            parent::__construct($model);
        }
         public function index(){
            $items = $this->model->paginate(env('PAGINATE'));
            return view('website.maincar.index' , compact('items'));
        }
         public function show($id = null){
            return $this->createOrEdit('website.maincar.edit' , $id);
        }
       public function store(AddRequestMaincar $request){
          $item =  $this->storeOrUpdate($request , null , true);
            if(count($request->brand_id) > 0){
   $item->brand()->sync($request->brand_id);
  }
          return redirect('maincar');
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
            return $this->createOrEdit('website.maincar.show' , $id , ['fields' =>  $fields]);
        }
         public function destroy($id){
            return $this->deleteItem($id , 'maincar')->with('sucess' , 'Done Delete Maincar From system');
        }
  }

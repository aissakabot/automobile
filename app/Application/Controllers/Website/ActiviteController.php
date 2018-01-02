<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Activite;
use App\Application\Requests\Website\Activite\AddRequestActivite;
use App\Application\Requests\Website\Activite\UpdateRequestActivite;

class ActiviteController extends AbstractController
{

     public function __construct(Activite $model)
        {
            parent::__construct($model);
        }

        public function index(){
            $items = $this->model->paginate(env('PAGINATE'));
            return view('website.activite.index' , compact('items'));
        }

        public function show($id = null){
            return $this->createOrEdit('website.activite.edit' , $id);
        }


     public function store(AddRequestActivite $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('activite');
     }

     public function update($id , UpdateRequestActivite $request){
          $item =  $this->storeOrUpdate($request , $id , true);
          return redirect()->back();
     }


        public function getById($id){
            $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
            return $this->createOrEdit('website.activite.show' , $id , ['fields' =>  $fields]);
        }

        public function destroy($id){
            return $this->deleteItem($id , 'activite')->with('sucess' , 'Done Delete Activite From system');
        }


}

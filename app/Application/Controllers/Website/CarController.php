<?php
 namespace App\Application\Controllers\Website;
 use App\Application\Controllers\AbstractController;
use Alert;
use Illuminate\Http\Request;
use App\Application\Model\Car;
use App\Application\Requests\Website\Car\AddRequestCar;
use App\Application\Requests\Website\Car\UpdateRequestCar;
 class CarController extends AbstractController
{
      public function __construct(Car $model)
        {
            parent::__construct($model);
        }

      public function index(Request $request){
          $items = $this->model;
if($request->has('brand')){
  $items=$items->where('brand_id',$request->brand);
  
}
if($request->has('maincar')){
  $items=$items->where('maincar_id',$request->maincar);
  
}
if($request->has('country')){
  $items=$items->where('country_id',$request->country);
  
}
if($request->has('region')){
  $items=$items->where('region_id',$request->region);
  
}
if($request->has('price')){
  $items=$items->where('price',$request->price);
  
}
            $items = $items->paginate(env('PAGINATE'));
            return view('website.car.index' , compact('items'));
        }
         public function show($id = null){
          if($id){
            $item=Car::findOrFail($id);
            if($item->user_id != auth()->user()->id){
              return redirect('505');
            }
          }
            return $this->createOrEdit('website.car.edit' , $id);
          }
        
       public function store(AddRequestCar $request){
      $request->request->add(['user_id'=>Auth()->user()->id]);
          $item =  $this->storeOrUpdate($request , null , true);
            if(count($request->accessories_id) > 0){
   $item->accessories()->sync($request->accessories_id);
  }
          return redirect('car');
     }
      public function update($id , UpdateRequestCar $request){
          $item =  $this->storeOrUpdate($request , $id , true);
          		if(count($request->accessories_id) > 0){
			$item->accessories()->sync($request->accessories_id);
		}
          return redirect()->back();
     }
          public function getById($id){
            $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
            return $this->createOrEdit('website.car.show' , $id , ['fields' =>  $fields]);
        }
         public function destroy($id){
            return $this->deleteItem($id , 'car')->with('sucess' , 'Done Delete Car From system');
        }
  }

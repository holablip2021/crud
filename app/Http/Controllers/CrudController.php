<?php

namespace App\Http\Controllers;

use App\CrudServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Session\Store;

class CrudController extends Controller
{
        protected $crudservices;

        public function __construct()
        {
            $this->crudservices=new CrudServices;
            session()->reflash('status');
        }

        public function index(){
            return view('customers');
        }

        public function addnew()
        {
            return view('forms');
        }

        public function create(Request $request)
        {
            $results = $this->crudservices->create($request->post());
            session()->flash('status', $results[1]);
            if ($results[2] == false) {
                return redirect()->back();
            }
            return redirect(url('/list'));             
        }

        public function update($id = null,Request $request)
        {
            $results = $this->crudservices->update($id,$request->post());
            session()->flash('status', $results[0]);
            if ($results[1] == false) {
                return redirect()->back();
            }
            return redirect(url('/list'));             
        }        
        

        public function list(){
            $results = $this->crudservices->index();
            return view('listing',compact('results'));
        }

        public function edit($id = null , Request $request){
            $results = $this->crudservices->read($id);
            session()->flash('status', $results[1]);
            if ($results[2] == false) {
                return redirect(url('/list')); 
            }
            return view('formedit', compact('results','id'));
        }       

        public function delete(Request $request){
            $results = $this->crudservices->delete($request->post('field_id'),$request->post());
            session()->flash('status', $results[0]);
            if ($results[1] == false) {
                return redirect(url('/list'));
            }
            return redirect(url('/list')); 
        }       


}

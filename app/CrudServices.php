<?php

namespace App;
use App\ListQueryRepository;

class CrudServices
{
    protected $listrepo;

    public function __construct(){
        $this->listrepo = new ListQueryRepository;
        session()->reflash();        
    }

    //buat data baru
    public function create($data){
        try{
            $customers = new customers();
            $customers->nama = $data['field_nama'];
            $customers->alamat = $data['field_alamat'];
            $customers->telp = $data['field_telp'];
            $customers->save();
            return ([$customers, 'data has been save',true]);
        } catch (\Exception $e) {
            return ([$e->getMessage(),false]);            
        }
    }

    public function index(){
        $results =  $this->listrepo->getCust();
        return $results;
    }

    //tampilkan list 
    public function read($id)
    {
        try {
       $results =  $this->listrepo->findById($id);
        return ([$results,'success',true]);
        } catch (\Exception $e) {
            return ([$e->getMessage(),false]);
        }

    }

    //updata data
    public function update($id,$data)
    {
        try {
            $customers =  $this->listrepo->findById($id);
            if (!$customers) {
                return (['data not found', false]);
            }
            $customers->nama = $data['field_nama'];
            $customers->alamat = $data['field_alamat'];
            $customers->telp = $data['field_telp'];
            $customers->save();
            return (['data has been changed',true]);
        } catch (\Exception $e) {
            return ([$e->getMessage(),false]);
        }
    }

    //hapus data
    public function delete($id, $data)
    {
        try {
            $customers =  $this->listrepo->findById($id);
            if(!$customers){
                return (['data not found',false]);
            }            
            $customers->delete();
            return (['data has been delete',true]);
        } catch (\Exception $e) {
            return ([$e->getMessage(),false]);
        }
    }

}

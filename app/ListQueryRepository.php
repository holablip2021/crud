<?php

namespace App;
use App\customers;
class ListQueryRepository
{
    //
    public function findById($id)
    {
        return customers::with([])
        ->find($id);
    }

    public function getCust()
    {
        return customers::with([])
            ->get();
    }   

}

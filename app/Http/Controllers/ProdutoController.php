<?php

namespace supportbox\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {

    public function lista() {
        
        $produtos = DB::select('select * from produtos');

        return '<h1>Listagem de produtos com Laravel</h1>';
    }

}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaterialTipodocumento;

class MaterialTipoDocumentoController extends Controller
{
    public static function materialtipodocSelect2(Request $request)
    {
        MaterialTipodocumento::$search = $request->search;
        MaterialTipodocumento::$tipo = $request->tipo_material;
        $response=array();
        $data = [];
        $Materialdocumentos = MaterialTipodocumento::obtenermaterialtipoAll() ?? [];

        foreach ($Materialdocumentos as $documento) {
            $data[] = ['id' => $documento->id, 'text' => $documento->nombre];

        }
        return json_encode($data);
       
       
    }
}

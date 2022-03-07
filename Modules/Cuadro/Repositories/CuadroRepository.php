<?php

namespace Modules\Cuadro\Repositories;

use Illuminate\Http\Request;
use Modules\Cuadro\Entities\Cuadro;

class CuadroRepository extends BaseRepository
{
    public function __construct(Cuadro $cuadro)
    {
        parent::__construct($cuadro);
    }

    public function getList(Request $request){
        if ($request->fields){
            $fields = explode(",",$request->fields);
            $columns = array_map(function($column) {
                return 'cuadros.' . $column;
            }, $fields);
            return $this->model->select($columns)
                ->join('usuario_cuadros', 'usuario_cuadros.cuadro_id', '=', 'cuadros.id')
                ->where('usuario_cuadros.usuario_id', "=", $request->header('X-HTTP-USER-ID'))
                ->where(function($q) use($request) {
                    $q->where('cuadros.titulo', 'LIKE', "%{$request->search}%")
                        ->orWhere('cuadros.autor', 'LIKE', "%{$request->search}%")
                        ->orWhere('cuadros.medidas', 'LIKE', "%{$request->search}%")
                        ->orWhere('cuadros.tecnica', 'LIKE', "%{$request->search}%")
                        ->orWhere('cuadros.material', 'LIKE', "%{$request->search}%")
                        ->orWhere('cuadros.anio', 'LIKE', "%{$request->search}%");
                })
                ->paginate();
        }
        return $this->model
            ->join('usuario_cuadros', 'usuario_cuadros.cuadro_id', '=', 'cuadros.id')
            ->where('usuario_cuadros.usuario_id', "=", $request->header('X-HTTP-USER-ID'))
            ->where(function($q) use($request) {
                $q->where('cuadros.titulo', 'LIKE', "%{$request->search}%")
                    ->orWhere('cuadros.autor', 'LIKE', "%{$request->search}%")
                    ->orWhere('cuadros.medidas', 'LIKE', "%{$request->search}%")
                    ->orWhere('cuadros.tecnica', 'LIKE', "%{$request->search}%")
                    ->orWhere('cuadros.material', 'LIKE', "%{$request->search}%")
                    ->orWhere('cuadros.anio', 'LIKE', "%{$request->search}%");
            })->paginate();
    }
}

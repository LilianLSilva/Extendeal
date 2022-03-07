<?php

namespace Modules\Cuadro\Services;

use Illuminate\Http\Request;
use Modules\Cuadro\Entities\Cuadro;
use Modules\Cuadro\Http\Requests\CreateCuadroRequest;
use Modules\Cuadro\Http\Requests\UpdateCuadroRequest;
use Modules\Cuadro\Repositories\CuadroRepository;

class CuadroService
{
    private $cuadroRepository;

    public function __construct(CuadroRepository $cuadroRepository)
    {
        $this->cuadroRepository = $cuadroRepository;
    }
    public function getList(Request $request)
    {
        return $this->cuadroRepository->getList($request);
    }

    public function get(int $id)
    {
        return $this->cuadroRepository->get($id);
    }

    public function save(CreateCuadroRequest $request)
    {
        $cuadro = New Cuadro($request->all());
        $this->cuadroRepository->save($cuadro);
        return $cuadro;
    }

    public function update(UpdateCuadroRequest $request, Cuadro $cuadro)
    {
        $cuadro->fill($request->all());
        $this->cuadroRepository->save($cuadro);
        return $cuadro;
    }


    public function delete(Cuadro $cuadro)
    {
        $this->cuadroRepository->delete($cuadro);
        return $cuadro;
    }
}

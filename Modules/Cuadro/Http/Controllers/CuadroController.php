<?php

namespace Modules\Cuadro\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cuadro\Entities\Cuadro;
use Modules\Cuadro\Http\Requests\CreateCuadroRequest;
use Modules\Cuadro\Http\Requests\UpdateCuadroRequest;
use Modules\Cuadro\Services\CuadroService;

class CuadroController extends Controller
{
    private $cuadroService;

    public function __construct(CuadroService $cuadroService)
    {
        $this->cuadroService = $cuadroService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $cuadros = $this->cuadroService->getList($request);
            if(empty($cuadros->toArray()['data'])){
                return response()->json(["res" => false, "error" => "Error de modelo"], 400);
            }
            return $cuadros;
        } catch(\Exception $e){
            return $e;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateCuadroRequest $request)
    {
        try {
            $cuadro = $this->cuadroService->save($request);
            return \Response()->json(['res' => true, 'message' => 'El cuadro fue creado correctamente'], 201);
        }
        catch (\Exception $e){
            return \Response()->json(['res' => false, 'message' => $e->getMessage()], 422);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $cuadro = $this->cuadroService->get($id);
        } catch(\Exception $e){
            return $e;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cuadro
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateCuadroRequest $request, Cuadro $cuadro)
    {
        try {
            $cuadro = $this->cuadroService->update($request, $cuadro);
            return \Response()->json(['res' => true, 'message' => 'El cuadro fue modificado correctamente'], 200);
        } catch (\Exception $e){
            return \Response()->json(['res' => false, 'message' => $e->getMessage()], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cuadro
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Cuadro $cuadro)
    {
        try {
            $this->cuadroService->delete($cuadro);
            return \Response()->json(['res' => true, 'message' => 'El cuadro fue eliminado correctamente'], 200);
        } catch (\Exception $e){
            return \Response()->json(['res' => false, 'message' => $e->getMessage()], 422);
        }
    }

}

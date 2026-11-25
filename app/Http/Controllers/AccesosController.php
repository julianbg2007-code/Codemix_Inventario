<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\AuthorizesWithPermissions;
use App\Services\AccesoService;
use App\Http\Requests\AccesosRequest;
use Carbon\Carbon;
use Illuminate\Routing\Controllers\HasMiddleware;

class AccesosController extends Controller implements HasMiddleware
{
   use AuthorizesWithPermissions;

   public static function permissions(): array
   {
    return [ 
        'index' => 'productos.ver',
        'show' => 'productos.crear',
        'export' => 'productos.eliminar',
        'store' => 'productos.editar',
        'update' => 'productos.crear',
        'destroy' => 'productos.eliminar',
        'findByUsuario' => 'productos.eliminar',
        'findByDispositivo' => 'productos.eliminar',
        'findByNavegador' => 'productos.editar',
        'findByUbicacion' => 'productos.ver',
        'findByFecha' => 'productos.crear',
        'findByEstado' => 'productos.editar',

        //que metodo necesita que permiso primero hacer el config rol

    ];
   }






    public function __construct(private AccesoService $accesoService)
    {
    }

    // Traer todos los accesos
    public function index()
    {
        $registros = $this->accesoService->getAll();

        return response()->json([
            'message' => 'Se listaron los accesos correctamente',
            'data' => $registros
        ], 200);
    }

    // Crear un acceso
    public function store(AccesosRequest $request)
    {
        $registro = $this->accesoService->create(
            $request->validated()
        );

        return response()->json([
            'message' => 'El acceso se creó correctamente',
            'datosRegistrados' => $registro
        ], 201);
    }

    // Traer un acceso por ID
    public function show(string $id)
    {
        $registro = $this->accesoService->getById($id);

        return response()->json([
            'message' => 'Se listó el acceso correctamente',
            'data' => $registro
        ], 200);
    }

    // Actualizar un acceso
    public function update(AccesosRequest $request, string $id)
    {
        $registroActualizado = $this->accesoService->update(
            $id,
            $request->validated()
        );

        return response()->json([
            'message' => 'El acceso se actualizó correctamente',
            'data' => $registroActualizado
        ], 200);
    }

    // Eliminar un acceso
    public function destroy(string $id)
    {
        $this->accesoService->delete($id);

        return response()->json([
            'message' => 'El acceso se eliminó correctamente'
        ], 200);
    }

    // Buscar por usuario
    public function findByUsuario(int $id_usuario)
    {
        $registros = $this->accesoService->findByUsuario($id_usuario);

        return response()->json([
            'message' => 'Se listaron los accesos por usuario',
            'data' => $registros
        ], 200);
    }

    // Buscar por dispositivo
    public function findByDispositivo(string $dispositivo)
    {
        $registros = $this->accesoService->findByDispositivo($dispositivo);

        return response()->json([
            'message' => 'Se listaron los accesos por dispositivo',
            'data' => $registros
        ], 200);
    }

    // Buscar por navegador
    public function findByNavegador(string $navegador)
    {
        $registros = $this->accesoService->findByNavegador($navegador);

        return response()->json([
            'message' => 'Se listaron los accesos por navegador',
            'data' => $registros
        ], 200);
    }

    // Buscar por ubicación
    public function findByUbicacion(string $ubicacion)
    {
        $registros = $this->accesoService->findByUbicacion($ubicacion);

        return response()->json([
            'message' => 'Se listaron los accesos por ubicación',
            'data' => $registros
        ], 200);
    }

    // Buscar por rango de fechas
    public function findByFecha(string $fechaIngreso, string $fechaSalida)
    {
        $fechaInicial = Carbon::parse($fechaIngreso);
        $fechaFinal = Carbon::parse($fechaSalida);

        $registros = $this->accesoService->findByFecha(
            $fechaInicial,
            $fechaFinal
        );

        return response()->json([
            'message' => 'Se listaron los accesos por rango de fechas',
            'data' => $registros
        ], 200);
    }

    // Buscar por estado
    public function findByEstado(string $estado)
    {
        $registros = $this->accesoService->findByEstado($estado);

        return response()->json([
            'message' => 'Se listaron los accesos por estado',
            'data' => $registros
        ], 200);
    }
}

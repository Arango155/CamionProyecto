<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Transporte;
use Illuminate\Http\Request;
use App\Models\Camion;
use App\Models\Predio;
use App\Models\Mercancia;
use App\Models\Tipo_mercancia;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Log;



use function Psy\debug;

class Controller extends BaseController
{
    function index (){

        return view('layout/plantilla');
    }

    public function indext()
    {
        $datos = Transporte::orderBy('id', 'asc')->paginate(25);
        return view('inicio-transporte', compact('datos'));
    }

    public function createt()
    {
        return view('agregar-transporte');
    }

    public function storet(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $transportes = new Transporte();
        $transportes->id = $request->post('id');
        $transportes->nombre = $request->post('nombre');
        $transportes->razon_social = $request->post('razon_social');
//        $transportes->fecha = $request->post('fecha');
        $transportes->save();

        return redirect()->route("transportes.indext")->with("success", "Agregado con exito!");
    }

    public function showt($id)
    {
        $transportes = Transporte::find($id);
        return view("eliminar-transporte", compact('transportes'));
    }

    public function editt($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $transportes = Transporte::find($id);
        return view("actualizar-transporte", compact('transportes'));
        //echo $id;
    }

    public function updatet(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $transportes = Transporte::find($id);
        $transportes->id = $request->post('id');
        $transportes->nombre = $request->post('nombre');
        $transportes->razon_social = $request->post('razon_social');
//        $transportes->fecha = $request->post('fecha');
        $transportes->save();

        return redirect()->route("transportes.indext")->with("success", "Actualizado con exito!");
    }

    public function destroyt($id)
    {
        //Elimina un registro
        $transportes = Transporte::find($id);
        $transportes->delete();
        return redirect()->route("transportes.indext")->with("success", "Eliminado con exito!");
    }

    public function indexc()
    {
        //pagina de inicio
        //$datos = Personas::all();
        //$datos = Personas::orderBy('id', 'desc')->paginate(3);
        $datos = Camion::orderBy('id', 'asc')->paginate(3);
        return view('inicio-camion', compact('datos'));
    }

    public function createc()
    {
        //el formulario donde nosotros agregamos datos
        return view('agregar-camion');
    }

    public function storec(Request $request)
    {


        try {
            $camiones = new Camion();
            $camiones->id = $request->post('id');
            $camiones->placa_camion = $request->post('placa_camion');
            $camiones->marca = $request->post('marca');
            $camiones->color = $request->post('color');
            $camiones->modelo = $request->post('modelo');
            $camiones->capacidad_toneladas = $request->post('capacidad_toneladas');
            $camiones->transporte_codigo = $request->post('transporte_codigo');
            $camiones->save();

        } catch (\Exception $exception) {
            $message= " Excepción general ". $exception->getMessage();
            return view('exceptions.exceptions', compact('message'));
        }catch (QueryException $queryException){
            $message= " Excepción de SQL ". $queryException->getMessage();
            return view('errors.404', compact('message'));
        }catch (ModelNotFoundException $modelNotFoundException){
            $message=" Excepción del Sistema ".$modelNotFoundException->getMessage();
            return view('errors.404', compact('message'));
        }


        return redirect()->route("camiones.indexc")->with("success", "Agregado con exito!");




    }

    public function showc($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $camiones = Camion::find($id);
        return view("eliminar-camion", compact('camiones'));
    }

    public function editc($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $camiones = Camion::find($id);
        return view("actualizar-camion", compact('camiones'));
        //echo $id;
    }

    public function updatec(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $camiones = Camion::find($id);
        $camiones->id = $request->post('id');
        $camiones->placa_camion = $request->post('placa_camion');
        $camiones->marca = $request->post('marca');
        $camiones->color = $request->post('color');
        $camiones->modelo = $request->post('modelo');
        $camiones->capacidad_toneladas = $request->post('capacidad_toneladas');
        $camiones->transporte_codigo = $request->post('transporte_codigo');
        $camiones->save();

        return redirect()->route("camiones.indexc")->with("success", "Actualizado con exito!");
    }

    public function destroyc($id)
    {
        //Elimina un registro
        $camiones = Camion::find($id);
        $camiones->delete();
        return redirect()->route("camiones.indexc")->with("success", "Eliminado con exito!");
    }

    public function indexp()
    {

        $datos = Predio::orderBy('direccion', 'asc')->paginate(3);
        return view('inicio', compact('datos'));

    }

    public function indexm()
    {

        $datos = Mercancia::orderBy('nombre', 'asc')->paginate(3);
        return view('inicio-mercancia', compact('datos'));

    }

    public function createm()
    {
        return view('agregar-mercancia');
    }

    public function storem(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $mercancias = new Mercancia();
        $mercancias->id = $request->post('id');
        $mercancias->nombre = $request->post('nombre');
        $mercancias->id_tipo_mercancias = $request->post('id_tipo_mercancias');
//        $transportes->fecha = $request->post('fecha');
        $mercancias->save();

        return redirect()->route("mercancias.indexm")->with("success", "Agregado con exito!");
    }

    public function showm($id)
    {
        $mercancias= Mercancia::find($id);
        return view("eliminar-mercancia", compact('mercancias'));
    }

    public function editm($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $mercancias = Mercancia::find($id);
        return view("actualizar-mercancia", compact('mercancias'));
        //echo $id;
    }

    public function updatem(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $mercancias = Mercancia::find($id);
        $mercancias->id = $request->post('id');
        $mercancias->nombre = $request->post('nombre');

//        $transportes->fecha = $request->post('fecha');
        $mercancias->save();

        return redirect()->route("mercancias.indexm")->with("success", "Actualizado con exito!");
    }

    public function destroym($id)
    {
        //Elimina un registro
        $mercancias = Mercancia::find($id);
        $mercancias->delete();
        return redirect()->route("mercancias.indexm")->with("success", "Eliminado con exito!");
    }

    public function indextm()
    {

        $datos = tipo_mercancia::orderBy('descripcion', 'asc')->paginate(3);
        return view('inicio-tipo-mercancia', compact('datos'));

    }


    public function createtm()
    {
        return view('agregar-tipomercancia');
    }

    public function storetm(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $mercancias = new Tipo_mercancia();
        $mercancias->id = $request->post('id');
        $mercancias->descripcion = $request->post('descripcion');

//        $transportes->fecha = $request->post('fecha');
        $mercancias->save();

        return redirect()->route("tipomercancias.indextm")->with("success", "Agregado con exito!");
    }

    public function showtm($id)
    {
        $tipomercancias= Tipo_mercancia::find($id);
        return view("eliminar-tipomercancia", compact('tipomercancias'));
    }

    public function edittm($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $tipomercancias = Tipo_mercancia::find($id);
        return view("actualizar-tipomercancia", compact('tipomercancias'));
        //echo $id;
    }

    public function updatetm(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $tipomercancias = Tipo_mercancia::find($id);
        $tipomercancias->id = $request->post('id');
        $tipomercancias->descripcion = $request->post('descripcion');

//        $transportes->fecha = $request->post('fecha');
        $tipomercancias->save();

        return redirect()->route("tipomercancias.indextm")->with("success", "Actualizado con exito!");
    }

    public function destroytm($id)
    {
        //Elimina un registro
        $tipomercancias = Tipo_mercancia::find($id);
        $tipomercancias->delete();
        return redirect()->route("tipomercancias.indextm")->with("success", "Eliminado con exito!");
    }

    public function createp()
    {
        //el formulario donde nosotros agregamos datos

        return view('agregar');
    }

    public function storep( Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $predio = new Predio();
        $predio->id = $request->post('id');
        $predio->nombre_predio = $request->post('nombre_predio');
        $predio->direccion = $request->post('direccion');
        $predio->save();

        return redirect()->route("predios.indexp")->with("success", "Agregado con exito!");
    }

    public function showp($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $predios = Predio::find($id);
        return view("eliminar", compact('predios'));
    }

    public function editp($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $predios = Predio::find($id);
        return view("actualizar", compact('predios'));
        //echo $id;
    }

    public function updatep(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $predios = Predio::find($id);
        $predios->nombre_predio = $request->post('nombre_predio');
        $predios->direccion = $request->post('direccion');

        $predios->save();

        return redirect()->route("predios.indexp")->with("success", "Actualizado con exito!");
    }

    public function destroyp($id)
    {
        //Elimina un registro
        $predios = Predio::find($id);
        $predios->delete();
        return redirect()->route("predios.indexp")->with("success", "Eliminado con exito!");

    }

}

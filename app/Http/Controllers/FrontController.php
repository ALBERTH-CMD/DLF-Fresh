<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Views;
use App\Mail\EmailSend;
use App\Models\Empresa;
use App\Models\Carrucel;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Configuracion;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\StaticAnalysis\Cache;
//use CyrildeWit\EloquentViewable\Support\Period;

class FrontController extends Controller
{
    public function index(Views $views){
        $carrusel = Carrucel::orderBy('orden','asc')->get();
        $producto = Producto::orderBy('visitas','desc')->take(3)->get();
        $posts = Post::orderBy('created_at','desc')->take(2)->get();
        $config = Configuracion::first();
        return view('welcome',compact('carrusel','producto','posts','config'));
    }

    public function empresa(){
        $empresa = Empresa::find(1);
        return view('front.empresa',compact('empresa'));
    }

    public function artesanias(){
        $categorias = Categoria::all();
        return view('front.categorias',compact('categorias'));
    }

    public function categoria($categoria){
        $categoria = Categoria::whereSlug($categoria)->first();
        return view('front.categoria',compact('categoria'));
    }
    public function producto($categoria,$producto){
        $producto = Producto::whereSlug($producto)->first();
        return view('front.producto',compact('producto'));
    }

    public function blog(){
        $posts = Post::all();
        return view('front.posts',compact('posts'));
    }

    public function post($post){
        $post = Post::whereSlug($post)->first();
        //dd($post->increment('visitas'));
        $post->increment('visitas');
        return view('front.post',compact('post'));
    }

    public function contacto(){

        return view('front.contacto');
    }

    public function contactoenvio(Request $r){

     if(!empty($r)){

        $email = new EmailSend($r->all());
        Mail::to('developeddreamscompany@gmail.com')->send($email);

         $nombre    = $_POST['nombre'];
         $email     = $_POST['email'];
         $telefono  = $_POST['telefono'];
         $mensaje   = $_POST['mensaje'];

         if(mail($email,"ASUNTO CONTACTO ",$mensaje)){
            $resultado = "su mensaje no fue enviado";
         }else{
            $resultado = "Gracias!!!. se envió tu mensaje";
         }
            return redirect()->back()->with('success',$resultado);
     }else{
         return redirect()->back()->with('success',"SE ENVIO EL MENSAJE EXITOSAMENTE, EN BREVE UN PROMOTOR PROESSA LO CONTACTAR");
     }
    }
}

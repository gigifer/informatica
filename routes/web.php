<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::get("/registro", function(){
  return view("registro");
});

Route::post("/registro", "RegistroController@validarUsuario", "RegistroController@validarEmail", "RegistroController@validarContrasenia", "RegistroController@validarArchivos", "RegistroController@mostrarErrores", "RegistroController@registrarUsuario");

Route::get("/login", function(){
  return view("login");
});

Route::post("/login", "LoginController@verificarLogin", "LoginController@mostrarErrores");

Route::get("/carrito", function(){
  return view("carrito");
});

Route::get("/contacto", function(){
  return view("contacto");
});

Route::get("/editar-usuario", function(){
  return view("editarUsuario");
});

Route::get("/faq", function(){
  return view("faq");
});

Route::get("/perfil-usuario", function(){
  return view("perfilUsuario");
});

Route::post("/perfil-usuario", "PerfilUsuarioController@recuperarFoto");

Route::get("/recuperar-contraseña", function(){
  return view("recuperarContraseña");
});

Route::post("/recuperar-contraseña", "RecuperarContraseñaController@buscarEmail", "RecuperarContraseñaController@validarContrasenia", "RecuperarContraseñaController@mostrarErrores");

Route::get("/vista-producto", function(){
  return view("vistaProducto");
});

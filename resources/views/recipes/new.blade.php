@extends('layouts.app')

@section('content')

@section('recipe-menu')
    active
@endsection

<section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Opciones</h2>

                        <ul class="actions">
                            
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="{{route('newRecipe')}}">Nueva Receta</a>
                                    </li>
                                    <li>
                                        <a href="">Refrescar</a>
                                    </li>
                                     
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Recetas
                                <small>Agregar receta.
                                </small>
                            </h2>
                        </div>

                         <form action="{{route('createRecipe')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body card-padding">
                                                       
                                <div class="row">

                                        <div class="col-lg-4 col-sm-12 m-b-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-tag"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                                                   
                                                </div>
                                            </div>
                                        </div> 

                                         <div class="col-lg-2 col-sm-12 m-b-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-pizza"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" name="portion" class="form-control" placeholder="Porciones" required>
                                                    
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="col-lg-2 col-sm-12 m-b-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-watch"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" name="time" class="form-control" placeholder="Tiempo" required>
                                                   
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="col-lg-2 col-sm-12 m-b-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="zmdi zmdi-fire"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" name="calories" class="form-control" placeholder="Calorías" required="">
                                                    
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="col-lg-2 col-sm-12 m-b-20">
                                              
                                              <select class="selectpicker" name="type">
                                                
                                                <option >DESAYUNO</option>
                                                <option>ALMUERZO</option>
                                                <option>CENA</option>
                                                <option>POSTRES</option>

                                            </select>

                                        </div>    
                                                                                                
                                </div>

                                <div class="row">
                                   <div class="card-header">
                                        <h5>Ingredients</h5>
                                    </div>

                                    <div class="col-lg-10 col-sm-12 m-b-10" id="ingredients-cont">
                                            <div class="input-group ingredient">
                                                <span class="input-group-addon"><i class="zmdi zmdi-shopping-basket"></i></span>
                                                <div class="fg-line">
                                                    <input type="text" class="form-control" id="ingredient" placeholder="Ej. Huevos, Leche, etc.">
                                                   
                                                </div>
                                            </div>
                                    </div> 

                                    <div class="col-lg-2 col-sm-12 m-b-10">
                                         <button type="button" class="btn btn-success" onclick="mensaje()">Agregar</button>
                                    </div>                            

                                </div>

                                <div class="row">
                                    <div class="card-header">
                                            <h5>Preparation</h5>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 m-b-10">
                                     
                                         <div class="form-group">
                                            <div class="fg-line">
                                                <textarea required class="form-control" rows="10"
                                                          placeholder="Details of recipe" name="description"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="card-header">
                                        <h5>Image</h5>
                                    </div>
                                    
                                    <div class="col-lg-12 col-sm-12 m-b-10">

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                            <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image">
                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="text-right">

                                    <button type="submit" class="btn btn-danger">Registrar</button>

                                </div>

                            </div>

                         </form>
                       
                    </div>
                 
</section>

@endsection
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
                                        <a  href="{{route('newRecipe')}}">Nueva Receta</a>
                                    </li>
                                    <li>
                                        <a href="{{route('indexRecipes')}}"">Refrescar</a>
                                    </li>
                                     
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Recetas
                                <small>Listado de recetas.
                                </small>
                            </h2>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>

                                	  <th  data-column-id="id" scope="col">#</th>
								      <th  data-column-id="name" scope="col">Nombre</th>
								      <th  data-column-id="portion" scope="col">Porciones</th>
								      <th  data-column-id="calories" scope="col">Calorías</th>
								      <th  data-column-id="type" scope="col">Tipo</th>
								      <th  data-column-id="id" scope="col"> Editar </th>

                                </tr>
                                </thead>
                                <tbody>
                                                                 
                                @foreach($recipes as $recipe)
								    <tr>
								      <td scope="row">{{$recipe->id}}</td>
								      <td >{{$recipe->name}}</td>
								      <td>{{$recipe->portion}}</td>
								      <td>{{$recipe->calories}}</td>
								      <td>{{$recipe->type}}</td>
								      <td><button class="btn btn-icon command-edit waves-effect waves-circle" 
                                        onclick="window.location.href='{{route('editRecipe', $recipe->id)}}'" ><span class="zmdi zmdi-edit"></span></button></td>

 
								    </tr>
								@endforeach


                                </tbody>
                            </table>

							<div id="data-table-command-footer" class="bootgrid-footer container-fluid">
								<div class="row">
									<div class="col-sm-6">


			                             @if(count($recipes))
									 									     
									         {{$recipes->links()}}
									      
										@endif	

									</div>

									<div class="col-sm-6 infoBar">
										<div class="infos">Showing 1 to 10 of 20 entries</div>
									</div>
								</div>
							</div>


                        </div>
                    </div>
                </div>
</section>

@endsection
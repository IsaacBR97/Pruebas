@extends('supervisor.tablero')
@section ('tablero')

<div class="row">
    
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('lista.create')}}"> Create New Category</a>
            </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ROPA DAMAS</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
           <!-- <th width="280px">Action</th>-->
        </tr>
        <tr>
            <td>159</td>
            <td>Vestido largo</td>
            <td>Talla mediana, Color Rojo, Bordado </td>
            <!--<td>
                 <form method="POST">
   
                    <a class="btn btn-info" href="#">Show</a>
    
                    <a class="btn btn-primary" href="#">Edit</a>
   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>-->
        </tr>
        
        <tr>
            <td>159</td>
            <td>Vestido largo</td>
            <td>Talla mediana, Color Rojo, Bordado </td>
            <!--<td>
                <form method="POST">
   
                    <a class="btn btn-info" href="#">Show</a>
    
                    <a class="btn btn-primary" href="#">Edit</a>
   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>-->
        </tr>
        
        <tr>
            <td>159</td>
            <td>Vestido largo</td>
            <td>Talla mediana, Color Rojo, Bordado </td>
            <!--<td>
                <form method="POST">
   
                    <a class="btn btn-info" href="#">Show</a>
    
                    <a class="btn btn-primary" href="#">Edit</a>
   
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
                
            </td>-->
                                
                    <!--<div class="col-xs-15 col-sm-15 col-md-12 text-right">
                        <button type="submit" class="btn btn-warning">Add new product</button>
                    </div>-->
        </tr>
        
        
                </form>
            </td>
        </tr>
    
    </table>
    
    
    <div>
                
                <a class="btn btn-info" href="{{route('lista.show',1)}}">Show</a>
                <a class="btn btn-primary" href="{{route('lista.edit', 1)}}">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
    </div>

<!-- Tabla de segunda categoría-->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ROPA CABALLEROS</h2>
            </div>
            
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <!--<th width="280px">Action</th>-->
        </tr>
        <tr>
            <td>235</td>
            <td>Vestido largo</td>
            <td>Talla mediana, Color Rojo, Bordado </td>
           <!-- <td>
                <form method="POST">
   
                    <a class="btn btn-info" href="#">Show</a>
    
                    <a class="btn btn-primary" href="#">Edit</a>
   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>-->
        </tr>
                </form>
            </td>
        </tr>
    
    </table>
        
    <!-- Tabla de tercera categoría-->
        
    <div>
                
                <a class="btn btn-info" href="{{route('lista.show',2)}}">Show</a>
                <a class="btn btn-primary" href="{{route('lista.edit', 2)}}">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
    </div>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ROPA INFANTIL</h2>
            </div>
            
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <!--<th width="280px">Action</th>-->
        </tr>
        <tr>
            <td>235</td>
            <td>Vestido largo</td>
            <td>Talla mediana, Color Rojo, Bordado </td>
            <!--<td>
                <form method="POST">
   
                    <a class="btn btn-info" href="#">Show</a>
    
                    <a class="btn btn-primary" href="#">Edit</a>
   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>-->
        </tr>
                </form>
            </td>
        </tr>
    
    </table>
        
    <div>
                
                <a class="btn btn-info" href="#">Show</a>
                <a class="btn btn-primary"  href="{{route('lista.edit', 3)}}">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
    </div>
@endsection
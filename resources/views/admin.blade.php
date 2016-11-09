@extends('base.master')
@section('css')
{!! HTML::style('assets/vendor/datatables-bootstrap/dataTables.bootstrap.css') !!}
{!! HTML::style('assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css') !!}
{!! HTML::style('assets/vendor/datatables-responsive/dataTables.responsive.css') !!}
@endsection
@section('content')
        <!-- Page -->
<div class="page" ng-controller="administracionController">
    <div class="page-header">
        <h1 class="page-title">Administración</h1>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <!-- Example Panel With Tool -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Productos</h3>
                        <div class="panel-actions">
                            <button data-target="#modal_nuevo_producto" data-toggle="modal" title="Nuevo Producto" type="button" style="width: 50px;float:left; margin-right: 10px;" class="btn btn-block btn-success">
                                <i class="icon wb-plus" aria-hidden="true"></i>
                            </button>
                            <input type="text" style="width: 200px;float:left;" ng-model="buscador" class="form-control search-button" placeholder="Buscar">
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table id="infoTable" class="table table-hover table-striped width-full">
                            <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio Venta</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio Venta</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr ng-repeat="producto in productos |filter:buscador">
                                <td>{!! HTML::image("imagenes/#{producto.imagen}" , "...", array('class' => 'img_venta')) !!}</td>
                                <td>#{producto.nombre} -> #{producto.capacidad}</td>
                                <td>#{producto.descripcion }</td>
                                <td>$#{producto.precio_venta | number:0}</td>
                                <td>
                                    <button type="button" title="Vender" class="btn btn-block btn-success action-button"><i class="icon wb-shopping-cart" aria-hidden="true"></i></button>
                                    <button type="button" title="Editar" class="btn btn-block btn-primary action-button"><i class="icon wb-edit" aria-hidden="true"></i></button>
                                    <button type="button" ng-click="borrar(producto.id)" title="Eliminar" class="btn btn-block btn-danger action-button"><i class="icon wb-close" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Example Panel With Tool -->
            </div>
        </div>
    </div>
</div>
<!-- End Page -->

<!-- Modal -->
<div ng-controller="productosController" class="modal fade modal-fade-in-scale-up" id="modal_nuevo_producto" aria-hidden="true" aria-labelledby="Modal_nuevo_producto" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form ng-submit="dataForm.$valid && save()" autocomplete="off" name ="dataForm" novalidate>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Nuevo Producto</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-material floating">
                        <input type="text" class="form-control" name="nombre" ng-model="form.nombre" required/>
                        <label class="floating-label">Nombre del Producto</label>
                    </div>
                    <div class="form-group form-material floating">
                        <input type="text" class="form-control" name="descripcion" ng-model="form.descripcion"/>
                        <label class="floating-label">Descripción</label>
                    </div>
                    <div class="form-group form-material floating">
                        <select class="form-control" name="capacidad" ng-model="form.capacidad" ng-options="capacidad as capacidad.label for capacidad in capacidades" required></select>
                        <label class="floating-label">Tienda</label>
                    </div>
                    <div class="form-group form-material floating">
                        <input type="text" class="form-control" name="imagen" ng-model="form.imagen"/>
                        <label class="floating-label">Nombre Imagen</label>
                    </div>
                    <div class="form-group form-material floating">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="precio_compra" ng-model="form.compra" required />
                                <label class="floating-label">Precio de Compra</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-material floating">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="precio_venta" ng-model="form.venta" required />
                                <label class="floating-label">Precio de Venta</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-material floating">
                        <select class="form-control" name="tienda" ng-model="form.tienda" ng-options="tienda as tienda.label for tienda in tiendas" required></select>
                        <label class="floating-label">Tienda</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default margin-0" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" ng-disabled='!dataForm.$valid'>Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->



@endsection
@section("script")
    {!! HTML::script('assets/vendor/datatables/jquery.dataTables.min.js') !!}
    {!! HTML::script('assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js') !!}
    {!! HTML::script('assets/vendor/datatables-bootstrap/dataTables.bootstrap.js') !!}
    {!! HTML::script('assets/vendor/datatables-responsive/dataTables.responsive.js') !!}
    {!! HTML::script('assets/vendor/datatables-tabletools/dataTables.tableTools.js') !!}
    {!! HTML::script('assets/js/components/datatables.js') !!}
    <script>
        menuopt("dashboard");
    </script>
@endsection
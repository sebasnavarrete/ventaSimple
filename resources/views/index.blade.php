@extends('base.master')
@section('css')
{!! HTML::style('assets/vendor/datatables-bootstrap/dataTables.bootstrap.css') !!}
{!! HTML::style('assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css') !!}
{!! HTML::style('assets/vendor/datatables-responsive/dataTables.responsive.css') !!}
@endsection
@section('content')
<!-- Page -->
<div class="page" ng-controller="dashboardController">
    <div class="page-header">
        <h1 class="page-title">Ventas</h1>
    </div>
    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">&nbsp;</h3>
                <div class="panel-actions">
                    <button data-target="#Modal_nueva_venta" data-toggle="modal" type="button" title="Nueva Venta" style="width: 50px;float:left; margin-right: 10px;" class="btn btn-block btn-success">
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
                        <th>Producto</th>
                        <th>Precio Venta</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        <th>Abono</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio Venta</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        <th>Abono</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr ng-repeat="venta in ventas |filter:buscador">
                            <td>{!! HTML::image("imagenes/#{venta.producto.imagen}" , "...", array('class' => 'img_venta')) !!}</td>
                            <td>#{venta.producto.nombre} -> #{venta.producto.capacidad}</td>
                            <td>$#{venta.precio_venta | number:0}</td>
                            <td>#{venta.cliente}</td>
                            <td>#{venta.estado}</td>
                            <td ><span ng-if="venta.estado == 'abono'">$#{venta.valor_abono | number:0}</span> <span ng-if="venta.estado != 'abono'">---</span> </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary action-button"><i class="icon wb-edit" aria-hidden="true"></i></button>
                                <button type="button" ng-click="borrar(venta.id)" class="btn btn-block btn-danger action-button"><i class="icon wb-close" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Panel Basic -->
    </div>
</div>
<!-- End Page -->

<!-- Modal -->
<div ng-controller="ventasController" class="modal fade modal-fade-in-scale-up" id="Modal_nueva_venta" aria-hidden="true" aria-labelledby="Modal_nueva_venta" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form ng-submit="dataForm.$valid && save()" autocomplete="off" name ="dataForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Nueva Venta</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-material floating">
                        <select class="form-control" name="producto" ng-model="form.producto" ng-options="producto.nombre + ' -> ' + producto.capacidad for producto in productos track by producto.id" required>
                        </select>
                        <label class="floating-label">Producto</label>
                    </div>
                    <div class="form-group form-material floating">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="precio" ng-model="form.precio" required />
                                <label class="floating-label">Precio de Venta</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-material floating">
                        <input type="text" class="form-control" name="nombre" ng-model="form.nombre" required/>
                        <label class="floating-label">Nombre del Cliente</label>
                    </div>
                    <div class="form-group form-material floating">
                        <select class="form-control" name="estado" ng-model="form.estado" required>
                            <option value="debe">debe</option>
                            <option value="pago">pago</option>
                            <option value="abono">abono</option>
                        </select>
                        <label class="floating-label">Estado</label>
                    </div>
                    <div class="form-group form-material floating">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="abono" ng-model="form.abono"/>
                                <label class="floating-label">Valor Abonado</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default margin-0" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"  ng-disabled='!dataForm.$valid'>Guardar</button>
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
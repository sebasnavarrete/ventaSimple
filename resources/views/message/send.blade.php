@extends('base.master')
@section('content')
        <!-- Page -->
<div class="page" style="animation-duration: 0s; opacity: 1;" ng-controller="messageController">
    <div class="page-content">
        <!-- Panel Form Elements -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">#{tittle}</h3>
            </div>
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-md-12">
                    <!-- Menu -->
                        <div class="steps row">
                            <div class="step col-md-4" ng-class="{'current': step == 1, 'done' : stepdone1 && step != 1}">
                                <span class="step-number">1</span>
                                <div class="step-desc">
                                    <span class="step-title">Mensaje</span>
                                    <p>Mensaje a enviar</p>
                                </div>
                            </div>
                            <div class="step col-md-4" ng-class="{'current': step == 2 , 'done' : stepdone2 && step != 2}">
                                <span class="step-number">2</span>
                                <div class="step-desc">
                                    <span class="step-title">Datos de envío</span>
                                    <p>Información</p>
                                </div>
                            </div>
                            <div class="step col-md-4" ng-class="{'current': step == 3}">
                                <span class="step-number">3</span>
                                <div class="step-desc">
                                    <span class="step-title">Confirmación</span>
                                    <p>Verifica la información</p>
                                </div>
                            </div>
                        </div>
                    <!-- End Menu -->
                    </div>
                    <div id="master-panel" class="col-md-12" >
                        <div id="message-panel" class="col-md-12" ng-show="step == 1">
                            <div class="col-sm-6  col-md-4">
                                <!-- Example Textarea -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Mensaje</h4>
                                    <textarea class="form-control" id="text" rows="3" ng-model="message.text" required></textarea>
                                </div>
                                <!-- End Example Textarea -->
                            </div>
                        </div>
                        <div id="data-panel" class="col-md-12" ng-show="step == 2">
                            <div class="col-sm-6 col-md-4">
                                <!-- Example Rounded Input -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Número de Destino</h4>
                                    <input type="text" class="form-control round" id="number">
                                </div>
                                <!-- End Example Rounded Input -->
                            </div>
                        </div>
                        <div id="confirmation-panel" class="col-md-12" ng-show="step == 3">
                            <div class="col-sm-6  col-md-4">
                                <button type="button" onclick="send()" class="btn btn-block btn-primary">Enviar Mensaje</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <nav>
                            <ul class="pager message-pager">
                                <li><button ng-disabled='step == 1' type="button" class="btn btn-outline btn-primary" ng-click="previousStep()">Anterior</button></li>
                                <li ng-show="step < 3"><button type="button" class="btn btn-outline btn-primary" ng-click="nextStep()">Siguiente</button></li>
                                <li ng-show="step == 3"><button type="button" class="btn btn-outline btn-primary" ng-click="send()">Enviar</button></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Panel Form Elements -->
    </div>
</div>
<!-- End Page -->
@endsection
@section("script")
<script type="text/javascript">
    var baseUrl = "/comunicapp/public/";
    var GetDataDone = $.Deferred();
    function send(){
        var num = $("#number").val();
        var text = $("#text").val();
        $.get(baseUrl+"message/send/"+num+"/"+text, function(data, status){
            if(status == "success"){
                console.log(data);
            }else{
                console.log(status);
            }
        });
    }
    menuopt("message");
</script>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard - Sistema de Seguimiento') }}</div>
                <div class="card-body">
                    <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
                    <p>Sistema de Seguimiento de Proyectos y Tareas</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h5>📊 Proyectos</h5>
                                    <p>Gestionar proyectos del sistema</p>
                                    <a href="#" class="btn btn-light btn-sm">Ver Proyectos</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h5>✅ Tareas</h5>
                                    <p>Administrar tareas pendientes</p>
                                    <a href="#" class="btn btn-light btn-sm">Ver Tareas</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h5>👥 Empleados</h5>
                                    <p>Gestionar empleados del equipo</p>
                                    <a href="#" class="btn btn-light btn-sm">Ver Empleados</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <h5>📈 Reportes</h5>
                                    <p>Ver reportes y estadísticas</p>
                                    <a href="#" class="btn btn-light btn-sm">Ver Reportes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="alert alert-info">
                                <strong>Estado del proyecto:</strong> Configuración base completada ✅
                                <br><small>Autenticación funcionando | Dashboard inicial creado</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
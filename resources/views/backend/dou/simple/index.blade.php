@extends('layouts.master')
@section('content')
<div class="content-page">
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Busca Simplificada</h2>
                </div>
             
            </div>
        </div>
<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="card m-auto" style="max-width:850px">
            <div class="card-body">
                <form class="d-flex align-items-center" action= "#" method="GET">
                    <i class="fas fa-search d-none d-sm-block h4 text-body m-0"></i>
                    <input class="form-control form-control-lg flex-shrink-1 form-control-borderless" type="search" placeholder="Informe o termo que deseja pesquisar nas Edições do Diário Oficial" name="searchbar">
                    <a href="{{route('simple.index')}}"></a>
                    <button class="btn btn-success btn-lg" type="submit">Localizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="card m-auto" style="max-width: 850px;border-style: none;">
            <div class="card-body" style="border-style: none;border-color: var(--bs-card-cap-bg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><a href="{{route('advanced.index')}}">Busca Avançada</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="card m-auto" style="max-width: 850px;border-style: none;">
            <div class="card-body" style="border-style: none;border-color: var(--bs-card-cap-bg);">
                <div class="container">
                    <div class="row">
                      
                       <h4>{{$results->escavador}}</h4>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
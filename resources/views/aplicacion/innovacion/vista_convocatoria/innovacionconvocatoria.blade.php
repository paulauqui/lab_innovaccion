@extends('layouts.aplicacion.app')
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">CONVOCATORIAS</h1>
                
            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/laboratorio-side-bkg.png') }}" alt="Side banner"></div>
        </div>
    </section>

    <section class="searchbar-container bg-secondary">
    <form class="container" action="{{route('convocatorias.search')}}" method="POST">
            @csrf
            @method("POST")

            <div class="d-sm-flex align-items-center px-4 pt-4 pb-3">
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label" for="tipoconvocatoria">Tipo de convocatoria</label>
                    <select class="form-control custom-select select2" id="tipoconvocatoria" name="tipoconvocatoria" data-clean>
                        <option value="" selected disabled hidden>Seleccione un tipo</option>
                        <option value="1">Innovación Abierta</option>
                        <option value="2">Innovación Social</option>
                        <option value="3">Innovación Pública</option>
                    </select>

                </div>
               
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label for="innovacion_abierta_sector_productivo" class="control-label">Sector productivo</label>
                    <div class= "m-0 p-0 w-100 form-group">
                                                                            
                        <select style="width:100%;" id="innovacion_abierta_sector_productivo" name="sector_productivo[]"
                            class="form-control custom-select select2"
                           
                            data-placeholder="Seleccione uno o varios sectores"
                            data-close-on-select="false"
                            multiple>
                      
                        </select>

                    </div>
                    

                </div>
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label for="innovacion_abierta_subsector_productivo" class="control-label">Subsector productivo</label>
                    <div class= "m-0 p-0 w-100 form-group">
                                                                            
                        <select style="width:100%;" id="innovacion_abierta_subsector_productivo" name="subsector_productivo[]"
                            class="form-control custom-select select2"
                            data-placeholder="Seleccione uno o varios subsectores"
                            data-close-on-select="false"
                            multiple>

                        </select>

                    </div>

                </div>

                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label for="innovacion_abierta_ods" class="control-label">ODS</label>
                    <div class= "m-0 p-0 w-100 form-group">
                                                                            
                        <select style="width:100%;" id="innovacion_abierta_ods" name="ods[]"
                            class="form-control custom-select select2"
                            data-ajax--url="{{route('api.ods-categoria.select2')}}"
                            data-ajax--data-type="json"
                            data-placeholder="Seleccione uno o varios ODS"
                            data-ajax--cache="true"
                            data-close-on-select="false"
                            multiple>
                        </select>
                    </div>
        
                </div>
                {{-- <div class="d-sm-flex align-items-center">
                    
                    
                </div> --}}
               <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn " style="background: #ff7f00; color:#fafafc;" type="submit">Filtrar</button>
                </div>

            </div>


         
        </form>
    </section>

    <div class="position-relative" style=" height: 420px; background:linear-gradient(0deg, rgba(180,6,94,1) 0%, rgba(239,147,0,1) 100%);">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
                </path>
            </svg>
        </div>
    </div>
    <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
        <h2 class="text-light text-center pt-3 pt-md-2 mb-5 uppercase">CONVOCATORIAS</h2>
        
        <div class="row mb-4">
        @foreach ($convocatorias as $convocatoria)
        <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="pb-2">
                <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                    <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:#ff7f00 ">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                   
                    <div class="row pt-3 no-gutters">
                        <div class="col-md-4 justify-content-md-center">
                            <div class="card-body text center">
                                <h1 class="text-center font-weight-bold font-size-lg">INICIO</h1>
                                <h1 class="text-center font-weight-bold" style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_inicio))}}</h1>    
                                <p class="text-center font-weight-bold font-size-lg">{{date('M', strtotime( $convocatoria->fecha_inicio))}}</p>
                                <div class="row justify-content-center ">
                                    <button type="button" class="btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm btn-icon ml-2"><i class="fe-twitter"></i></button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                @if ($convocatoria->tipoconvocatoria_id ==2)
                                    @foreach ($convocatoria->conods as $objetivo)
                                        <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",$convocatoria->id)}}">{{$objetivo->objetivoid->nombre}}</a> </h3>
                                    @endforeach
                                @else
                                    @foreach ($convocatoria->consectores as $sector)
                                        <h3 class="card-title"><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",$convocatoria->id)}}">{{$sector->sectorid->nombre}}</a> </h3>
                                    @endforeach
                                @endif
                                
                                <p class="card-text font-size-sm">{{$convocatoria->descripcion}}</p>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    <h2 class="text-right font-weight-bold font-size-lg pr-4">FINALIZA {{date('d M', strtotime( $convocatoria->fecha_fin))}}</h2>
                    
                </article>
            </div>
        </div>
        @endforeach

    </div>
     
    <div class="col-12">{{ $convocatorias->links() }}</div>
    </section>
   
@endsection
@section('footer')
<script>
    $(document.body).on("change","#to-destination",function(){
    
    $("#from-destination").empty();
    if (this.value==1) {
        
        $("#from-destination").removeAttr('disabled');
         
    }
    else{
       
        $("#from-destination").attr('disabled','disabled');   

    }
    

    });

</script>
<script>
    $(document).ready(function(){
        var listasectores=[];
        var idsubsector;
        $('#tipoconvocatoria').change(function(){
            if ($('#tipoconvocatoria').val()==2){
                idsector='#innovacion_abierta_sector_productivo';
                value=$('#tipoconvocatoria').val()
                recargarlistasectores(idsector,value);
                idsubsector='#innovacion_abierta_subsector_productivo';
                listasectores=[]
                recargarlista(listasectores,idsubsector);
                $("#innovacion_abierta_subsector_productivo").attr('disabled','disabled');   
                $("#innovacion_abierta_sector_productivo").attr('disabled','disabled');  
            }
            else{
                $("#innovacion_abierta_subsector_productivo").removeAttr('disabled'); 
                $("#innovacion_abierta_sector_productivo").removeAttr('disabled');
                idsector='#innovacion_abierta_sector_productivo';
                value=$('#tipoconvocatoria').val()
                recargarlistasectores(idsector,value);
                idsubsector='#innovacion_abierta_subsector_productivo';
                listasectores=[]
                recargarlista(listasectores,idsubsector);
            }
            
        });
        function recargarlistasectores(idsector,value){
            // data-ajax--url="{{route('api.tipo-sector.select2',1)}}"
            // data-ajax--data-type="json"
            //                 data-ajax--data-cache="true"
            if (value==1){
                $.ajax({
                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',1)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){
                        
                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                            
                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });
                
            }
            else if (value==3){
                $.ajax({

                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',3)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){
                        
                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                            
                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });

            }
            else{
                $.ajax({

                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',2)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){
                        
                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                            
                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });

            }
            
        };
    });

</script>
<script type="text/javascript">
 
    $(document).ready(function(){
        var listasectores=[];
        var idsubsector;
        $('#innovacion_abierta_sector_productivo').change(function(){
            idsubsector='#innovacion_abierta_subsector_productivo';
            listasectores=$('#innovacion_abierta_sector_productivo').val();
        
            recargarlista(listasectores,idsubsector);
        });
    });
    
    function recargarlista(listasectores,idsubsector){
        
        if (listasectores.length!=0){
            var subsectorlist=$(idsubsector).val();
            $.ajax({

                type:"POST",
                url:"{{route('api.tipo-subsector.select2')}}",
                data: { listasectores1: JSON.stringify(listasectores)} ,
                
                success:function(r){
                    $(idsubsector).find('option').remove();
                    $(r).each(function(i,v){
                        if (subsectorlist.includes(v.id.toString())){
                            $(idsubsector).append('<option selected value="'+ v.id+'">'+v.text+'</option>');
                        }
                        else{
                            $(idsubsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                        }
                        
                    });
                },
                error:function(){
                    alert('Ocurrio un error en el servidor ..');
                }

            });
        }
        else{
            $(idsubsector).find('option').remove();
        }     
    };
</script>
    
@endsection
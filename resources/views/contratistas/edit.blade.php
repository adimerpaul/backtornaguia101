@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contratista
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contratista, ['route' => ['contratistas.update', $contratista->id], 'method' => 'patch']) !!}

                        @include('contratistas.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
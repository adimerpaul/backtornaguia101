@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Conductor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($conductor, ['route' => ['conductors.update', $conductor->id], 'method' => 'patch']) !!}

                        @include('conductors.fields_edit')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
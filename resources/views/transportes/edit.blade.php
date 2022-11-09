@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Transporte
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($transporte, ['route' => ['transportes.update', $transporte->id], 'method' => 'patch']) !!}

                        @include('transportes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
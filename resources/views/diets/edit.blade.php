@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Diet
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($diet, ['route' => ['diets.update', $diet->id], 'method' => 'patch']) !!}

                        @include('diets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
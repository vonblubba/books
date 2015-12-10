@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Quote
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    @if(isset($quote))
                        {!! Form::model($quote, array('route' => array('quote.update', $quote->id), 'method' => 'PUT', 'class' => 'form-horizontal')) !!}

                    @else
                        {!! Form::open(array('action' => 'QuoteController@store', 'class' => 'form-horizontal')) !!}
                    @endif

                    <div class="form-group">
                        {!! Form::label('author-first_name', 'Nome', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('quote-body', 'Testo', array('class' => 'col-sm-3 control-label')) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('body', Input::old('body'), array('class' => 'form-control', 'rows' => 4, 'cols' => 50)) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                        {!! Form::submit('Salva', array('class' => 'btn btn-default')) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

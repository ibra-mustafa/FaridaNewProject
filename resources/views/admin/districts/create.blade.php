@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info ">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('Add') @lang('District')</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['action' => 'Admin\DistrictController@store','class'=>'form-horizontal','method' => 'POST']) !!} {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group {{$errors->first('name') ? 'has-error' :  ''}}">
                        {!! Form::label('name', __('Name'), ['class' => 'control-label col-sm-2']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', old('name'), ['class' => 'form-control','required'=>'required' , 'placeholder'=>__('Name') ]) !!} @if($errors->first('name'))
                                <div class="help-block">{{$errors->first('name')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{$errors->first('name_ar') ? 'has-error' :  ''}}">
                        {!! Form::label('name_ar', __('Arabic Name'), ['class' => 'control-label col-sm-2']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name_ar', old('name_ar'), ['class' => 'form-control','required'=>'required' , 'placeholder'=>__('Arabic Name') ]) !!} @if($errors->first('name_ar'))
                                <div class="help-block">{{$errors->first('name_ar')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{$errors->first('city_id') ? 'has-error' :  ''}}">
                        {!! Form::label('city_id', __('City'), ['class' => 'control-label col-sm-2']) !!}
                        <div class="col-sm-10">
                            {!! Form::select('city_id', $cities, null,['class' => 'form-control','required'=>'required' , 'placeholder'=>__('City') ]) !!} @if($errors->first('city_id'))
                                <div class="help-block">{{$errors->first('city_id')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{$errors->first('district_zone_id') ? 'has-error' :  ''}}">
                        {!! Form::label('district_zone_id', __('Zone'), ['class' => 'control-label col-sm-2']) !!}
                        <div class="col-sm-10">
                            {!! Form::select('district_zone_id', $districtZones, null,['class' => 'form-control','required'=>'required', 'placeholder'=>__('Zone') ]) !!} 
                            @if($errors->first('district_zone_id'))
                                <div class="help-block">{{$errors->first('district_zone_id')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-2 col-sm-offset-10 no-padding">
                        <button type="submit" class="btn btn-info btn-block btn-flat pull-left">@lang('Save')</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

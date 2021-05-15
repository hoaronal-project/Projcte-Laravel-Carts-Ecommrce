@extends('layouts.dashboard.app')

@section('content')

<div class="c-subheader justify-content-between px-3">
    <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
        <li class="breadcrumb-item">@lang('dashboard.dashboard')</li>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.markets.index') }}">@lang('dashboard.markets')</a></li>
        <li class="breadcrumb-item active">@lang('dashboard.edit')</li>
    </ol>
</header>

<div class="c-body">
    <main class="c-main">

<div class="col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>@lang('dashboard.edit')</strong>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-12">

                    <form action="{{ route('dashboard.markets.update', $market->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}


                        <div class="form-group">
                            <label>@lang('dashboard.name_ar')</label>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $market->getTranslation('name', 'ar') }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.name_en')</label>
                            <input type="text" name="name_en" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" value="{{ $market->getTranslation('name', 'en') }}">
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>


                        

                        <div class="form-group">
                            <label>@lang('dashboard.image')</label>
                            <input type="file" name="image"  class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }} image">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <img src="{{ $market->image_path }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div>

            </div>
            <!--/.row-->
        </div>

    </div>

</div>

@endsection

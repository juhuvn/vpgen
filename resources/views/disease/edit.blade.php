@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Disease') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('disease.update', $disease->id)}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name_en" class="col-md-4 col-form-label text-md-right">{{ __('Name EN') }}</label>

                            <div class="col-md-6">
                                <input id="name_en" type="text" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en" value="{{ $disease->name_en }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name_vi" class="col-md-4 col-form-label text-md-right">{{ __('Name VI') }}</label>

                            <div class="col-md-6">
                                <input id="name_vi" type="text" class="form-control{{ $errors->has('name_vi') ? ' is-invalid' : '' }}" name="name_vi" value="{{ $disease->name_vi }}" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description_vi" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description_vi" class="form-control{{ $errors->has('description_vi') ? ' is-invalid' : '' }}" name="description_vi" required>{{ $disease->description_vi }}</textarea> 
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

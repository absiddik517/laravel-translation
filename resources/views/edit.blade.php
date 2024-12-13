@extends('translation::layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update translation') }}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-danger">
                      {{ session()->get('message') }}
                    </div>
                    @endif
                    
                    <form method="POST" action="{{ route('translation.update', $key) }}">
                        @csrf
                        <input type="text" class="form-control" name="path" value="{{ $path }}" />
                        <div class="form-group row">
                            <label for="value" class="col-md-4 col-form-label text-md-right">Key</label>

                            <div class="col-md-6">
                                <input id="value" type="text" class="form-control @error('value') is-invalid @enderror" value="{{ $key }}" disabled="">
                            </div>
                        </div>
                        @foreach(config('translation.languages') as $lang)
                        <div class="form-group row">
                            <label for="{{ $lang }}" class="col-md-4 col-form-label text-md-right">{{ strtoupper($lang) }} {{ $file }}</label>

                            <div class="col-md-6">
                                <textarea id="{{ $lang }}" type="text" class="form-control @error($lang) is-invalid @enderror" name="{{ $lang }}">
                                  {{ ($file) ? trans($file.'.'.str_replace('||', '.', $key), [], $lang) : trans(str_replace('||', '.', $key), [], $lang) }}
                                </textarea>

                                @error($lang)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endforeach

                        

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
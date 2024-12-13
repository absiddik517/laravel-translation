@extends('translation::layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new translation') }}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-danger">
                      {{ session()->get('message') }}
                    </div>
                    @endif
                    
                    <form method="POST" action="{{ route('translation.store') }}">
                        @csrf
                        <div class="form-group row">
                          <label for="file" class="col-md-4 col-form-label text-md-right">File</label>

                            <div class="col-md-6">
                                <input type="text" id="file" class="form-control @error('file') is-invalid @enderror" readonly="" name="file" value="{{ $file }}">
                                
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="key" class="col-md-4 col-form-label text-md-right">Key</label>
                            
                            <div class="col-md-6">
                                <input id="key" type="text" name="key" class="form-control @error('key') is-invalid @enderror" readonly="" value="{{ $key }}">
                                
                                @error('key')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @foreach(config('translation.languages') as $lang)
                        <div class="form-group row">
                            <label for="{{ $lang }}" class="col-md-4 col-form-label text-md-right">{{ strtoupper($lang) }}</label>

                            <div class="col-md-6">
                                @if(config('translation.form_field') === "input")
                                <input type="text" class="form-control" id="{{ $lang }}" value="{{ old($lang) ?? $translations[$lang] }}">
                                @else
                                <textarea id="{{ $lang }}" class="form-control @error($lang) is-invalid @enderror" name="{{ $lang }}">
                                  {{ old($lang) ?? $translations[$lang] }}
                                </textarea>
                                @endif

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
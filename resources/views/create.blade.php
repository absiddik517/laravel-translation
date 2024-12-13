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
                                <select id="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}">
                                  <option value="">@lang('Select one')</option>
                                  @foreach($files as $file)
                                    <option value="{{ $file }}">{{ ucfirst($file) }}</option>
                                  @endforeach
                                </select>
                                
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
                                <textarea id="key" type="text" name="key" class="form-control @error('key') is-invalid @enderror">
                                  {{ old('key') }}
                                </textarea>
                                
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
                                <textarea id="{{ $lang }}" type="text" class="form-control @error($lang) is-invalid @enderror" name="{{ $lang }}">
                                  {{ old($lang) }}
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
@extends('translation::layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Language') }}</div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-danger">
                      {{ session()->get('message') }}
                      @php session()->forget('message'); @endphp
                    </div>
                    @endif
                    
                    <table class="table table-secendary">
                      <thead>
                        <th>#</th>
                        <th>@lang('Rakib')</th>
                      </thead>
                      <tbody>
                        @foreach($languages as $language)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('translation.trans', $language) }}">{{ $language }}</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
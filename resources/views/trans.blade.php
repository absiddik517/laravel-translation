@extends('translation::layout.app')

@section('content')
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div style="padding-left: 8px; width: 50%;">
                      @lang('translations')
                      <a href="{{ route('translation.study') }}">Study</a>
                    </div>
                    <div style="width: 50%; text-align: right; padding-right: 8px;">
                      <a href="{{ route('translation.create') }}" class="">{{ __('Create new translation') }}</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-danger">
                      {{ session()->get('message') }}
                      @php session()->forget('message'); @endphp
                    </div>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-secendary">
                      <thead>
                        <th>Key</th>
                        @foreach(config('translation.languages') as $lang)
                          <th>{{ strtoupper($lang) }}</th>
                        @endforeach
                        <th colspan="2" style="text-align: right;">@lang('Action')</th>
                      </thead>
                      <tbody>
                        @foreach($translations as $trans)
                          <tr>
                            <td><a href="{{ route('translation.trans', ['file' => $trans['file']]) }}">{{ $trans['file'] ? $trans['file'] .'.' : '' }}</a>{{ $trans['key'] }}</td>
                            @foreach(config('translation.languages') as $lang)
                              @if($trans['file'])
                                <th>@lang($trans['file'].'.'.str_replace('||', '.', $trans['key']), [], $lang)</th>
                              @else
                                <th>@lang(str_replace('||', '.', $trans['key']), [], $lang)</th>
                              @endif
                            @endforeach
                            <td>
                              <a href="{{ route('translation.edit', [$trans['key'], 'path' => $trans['path']]) }}" class="btn btn-info btn-sm"> Edit </a>
                            </td>
                            
                            <td>
                              <a href="{{ route('translation.delete', [$trans['key'], 'path' => $trans['path']]) }}" class="btn btn-danger btn-sm"> Delete </a>
                            </td>
                            
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection
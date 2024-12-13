@extends('translation::layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8" style="margin-bottom: 25px;">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div style="padding-left: 8px; width: 50%;">@lang('Missing translations')</div>
                    <div style="width: 50%; text-align: right; padding-right: 8px;">
                      
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
                        <th>#</th>
                        <th>Key</th>
                        <th style="text-align: right;">@lang('Action')</th>
                      </thead>
                      <tbody>
                        @forelse($study['missing'] as $key)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $key }}</td>
                            <td style="text-align: right;"><a href="{{ route('translation.study.add', [$key, 'path' => null]) }}" class="btn btn-info">@lang('Add')</a></td>
                          </tr>
                        @empty  
                          <tr>
                            <td colspan="3" style="text-align:center;">
                              @lang('No missing translation found')
                            </td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div style="padding-left: 8px; width: 50%;">@lang('Unused translations')</div>
                    <div style="width: 50%; text-align: right; padding-right: 8px;">
                      
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
                        <th>#</th>
                        <th>Key</th>
                        <th style="text-align: right;">@lang('Action')</th>
                      </thead>
                      <tbody>
                        @forelse($study['unused'] as $key)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $key }}</td>
                            <td style="text-align: right"><a href="{{ route('translation.delete', $key) }}" class="btn btn-danger">@lang('Delete')</a></td>
                          </tr>
                        @empty
                          <tr>
                            <td colspan="3" style="text-align: center;">@lang('No unused translations found')</td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
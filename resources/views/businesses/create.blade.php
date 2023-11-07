@extends('layouts.main', ['title' => 'Create Hospital'])

@section('css')

@endsection

@section('content')

    <div class="row layout-top-spacing">

        <div id="basic" class="col-lg-12 layout-spacing">
            
            <div class="statbox widget box box-shadow">
                <div class="widget-header ps-4 pt-4">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h3>Create Hospital</h3>
                        </div>                 
                    </div>
                </div>

                <div class="widget-content widget-content-area">
                    <div class="row">
                        <div class="col-12 ">
                            <form action="/{{ Request::segment(1) }}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <p>Hospital Name</p>
                                    <input id="t-text" type="text" placeholder="" class="form-control" name="name" value="{{ old('name') }}">

                                    @error('name')
                                        
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p>Address</p>
                                    <input id="t-text" type="text" placeholder="" class="form-control" name="address" value="{{ old('address') }}">
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="mt-4 btn btn-primary">Submit</button>
                            </form>
                        </div>                                        
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection('content')


@section('script')

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <property :properties-data="{{ App\Models\Property::all() }}"></property>

        </div>
    </div>
</div>
@endsection

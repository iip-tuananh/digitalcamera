@extends('layouts.main.master')
@section('title')
{{$pageContent->title}}
@endsection
@section('description')
{!!$pageContent->description!!}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
<div id="content" role="main" class="content-area">
    <div class="row"  id="row-1473975542">
        <div id="col-635266924" class="col small-12 large-12"  >
            <div class="col-inner"  >
            <div class="container section-title-container" >
                <h3 class="section-title section-title-center"><b></b><span class="section-title-main" >{{$pageContent->title}}</span><b></b></h3>
            </div>
            {!!$pageContent->content!!}
            </div>
        </div>
    </div>
</div>
</main>
@endsection
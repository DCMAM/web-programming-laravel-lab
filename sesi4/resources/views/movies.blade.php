@extends('template')
@section('title', 'Home')
@section('content')
<div class="d-flex justify-content-center mt-3">
    <form class="form-inline" action="/search" method="get">
        <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search" />
        <button class="btn btn-outline-dark">Search</button>
    </form>
</div>
<div class="row m-2 d-flex justify-content-center">
    @foreach($movies as $m)
    <div class="col col-sm-3">
        <div class="card bg-light mb-3 border border-warning">
            <div class="card-body">
                <div>
                    <img class="card-img-top" src="{{Storage::url($m->image)}}" alt="image" />
                    <div class="m-3">
                        <h4 class="card-title text-center">{{$m->title}}</h4>

                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-outline-info" href="/detail/{{$m->id}}">Details</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="m-5 d-flex justify-content-center">
    {{$movies->links()}}
{{--    <a href="{{$movies->previousPageUrl()}}">&laquo</a>--}}
{{--    @for($i = 1; $i <= $movies->lastPage(); $i++)--}}
{{--        <a href="{{$movies->url("$i")}}">{{$i}}</a>--}}
{{--    @endfor--}}
{{--    <a href="{{$movies->nextPageUrl()}}">&raquo</a>--}}
</div>
@endsection

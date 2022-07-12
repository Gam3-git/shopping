@extends('layouts.frontend')


@section('content')
<div class="mt-2">
    <p>@foreach ($textar as $item)
        {{$item}}
        @endforeach
        <button type="button" class="btn btn-dark" id="B1" value="{{$item}}">Dark</button>
    </p>
</div>
@endsection
@section('footerscript')
<script>
    $("#B1").click(function(){ new Sweetalert2($("#B1").val()); });
</script>
@endsection

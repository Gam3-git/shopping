@extends('layouts.frontend')


@section('content')
<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
    <p>{{ config('app.timezone') }} {{ now() }}</p>
    <p>{{ $email }} {{ $tel }} </p>
    <ul>@foreach ($drinks as $item)
        <li>{{ $item }} </li>
        @endforeach
    </ul>
    <button id="B1" type="button" class="btn btn-primary" value="{{ $email }} {{ $tel }}">Primary</button>
    <button id="B2" type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
</div>
@endsection

@section('footerscript')
<script>
    $("#B1").click(function(){ Swal.fire( 'Tester',$("#B1").val(),'question') });
    $("#B2").click(function(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })
    });
</script>
@endsection

@if(\Session::has('error'))
    <div class="alert alert-warning mt-3" role="alert">
        {!! \Session::get('error') !!}
    </div>
@endif


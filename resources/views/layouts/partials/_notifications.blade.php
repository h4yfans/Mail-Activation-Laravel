<div class="row">
    <div class="col-md-6 col-md-offset-3">
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        @endif

        @if(Session::has('info'))
            <div class="alert alert-info">
                {{Session::get('info')}}
            </div>
        @endif
    </div>
</div>
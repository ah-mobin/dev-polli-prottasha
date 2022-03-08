@if(session()->has('message'))
<div class="alert alert-success">
    <strong class="alert text-success">{{ session()->get('message') }}</strong>
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif
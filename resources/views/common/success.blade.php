@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:20px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong class="text-dark">{{ session('status') }}</strong>
</div>

@elseif(session('status_success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top:20px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong class="text-dark">{{ session('status_success') }}</strong>
</div>

@elseif(session('status_danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:20px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong class="text-dark">{{ session('status_danger') }}</strong>
</div>
@endif
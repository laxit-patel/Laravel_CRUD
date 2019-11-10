


@if ($message = Session::get('success'))
<div class="flesh-fixed alert alert-success alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="fa fa-check-circle"></i></span>
    <span class="alert-inner--text"><strong>Success!</strong> {{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if ($message = Session::get('error'))
<div class="flesh-fixed alert alert-dangers alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="fa fa-times-circle"></i></span>
    <span class="alert-inner--text"><strong>Error!</strong> {{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="flesh-fixed alert alert-warning alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="fa fa-engine-warning"></i></span>
    <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if ($message = Session::get('info'))
<div class="flesh-fixed alert alert-info alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="fa fa-info-circle"></i></span>
    <span class="alert-inner--text"><strong>Error!</strong> {{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($message = Session::get('default'))
<div class="flesh-fixed alert alert-default alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="fa fa-info-circle"></i></span>
    <span class="alert-inner--text"><strong>Attention!</strong> {{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if ($errors->any())
<div class="flesh-fixed alert alert-default alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="fa fa-bell"></i></span>
    <span class="alert-inner--text"><strong>Attention!</strong> {{ $message }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif
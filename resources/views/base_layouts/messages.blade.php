@if ($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger btn-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle"></i> <strong>{{$error}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endforeach
@endif

@if(session('error')!== null)
    <div class="alert alert-danger btn-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle"></i> <strong>{{session('error')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('success')!== null)
    <div class="alert alert-success btn-success alert-dismissible fade show" role="alert">
        <i class="fas fa-thumbs-up"></i> <strong>{{session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
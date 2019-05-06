
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif




  @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <p class="alert alert-danger">{{ $error }}</p>
              @endforeach
  @endif

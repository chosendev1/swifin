@if ($flash=session('message'))
  <div class="alert dark alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    SUCCESS: {{ $flash }}
  </div>
@endif

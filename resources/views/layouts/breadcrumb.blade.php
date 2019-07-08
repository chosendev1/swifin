<div class="page-header page-header-bordered">
  @yield('header_title')
  {{-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">Layouts</a></li>
  </ol> --}}
  <div class="page-header-actions">
    <div class="row no-space w-250 hidden-sm-down">
      <div class="col-mm-6">
        <div class="counter">
          @if($user_balance > 0)
            <span class="counter-number font-weight-medium">UGX {{ $user_balance }}</span>
            <div class="text-success"><strong>Balance</strong></div>
          @else
            <span class="counter-number font-weight-medium">UGX {{ $user_balance }}</span>
            <div class="text-danger"><strong>Balance</strong></div>
          @endif
        </div>
      </div>
    </div>
    </div>
</div>

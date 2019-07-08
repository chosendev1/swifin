@section('balance')
<div class="counter">
	@if($user_balance > 0)
	  <span class="counter-number font-weight-medium">UGX {{ $user_balance }}</span>
	  <div class="text-success"><strong>Balance</strong></div>
	@else
	  <span class="counter-number font-weight-medium">UGX {{ $user_balance }}</span>
	  <div class="text-danger"><strong>Balance</strong></div>
	@endif
</div>
@endsection

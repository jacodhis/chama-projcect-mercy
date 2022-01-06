@extends('layouts.admin')
@section('title')
 {{$user->name}} information
@endsection

@section('content')
  <?php
     $total = 0;
     $accounts = $user->accounts;
	 foreach($accounts as $account){
		 $total = $account->amount + $total;
	 }

  ?>
<div class="module">
							<div class="module-head">
								<h3>{{$user->name}}</h3><br>
								@include('inc.messages')
							</div>
							<div class="module-body table">                         
                                        <p>email : {{$user->email}}</p>
                                        <p>Phone : {{$user->phone}}</p>
                                        <p>ID_Number : {{$user->id_number}}</p>
                                        <p>Savings : {{$total}}</p>							
							</div>
							<div>
								<h3><a href="/chama/deposits/{{auth()->user()->id}}"> payments deposits </a> | <a href="/withdrawals/{{auth()->user()->id}}"> withdrawals </a></h3>
							</div>
						</div>
@endsection



@section('footer')
<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
@endsection
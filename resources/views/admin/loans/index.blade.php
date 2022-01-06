@extends('layouts.admin')
@section('title')
 admin dashboard showing loand
@endsection

@section('content')
  

<div class="module">
							<div class="module-head">
								<h3>LOANS</h3><br>
								@include('inc.messages')
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table  table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>amount</th>
											
											<th>loan borrower</th>
											
											<th>remove </th>
											<th>more</th>
										</tr>
									</thead>
									<tbody>
                                    @if($loans->count()> 0)
                                       @foreach($loans as $loan)
										<tr >
											<td>{{$loan->amount}}</td>
											<td>{{$loan->user->name}}</td>
											<!-- <td>{{$loan->phone}}</td>
											<td>{{$loan->role_as}}</td> -->
											
											<td class="center">
												<a href="/members/#">X</a>
											</td>
											<td class="center"> <a href="/loans/info/{{$loan->id}}}}" class="btn btn-primary">more</a></td>
										</tr>
                                        @endforeach
                                    @else
                                    no Users
                                    @endif
										
								
									</tbody>
									<tfoot>
                                    <tr>
									<th>amount</th>
											
											<th>loan borrower</th>
											
											<th>remove </th>
											<th>more</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
@endsection



@section('footer')
<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
@endsection
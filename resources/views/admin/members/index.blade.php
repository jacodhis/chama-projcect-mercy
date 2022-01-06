@extends('layouts.admin')
@section('title')
 admin dashboard
@endsection

@section('content')
  

<div class="module">
							<div class="module-head">
								<h3>CHAMA MEMBERS</h3><br>
								@include('inc.messages')
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table  table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>name</th>
											<th>email</th>
											<th>phone(s)</th>
											<th>role</th>
											
											<th>Delete User</th>
											<th>more</th>
										</tr>
									</thead>
									<tbody>
                                    @if($users->count()> 0)
                                       @foreach($users as $user)
										<tr >
											<td>{{$user->name}}</td>
											<td>{{$user->email}}</td>
											<td>{{$user->phone}}</td>
											<td>{{$user->role_as}}</td>
											
											<td class="center">
												<a href="/members/{{$user->id}}">X</a>
											</td>
											<td class="center"> <a href="/members/moreinformation/{{$user->id}}" class="btn btn-primary">more</a></td>
										</tr>
                                        @endforeach
                                    @else
                                    no Users
                                    @endif
										
								
									</tbody>
									<tfoot>
                                    <tr>
											<th>name</th>
											<th>email</th>
											<th>phone(s)</th>
											<th>Engine version</th>
											<th>CSS grade</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
@endsection



@section('footer')
<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
@endsection
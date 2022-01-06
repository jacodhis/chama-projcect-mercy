@extends('layouts.member')
@section('title')
 member dashboard
@endsection

@section('content')
  

<div class="module">
							<div class="module-head">
								<h3>Make Deposit</h3><br>
							
							</div>
							<div class="module-body table">
							 
                            <div>
                                <label for="deposit" class="form-group">Deposit Amount</label>
                                <input type="number" class="form-control">
                            </div>
                            <div>
                               <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

							</div>
						</div>
@endsection



@section('footer')
<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
@endsection
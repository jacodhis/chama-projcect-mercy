@extends('layouts.member')

@section('title')
Member dashboard Page
@endsection

@section('content')
<?php
    $total = 0;
    foreach($accounts as $account){
        $total = $total + $account->amount;
    }

;?>
<div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">

                                <?php
                                       if($total < 10000){?>
                                        <a href="/chama/borrow-loan/{{auth()->user()->id}}" class="btn-box big span4">
                                            <i class=" icon-random"></i><b>
               
                                        </b>
                                        <p class="text-muted">less than 10000 kshs </p>
                                                        <p >
                                                           short Term Borrow Loan </p>
                                                    <?php
                                                
                                                    }else{?>
                                                     <a href="/chama/borrow-loan-more/{{auth()->user()->id}}" class="btn-box big span4">
                                            <i class=" icon-random"></i><b>
               
                                        </b>
                                                    <p> more than 10000 </p>
                                                        <p class="text-muted">
                                                        long Term Borrow Loan </p>
                                                    <?php
                                                    }
                                                ;?>
                                       
                                 
                                   
                                       

                                    </a><a href="/chama/make-deposit" class="btn-box big span4"><i class="icon-user"></i><b>50</b>
                                        <p class="text-muted">
                                            make Deposit/Payment</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>
                                    
                                        {{$total}}
                                    </b>
                                        <p class="text-muted">
                                        Savings/My Account  
                                            </p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>  payments</b>
                                                    <!-- <p class="text-muted">
                                                
                                                    </p> -->
                                                </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>#</b>
                                                <p class="text-muted">
                                                        40
                                                    </p>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total #</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                                    Rate</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 78%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 56%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 44%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                           
                          
                        </div>
                        <!--/.content-->
                    </div>
@endsection
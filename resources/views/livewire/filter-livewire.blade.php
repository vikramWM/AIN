<div>
<style>
	.shadow-sm {
    display: none;
}
.text-gray-700 {
    margin-top: revert;
}
</style>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div id="kt_content_container" class="">
            <div class="toolbar" id="kt_toolbar">
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Order
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <small class="text-muted fs-7 fw-bold my-1 ms-1">Assignement In Need for MarketingTeamRole</small>
                    </div>
                    
                </div>
	        </div>

			<div class="col-xl-12">
				@include('order.filter.marketing')
			</div>
            
			<div class="card card-xl-stretch  mb-xl-">
				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bolder fs-3 mb-1">All User</span>
						<span class="text-muted mt-1 fw-bold fs-7"></span>
					</h3>
				</div>
				<div class="card-body py-3">
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Orders</span>
						</h3>
						
					</div>
					<div class="card-body py-3">
						<div class="table-responsive">
							<table  class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
								<thead class="p-2">
									<tr class="fw-bolder text-muted bg-light">
										<th class="min-w-15px">SR</th>
										<th class="min-w-50px">Order Code</th>
										<th class="min-w-50px text-center">User</th>
										<th class="min-w-30px">O Date</th>
										<th class="min-w-30px">D Date</th>
										<th class="min-w-100px">Title</th>
										<th class="min-w-40px">Status</th>
										<th class="min-w-40px">Word</th>
										<th class="min-w-40px">Amount</th>
										<th class="min-w-40px">Received</th>
										<th class="min-w-40px" >Due</th>
										<th class="min-w-100px text-center" >Action</th>
									</tr>
								</thead>
								<tbody style="display:none" id="content" class="searchData">
							
								</tbody>
								<tbody class="allData">

                                    @foreach($orders as $order)
									<tr id="order_{{ $order->id }}" class="{{ ($order->is_read == 1) ? 'bold-row' : '' }}" onclick="markAsRead('{{ $order->id }}')">										<td>
										{{ $loop->index + 1 }}
										</td>
										<td class="text-center">
											{{ $order->order_id }}
                                            @if($order->is_fail == 1)
												<span class="badge badge-light-danger fs-7 fw-bold">Fail Order</span>
											@endif
											@if ($order->resit == 'on')
                                                <span class="badge badge-light-danger fs-7 fw-bold">Resit Work</span>
                                            @endif
											@if($order->services == 'First Class Work')
												<span class="badge badge-light-info fs-7 fw-bold">First Class Work</span>
											@endif

                                        </td>
										<td  class="text-center">
										@if($order->user != null && ($order->user->name != '' || $order->user->name == null))
											{{ $order->user->name }} <br>	
											<span class="badge badge-light-danger fs-7 fw-bold">{{ $order->user->mobile_no}}</span>
										@else
											N/A
										@endif

										</td>
										<td>
											@if($order->order_date != '')
											{{ \Carbon\Carbon::parse($order->order_date)->format('d M Y') }}
											@else
												Select Order date
											@endif
											
										</td>
										<td>
										{{ \Carbon\Carbon::parse($order->delivery_date)->format('d M Y') }}
										@if( $order->draftrequired == 'Y')
                                            <span class="badge badge-light-success  fs-7 fw-bold">{{ \Carbon\Carbon::parse($order->draft_date)->format('d M Y') }} ({{ \Carbon\Carbon::parse($order->draft_time)->format('H:i') }})</span>	
                                            @endif	
										</td>
                                        <td style="width:50px">
                                          {{$order->title }}
										  	@if( $order->chapter != '' )
                                            <span class="badge badge-light-danger fs-7 fw-bold">{{$order->chapter}}</span>	
                                            @endif	

											@if( $order->tech == '1' )
                                            <span class="badge badge-light-success fs-7 fw-bold">Technical Work</span>	
                                            @endif	
											@if ($order->module_code != '')
                                                <span class="badge badge-light-danger fs-7 fw-bold">{{$order->module_code}}</span>
                                            @endif
                                        </td>
										<td>
                                            @if($order->projectstatus == 'Other')
											<span class="badge badge-light-primary fs-7 fw-bold " style="background:#44f2e4; color:black">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Pending')
											<span class="badge badge-light-warning fs-7 fw-bold" style="background:pink; color:white">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'In Progress')
											<span class="badge badge-light-info fs-7 fw-bold">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Hold Work')
											<span class="badge badge-light-danger fs-7 fw-bold">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Completed')
											<span class="badge badge-light-warning fs-7 fw-bold" style="background:#eaea00; color:black">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Delivered')
											<span class="badge badge-light-success fs-7 fw-bold" style="background:green; color:white">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Feedback')
											<span class="badge badge-light-primary fs-7 fw-bold" style="background:black; color:white">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Feedback Delivered')
											<span class="badge badge-light-danger fs-7 fw-bold" style="background:black; color:white">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Cancelled')
											<span class="badge badge-light-danger fs-7 fw-bold">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Draft Ready')
											<span class="badge badge-light-primary fs-7 fw-bold" style="background:#eaea00; color:black">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Draft Delivered')
											<span class="badge badge-light-primary fs-7 fw-bold" style="background:green; color:white">{{$order->projectstatus}}</span>
                                            @elseif($order->projectstatus == 'Initiated')
											<span class="badge badge-light-primary fs-7 fw-bold" style="background:pink; color:white">{{$order->projectstatus}}</span>
                                            @endif
										</td>
										<td style="width:50px">
										@if($order->pages != '')
										{{$order->pages }} 
										@else
											N/A
										@endif
                                        </td>
                                        <td style="width:50px">
                                           {{$order->amount }} £
                                        </td>
                                        <td style="width:50px">
                                           {{$order->received_amount }} £
                                        </td>
										<td style="width:50px">
											@if(is_numeric($order->amount) && is_numeric($order->received_amount))
												{{ $order->amount - $order->received_amount }} £
											@else
												<!-- Handle the case where one or both values are non-numeric -->
												N/A
											@endif
										</td>

										


                                      
										<td class="text-end">
											<a href="#"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_appaa{{$order->id}}" id="kt_toolbar_primary_button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
												<span class="svg-icon svg-icon-3">
													<li class="fa fa-eye "></li>
												</span>
											</a>
										

											<a href="#"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_money{{$order->id}}" id="kt_toolbar_primary_button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
												<span class="svg-icon svg-icon-3">
													<li class="fa fa-money"></li>
												</span>
											</a>
											@include('order.section.payment-edit')

											<a href="#" onclick="showConfirmation({{ $order->id }})"class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<span class="svg-icon svg-icon-3">
														<li class="fa fa-close"></li>
													</span>
											</a>
											@include('order.section.fail-order')

											
											<a href="#" data-kt-drawer-toggle="#kt_drawer_chat" id="kt_drawer_chat_toggle{{ $order->order_id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
												<span class="svg-icon svg-icon-3">
													<i class="fa fa-comment"></i>
												</span>
											</a>
											@include('order.section.comment-order')
												<a   target="_blank" href="/call.{{$order->id}}" class="btn btn-icon btn-bg-warning btn-active-color-light btn-sm me-1">Call</a>

											<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_create_appaa" id="kt_toolbar_primary_button" class="btn btn-icon btn-bg-success btn-active-color-light btn-sm me-1">
												<span class="svg-icon svg-icon-3">
													<li style="color:white" class="fa fa-phone fa-lg"></li>
												</span>
											</a>

										</td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
                            
						</div>
					</div>

				</div>
			</div>

        </div>
    </div>
	
</div>

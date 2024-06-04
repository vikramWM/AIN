@extends('layouts.app')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div id="kt_content_container" class="">
            <div class="toolbar" id="kt_toolbar">
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">FeedBackSheet
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <small class="text-muted fs-7 fw-bold my-1 ms-1">Assignement In Need</small>
                    </div>
                    <div class="d-flex align-items-center py-1">
                    </div>
                </div>
	        </div>

			<div class="col-xl-12">
			@include('order.section.feedbackfilter')
			</div>
            
			<div class="card card-xl-stretch  mb-xl-">
				<div class="card-header border-0 pt-5">
					<h3 class="card-title align-items-start flex-column">
						<span class="card-label fw-bolder fs-3 mb-1">All FeedBack Comment</span>
						<span class="text-muted mt-1 fw-bold fs-7"></span>
					</h3>
				</div>
				<div class="card-body py-3">
					
					<div class="card-body py-3">
						<div class="table-responsive">
							<table  class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
								<thead class="p-2">
									<tr class="fw-bolder text-muted bg-light">
										<th class="min-w-15px">SR</th>
										<th class="min-w-50px">Order Code</th>
										<th class="min-w-30px">WriterTeam</th>
										<th class="min-w-30px">Feddback Date</th>
										<th class="min-w-30px">Status</th>
										<th class="min-w-100px">Comments</th>
										<th class="min-w-40px">Action</th>
									
									</tr>
								</thead>
                                @foreach($orders as $order)
								<tbody>
                                  
                                    <td>{{ $loop->index +1}}</td>
                                    <td>
    									{{ $order->order_id}}
    									<span class="badge badge-light-danger fs-7 fw-bold ">{{$order->feedback_ticket}}</span>
									</td>
									<td>{{  $order->writer_name}}</td>
                                    <td>{{ \Carbon\Carbon::parse($order->feedback_date)->format('d M Y h:i a') }}</td>
                                    <td>
										@if($order->status_issue == 'Issue Raised')
											<span class="badge badge-light-danger fs-7 fw-bold ">{{$order->status_issue}}</span>
											@elseif($order->status_issue == 'Client Discussion Done')
											<span class="badge badge-light-info fs-7 fw-bold" >{{$order->status_issue}}</span>
											@elseif($order->status_issue == "Writer discussion Done")
											<span class="badge badge-light-success fs-7 fw-bold" >{{$order->status_issue}}</span>
											@elseif($order->status_issue == 'Work in progress')
											<span class="badge badge-light-warning fs-7 fw-bold" >{{$order->status_issue}}</span>
											@elseif($order->status_issue == 'Case Resolved')
											<span class="badge badge-light-success fs-7 fw-bold" >{{$order->status_issue}}</span>
											@elseif($order->status_issue == 'Issues Raised Again')
											<span class="badge badge-light-danger fs-7 fw-bold" style="background:red; color:white">{{$order->status_issue}}</span>
											@else
											<span class="badge badge-light-success fs-7 fw-bold" >{{$order->status_issue}}</span>
											
										@endif
									</td>
									<td>
										{{ $order->comment }}
										<a href="#" id="{{ $order->order_id }}" data-bs-toggle="modal" data-bs-target="#confirmationModal{{ $order->order_id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
											More...
										</a>
									</td>

									<div class="modal fade" id="confirmationModal{{ $order->order_id }}" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="confirmationModalLabel">Feedback</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="col-xl-12">
												<div class="card-body" id="kt_drawer_chat_messenger_body">
													<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
														@foreach($order->feedback as $feedback)
														@if( $feedback->comment != '')
														@if($feedback->created_by != Auth::user()->id)
														<div class="d-flex justify-content-start mb-10">
															<div class="d-flex flex-column align-items-start">
																<div class="d-flex align-items-center mb-2">
																
																	<div class="symbol symbol-35px symbol-circle">
                                                                        @if($feedback->user && $feedback->user->photo)																		
                                                                        <img alt="Pic" src="{{ asset($feedback->user->photo) }}" />
																		@else
																		<img alt="Pic" src="assets/media/avatars/blank.png" />
																		@endif
																	</div>
																	<div class="ms-3">
																	       @if($feedback->user && $feedback->user->name)			
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">{{$feedback->user->name}}</a>
																		@endif
																		
																	</div>
																	<div class="me-3">
																		<span class="text-muted fs-7 mb-1">{{$feedback->created_at}}</span>
																		
																	</div>
																</div>
																<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">{{ $feedback->comment}}</div>
																
															</div>
														</div>
														@else
														<div class="d-flex justify-content-end mb-10">
															<div class="d-flex flex-column align-items-end">
																<div class="d-flex align-items-center mb-2">
																	<div class="me-3">
																		<span class="text-muted fs-7 mb-1">{{$feedback->created_at}}</span>
																		
																	</div>
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="{{ asset($feedback->user->photo) }}" />
																	</div>
																	<div class="ms-3">
																		<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">You</a>
																		
																	</div>
																</div>
																<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">{{ $feedback->comment}}</div>
															</div>
														</div>
														@endif
														@endif
														@endforeach
													</div>
												</div>
												</div>
											</div>
										</div>
									</div>

                                    <td class="icon-container my-auto d-flex">
                                        <a href="#"  style="background-color:black" data-kt-drawer-toggle="#kt_drawer_chat{{ $order->order_id }}" id="kt_drawer_chat_toggle{{ $order->order_id }}" class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm me-1">
                                            <span class="svg-icon svg-icon-3">
                                            <li style="color:white" class="fa fa-edit"></li>
                                            </span>
                                        </a>

										
										@include('order.section.order-action-edit')
										       

										<a href="#" data-bs-toggle="modal" data-bs-target="#statusModal{{$order->id}}" id="{{ $order->order_id }}" class="btn btn-icon btn-bg-success btn-active-color-light btn-sm me-1">
                                            <span class="svg-icon svg-icon-3" style="color:white">
                                              S
                                            </span>
                                        </a>
										
										@include('order.section.feedback-status')

                                        <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_create_appaa" id="kt_toolbar_primary_button" class="btn btn-icon btn-bg-success btn-active-color-light btn-sm me-1">
                                            <span class="svg-icon svg-icon-3">
                                                <li style="color:white" class="fa fa-phone fa-lg"></li>
                                            </span>
                                        </a>
                                        </div>
                                    </td>
                                 
								</tbody>
                                @endforeach
							
							</table>
					
								@if ($orders instanceof \Illuminate\Pagination\AbstractPaginator)
									{{ $orders->links() }}
								@else
								
									{{ $orders->onEachSide(1)->links() }}
								@endif					
						</div>
					</div>

				</div>
			</div>
				</div>

        </div>
    </div>
@endsection
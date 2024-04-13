@extends('layouts.app')
@section('content')
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Payments
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Assignment In Need</small>
                </div>
                
            </div>
        </div>
        <!-- Add Filter -->
        <div class="col-xl-12">
                @include('master.section.filter')
        </div>

        <div class="card card-xl-stretch  mb-xl-">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Payments List</span>
                    <span class="text-muted mt-1 fw-bold fs-7"></span>
                </h3>
            </div>
            <div class="card-body py-3">
              
                    <div class="table-responsive">
                        <table  class="table table-hover table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <thead class="p-2">
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class='px-2'>Sr.No.</th>
                                        <th>Date</th>
                                        <th>Order Code</th>
                                        <th>Client</th>
                                        <th>Amount</th>
                                        <th class='text-center'>Action</th>
                                    </tr>
                                </thead>
                                <tbody style="display:none" id="content" class="searchData">
                                
                                <tbody style="display:none" id="content" class="searchData">
                                    <!-- ... (your existing code) ... -->
                                </tbody >
                            
                                @foreach($data['payments'] as $payment)
                                    <tr>
                                    <td class='text-center'>{{$loop->index + 1 + ($data['payments']->perPage() * ($data['payments']->currentPage() - 1))}}</td>
                                        <td>{{$payment->payment_date  }}</td>
                                        <td> {{$payment->order->order_id  }}</td>
                                        <td>{{$payment->order->user->name  }} <br>
                                            <span>{{$payment->order->user->mobile_no  }} <br> ({{$payment->order->user->email  }})</span>
                                        </td>
                                        <td>
                                        {{$payment->paid_amount  }}
                                        </td>
                                        <td  style="justify-content:center" class=" text-center icon-container my-auto d-flex">
                                            
                                            <a href="#" id="" style="color:white" class="btn btn-icon btn-bg-danger btn-active-color-light btn-sm me-1 delete-link">
                                                <span class="svg-icon svg-icon-3">
                                                    <li class="fa fa-trash fa-lg"></li>
                                                </span>
                                            </a>
                                            @include('master.section.edit-payment')
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_appaa{{$payment->id}}" id="kt_toolbar_primary_button" class="btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm me-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <!-- Add checkbox input -->
                                            
                                            <a href="#" id="" style="color:white" class="btn btn-icon btn-bg-primary btn-active-color-light btn-sm me-1">
                                                <span class="svg-icon svg-icon-3">
                                                    <input class="form-check-input payment-checkbox" type="checkbox" id="checkbox{{$payment->id}}" data-payment-id="{{$payment->id}}">
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        {{ $data['payments']->links() }}
                    </div>
                </div>

            </div>
        </div>
            

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.payment-checkbox').forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    var paymentId = this.dataset.paymentId;
                    var isChecked = this.checked ? 1 : 0;

                    $.ajax({
                        type: 'POST',
                        url: '/update-payment-status/' + paymentId + '/' + isChecked,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function (data) {
                            handleResponse(data, paymentId);
                        },
                        error: function (error) {
                            console.error('Error:', error);
                        }
                    });
                });
            });
            function handleResponse(data, paymentId) {
            console.log(data.message);

            // Redirect to /Payments if the update was successful
            if (data.message === 'Payment status updated successfully') {
                window.location.reload(); // This will reload the current page
            }

        }
            
            
        });
    </script>


@endsection
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
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Writer
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <small class="text-muted fs-7 fw-bold my-1 ms-1">Assignement In Need</small>
                    </div>
                    
                </div>
	        </div>

			<div class="col-xl-12">
				<!-- include('order.section.fileter') -->
			</div>
            
			<div class="card card-xl-stretch  mb-xl-">
				
				<div class="card-body py-3">
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Orders</span>
						</h3>
						<div class="col-md-3 fv-row">
                            <select name="writerTL" id="writerTL" class="form-select form-select-solid" placeholder="">
                                <option value="">Select Writer</option>
                                <option  value="Not Assigned">Not Assigned</option>
                                
                                @foreach($data['writerTL'] as $tl)
                                    <option  value="{{ $tl->id }}">{{ $tl->name }}</option>
                                @endforeach
                            </select>
                        </div>
					</div>
					<div class="card-body py-3">
                        <div class="table-responsive">
                            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <thead class="p-2">
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="min-w-15px">SR</th>
                                        <th class="min-w-50px">Order Code</th>
                                        <th class="min-w-50px">Date</th>
                                        <!-- <th class="min-w-50px">DateU</th> -->
                                        <!-- <th class="min-w-30px">Writer</th>
                                        <th class="min-w-30px">SubWriter</th> -->
                                    </tr>
                                </thead>
                                <tbody id="ordersTableBody"> <!-- Add id to tbody -->
                                </tbody>
                            </table>
                        </div>

					</div>

				</div>
			</div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#writerTL').change(function() {
                var tlId = $(this).val();
                console.log('Selected TL ID:', tlId); // Log the selected TL ID

                // Make AJAX request to get orders for the selected TL
                $.ajax({
                    url: '{{ route('order.writer2') }}',
                    type: 'POST',
                    data: {
                        tlId: tlId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var orders = response.orders;
                        var tbody = $('#ordersTableBody'); // Select tbody by its id
                        tbody.empty();

                        // Populate table with orders
                        $.each(orders, function(index, order) {
                            var row = '<tr>' +
                                '<td>' + (index + 1) + '</td>' +
                                '<td>' + order.order_id + '</td>' +
                                '<td>' + order.date + '</td>' +
                                // '<td>' + order.writer_ud + '</td>' +
                                // '<td>' + order.wid + '</td>' +
                                // '<td>' + order.swid + '</td>' +
                                '</tr>';
                            tbody.append(row);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error); // Log AJAX error
                    }
                });
            });
        });
    </script>

  @endsection
  
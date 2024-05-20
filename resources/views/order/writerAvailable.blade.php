@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div id="kt_content_container" class="">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Writer-Availability
                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                        <small class="text-muted fs-7 fw-bold my-1 ms-1">Assignment In Need</small>
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Filter</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <form id="filterForm">
                        <div class="row mb-3">
                            <div class="col-md-3 fv-row">
                                <input type="date" name="from_date" id="from_date"
                                    class="form-control form-control-solid" placeholder="From">
                            </div>
                            <div class="col-md-3 fv-row">
                                <input type="date" name="to_date" id="to_date"
                                    class="form-control form-control-solid" placeholder="To">
                            </div>
                            <div class="col-lg-3 fv-row">
                                <select name="writerTL" id="writerTL" aria-label="Select a Timezone"
                                    data-control="select2" data-placeholder="Search By writer Name"
                                    class="form-select form-select-solid form-select-lg">
                                    <option value="">Select Writer</option>
                                    @foreach($data['writerTL'] as $tl)
                                    <option value="{{ $tl->id }}">{{ $tl->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="col-lg-3 fv-row">
                                <select name="SubWriter" id="SubWriter" aria-label="Select a Timezone"
                                    data-control="select2" data-placeholder="Search By Sub Writer"
                                    class="form-select form-select-solid form-select-lg">
                                    <option value="">Select SubWriter</option>
                                    @foreach($data['SubWriter'] as $Sub)
                                    <option value="{{ $Sub->id }}">{{ $Sub->name }}</option>
                                    @endforeach
                                </select>
                            </div> -->
                            <div class="col-lg-12 fv-row fv-plugins-icon-container mt-2">
                                <a id="resetFiltersBtn" class="btn btn-sm btn-danger">Reset</a>
                                <a id="applySearch" class="btn btn-sm btn-primary">Search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card card-xl-stretch mb-xl-">
            <div class="card-body py-3">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Available Writers</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                            <thead class="p-2">
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="min-w-55px text-center">SR</th>
                                    
                                    <th class="min-w-150px">Date</th>
                                    <th class="min-w-150px">Available</th>
                                    
                                    <!-- <th class="min-w-150px text-start">Writer Name</th>
                                    <th class="min-w-150px text-start">Subwriter Name</th> -->
                                </tr>
                            </thead>
                            <tbody id="ordersTableBody"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        function fetchOrders() {
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            var tlId = $('#writerTL').val();
            var swId = $('#SubWriter').val();

            $.ajax({
                url: '{{ route('writer.available2') }}', // Use the fetchWriterAvailable route
                type: 'POST',
                data: {
                    from_date: from_date,
                    to_date: to_date,
                    tlId: tlId,
                    _token: '{{ csrf_token() }}' // Remove swId if it's not necessary
                },
                success: function (response) {
                    var availableDates = response.data.availableDates;
                    var tbody = $('#ordersTableBody');
                    tbody.empty();

                    // Iterate over the available dates and populate the table
                    $.each(availableDates, function (index, date) {
                        // Convert date to a format suitable for display
                        var formattedDate = moment(date).format('DD-MM-YYYY (dddd)');
                        var color = moment(date).day() === 0 ? 'red' : 'black';

                        // Create a new row with data from the availableDates array
                        var row = '<tr>' +
                            '<td class="min-w-55px text-center">' + (index + 1) + '</td>' +
                            '<td style="color: ' + color + '">' + formattedDate + '</td>' +
                            '<td style="color: ' + color + '">Available</td>' + // Assuming all dates are available by default
                            // '<td></td>' + // Leave writer name column empty
                            // '<td></td>' + // Leave subwriter name column empty
                            '</tr>';
                        tbody.append(row);
                    });
                },
                error: function (xhr, status, error) {
                    // Handle error if needed
                }
            });
        }

        $('#applySearch').on('click', function () {
            fetchOrders();
        });

        $('#resetFiltersBtn').on('click', function () {
            $('#filterForm')[0].reset();
            // Clear the table when resetting filters
            $('#ordersTableBody').empty();
        });
    });
</script>



@endsection

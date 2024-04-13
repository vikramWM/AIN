<div class="card card-xxl-stretch mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
    	<h3 class="card-title align-items-start flex-column">
    		<span class="card-label fw-bolder fs-3 mb-1">Filter</span>
    	</h3>
    </div>
    <div class="card-body py-3">
    <form action="#" id="searchForm">
        <div class="row mb-3">
            <div class="col-md-3 fv-row">
                <input type="search" name="search" id="search" class="form-control form-control-solid" placeholder="Search By OrderCode">
            </div>

            <div class="col-lg-3 fv-row fv-plugins-icon-container">
                <select name="status" id="status" aria-label="Select a Language" data-control="select2" data-placeholder="Status" class="form-select form-select-solid form-select-lg">
                    <option value=""></option>
                    <option  value="Issue Raised">Issue Raised</option>
                    <option value="Client Discussion Done">Client Discussion Done</option>
                    <option  value="Writer discussion Done">Writer discussion Done</option>
                    <option value="Work in progress">Work in progress</option>
                    <option  value="Case Resolved">Case Resolved</option>
                    <option  value="Issue Raised Again">Issue Raised Again</option>
                </select>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            
            
             <div class="col-lg-3 fv-row fv-plugins-icon-container">
                <select name="writer" id="status" aria-label="Select a Language" data-control="select2" data-placeholder="Status" class="form-select form-select-solid form-select-lg">
                    <option value=""></option>
                    @foreach($data['writer'] as $writer)
                    <option value="{{$writer->writer_name}}">{{$writer->writer_name}}</option>
                    @endforeach
                </select>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            
            <div class="col-md-3 fv-row">
                <input type="search" name="ticket_no" id="search" class="form-control form-control-solid" placeholder="Search By Tikcket Number">
            </div>

            <!-- <div class="col-md-3 fv-row">
                <input type="date" name="from_date" id="from_date" class="form-control form-control-solid" placeholder="From Date">
            </div>

            <div class="col-md-3 fv-row">
                <input type="date" name="to_date" id="to_date" class="form-control form-control-solid" placeholder="To Date">
            </div> -->
        </div>

        <div class="col-lg-12 fv-row fv-plugins-icon-container">
            <button type="submit" id="searchButton" class="btn btn-sm btn-primary">Search</button>
            <a href="/feedback" class="btn btn-sm btn-danger">Reset</a>
        </div>
    </form>
</div>






	
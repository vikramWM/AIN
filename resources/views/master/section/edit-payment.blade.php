<div class="modal fade" id="kt_modal_create_appaa{{$payment->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-950px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_target_form" class="form" method="POST" action="#">
                @csrf
                @method('PUT')
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit-Payment</h1>
                        <div class="text-muted fw-bold fs-5">{{ $payment->order->order_id }}</div>
                    </div>
                   
                    <div class="row g-9 mb-8 text-start">
                        <div class="col-md-6 fv-row">
                            <label class=" fs-6 fw-bold mb-2">User Name</label>
                        <input type="text" readonly  class="form-control form-control-solid" placeholder="" value="{{ $payment->order->user->name }}" name="user_name">
                           
                        </div>
                        <div class="col-md-6 fv-row text-start">
                            <label class=" fs-6 fw-bold mb-2">mobile_no</label>
                            <input type="text" readonly  class="form-control form-control-solid" placeholder="" value="" name="{{ $payment->order->user->mobile_no }}">
                        </div>
                    </div>
                    <div class="row g-9 mb-8 text-start">
                        
                        <div class="col-md-12 fv-row text-start">
                            <label class=" fs-6 fw-bold mb-2">email</label>
                            <input type="text" readonly  class=" text-center form-control form-control-solid" placeholder="" value="{{ $payment->order->user->email }}" name="mobile">
                       
                        </div>
                    </div>
                      
                    
                    <div class="row g-9 mb-8 text-start">
                        <div class="col-md-6 fv-row text-start">
                            <label class="fs-6 fw-bold mb-2">Payment Date</label>
                            <input type="date" class="form-control form-control-solid" placeholder="" value="{{$payment->payment_date  }}" name="date" onchange="showSelectedDate(this)">
                        </div>
                        <div class="col-md-6 fv-row">
                            <label class=" fs-6 fw-bold mb-2">Amount</label>
                            <input type="text"  class="form-control form-control-solid" placeholder="" value=" {{$payment->paid_amount  }}" name="price">
                        </div>
                    </div>

                    

                    <div class="row g-9 mb-8 text-center">
                        <div class="col-md-12 fv-row">
                            <label class=" fs-6 fw-bold mb-2">Messages</label>
                            <textarea name="message"  class="form-control form-control-solid" id="" cols="30" rows="3" required>{{$payment->reference  }}"</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Add the following script at the end of the file -->

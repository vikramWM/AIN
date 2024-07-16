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
                @method('POST')
                    <input type="hidden" name="order_id" value="{{ $payment->order_id }}">
                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">

                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit-Payment</h1>
                        <div class="text-muted fw-bold fs-5">{{ $payment->order->order_id }}</div>
                    </div>
                   
                    
                      
                    
                    <div class="row g-9 mb-8 text-start">
                        
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
                        <button type="submit" onclick="submitForm()" class="btn btn-primary">Submit</button>
                        
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Add the following script at the end of the file -->
<script>
    // Function to handle form submission via AJAX
    function submitForm() {
        // Get the form data
        var formData = new FormData(document.getElementById('kt_modal_new_target_form'));

        // Send AJAX request
        $.ajax({
            url: "{{ route('update_payments') }}", // URL for the AJAX request
            type: "POST", // HTTP method
            data: formData, // Form data
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle success response
                console.log(response);
                // You can perform actions based on the response, such as showing a success message or redirecting the user
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
                // You can display an error message or perform other actions based on the error
            }
        });
    }
</script>
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle{{ $order->order_id }}" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">{{$order->order_id}}</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-bold text-muted">Action Activity</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
            @foreach($order->feedback->sortByDesc('created_at') as $feedback)
                @if($feedback->action_comment != '')
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
                                @else
                                    <!-- Handle the case when $feedback->user or $feedback->user->name is null -->
                                @endif                                <span class="text-muted fs-7 mb-1">{{$feedback->created_at->diffForHumans()}}</span> <br>
                                @if($feedback->status == 'Issue Raised')
										<span class="badge badge-light-danger fs-7 fw-bold ">{{$feedback->status}}</span>
										@elseif($feedback->status == 'Investigation Inprogress')
										<span class="badge badge-light-info fs-7 fw-bold" >{{$feedback->status}}</span>
										@elseif($feedback->status == "Client's Discussion")
										<span class="badge badge-light-success fs-7 fw-bold" >{{$feedback->status}}</span>
										@elseif($feedback->status == 'Writer Discussion')
										<span class="badge badge-light-warning fs-7 fw-bold" >{{$feedback->status}}</span>
										@elseif($feedback->status == 'Case Resolved')
										<span class="badge badge-light-success fs-7 fw-bold" >{{$feedback->status}}</span>
										@elseif($feedback->status == 'Issue Raised Again')
										<span class="badge badge-light-danger fs-7 fw-bold" style="background:red; color:white">{{$feedback->status}}</span>
										
									@endif
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">{{ $feedback->action_comment}}</div>
                        
                    </div>
                </div>
                @else
                <div class="d-flex justify-content-end mb-10">
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">{{$feedback->created_at->diffForHumans()}}</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                    @if($feedback->status == 'Issue Raised')
										<span class="badge badge-light-danger fs-7 fw-bold ">{{$feedback->status}}</span>
										@elseif($feedback->status == 'Investigation Inprogress')
										<span class="badge badge-light-info fs-7 fw-bold" >{{$feedback->status}}</span>
										@elseif($feedback->status == "Client's Discussion")
										<span class="badge badge-light-success fs-7 fw-bold" >{{$feedback->status}}</span>
										@elseif($feedback->status == 'Writer Discussion')
										<span class="badge badge-light-warning fs-7 fw-bold" >{{$feedback->status}}</span>
										@elseif($feedback->status == 'Case Resolved')
										<span class="badge badge-light-success fs-7 fw-bold" >{{$feedback->status}}</span>
										@elseif($feedback->status == 'Issue Raised Again')
										<span class="badge badge-light-danger fs-7 fw-bold" style="background:red; color:white">{{$feedback->status}}</span>
										
									@endif
                            </div>
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{ asset($feedback->user->photo) }}" />
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">{{ $feedback->action_comment}}</div>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
            </div>
        </div>
        @if(Auth::user()->role_id != 4)        
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <textarea class="form-control form-control-flush mb-3" rows="1" id="message{{$order->id}}"  placeholder="Type a message"></textarea>
            <input type="hidden" name="order_id" value="{{$order->id}}" id='order_id{{$order->id}}'>
            <div class="d-flex flex-stack text-end">
               
                <button class="btn btn-primary" id="sendButton{{$order->id}}" type="button" data-kt-element="send">Send</button>
            </div>
        </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
    $(document).ready(function() {
        // Assuming your send button has the ID 'sendButton'
        $('#sendButton{{$order->id}}').click(function() {
            var message = $('#message{{$order->id}}').val();
            var order_id = $('#order_id{{$order->id}}').val();

            // alert(message)

            $.ajax({
                type: 'POST',
                url: '{{ route("send.feedback") }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'message': message,
                    'order_id': order_id,
                },
                success: function(response) {
                    var messageContainer = $('[data-kt-element="messages"]');
                    var statusBadge = getStatusBadge(response);

                    var newMessage = `
                        <div class="d-flex justify-content-end mb-10">
                            <div class="d-flex flex-column align-items-end">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="me-3">
                                        <span class="text-muted fs-7 mb-1">${response.created_at}</span>
                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                        ${statusBadge}
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="${response.avatar ? response.avatar : 'assets/media/avatars/blank.png'}" />
                                    </div>
                                </div>
                                <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">${response.message}</div>
                            </div>
                        </div>
                    `;

                    // Use prepend to add the new message at the beginning
                    messageContainer.prepend(newMessage);

                    // Clear the input field
                    $('#message{{$order->id}}').val('');
                },
            });
        });

        // Function to get status badge based on response status
        function getStatusBadge(response) {
            var status = response.f_status;
            var badgeClass = '';
            var badgeStyle = '';

            switch (status) {
                case 'Issue Raised':
                    badgeClass = 'badge-light-danger';
                    break;
                case 'Investigation Inprogress':
                    badgeClass = 'badge-light-info';
                    break;
                case "Client's Discussion":
                    badgeClass = 'badge-light-success';
                    break;
                case 'Writer Discussion':
                    badgeClass = 'badge-light-warning';
                    break;
                case 'Case Resolved':
                    badgeClass = 'badge-light-success';
                    break;
                case 'Issue Raised Again':
                    badgeClass = 'badge-light-danger';
                    badgeStyle = 'style="background:red; color:white"';
                    break;
                default:
                    badgeClass = 'badge-light-primary';
            }

            return `<span class="badge fs-7 fw-bold ${badgeClass}" ${badgeStyle}>${status}</span>`;
        }
    });
</script>


</div>
<!-- Your existing HTML code -->





<style>
    /* Fix first div */
    #kt_drawer_chat_messenger_header {
        position: sticky;
        top: 0;
        z-index: 1;
        background-color: #fff; /* Set background color as needed */
    }

    /* Fix last div */
    #kt_drawer_chat_messenger_footer {
        position: sticky;
        bottom: 0;
        z-index: 1;
        background-color: #fff; /* Set background color as needed */
    }
</style>

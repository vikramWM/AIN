<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Leads;
use App\Models\Calls;
use App\Models\User;
use App\Models\Order;
use App\Models\Services;
use Illuminate\Support\Facades\Hash;
use App\Mail\LeadsConvertMail;
use Mail;
use App\Models\Files;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;


class LeadsController extends Controller
{
    public function index()
    {
        // Retrieve all services
        $service   = Services::all();

        // Retrieve leads with status 0, eager loading user and related calls
        $status0Leads = Leads::with('user', 'call.user')
            ->where('status', 0)
            ->orderByDesc('id')
            ->paginate(20);

        // Uncomment the line below for debugging purposes
        // echo '<pre>'; print_r($status0Leads); exit;

        return view('leads.leads', ['status0Leads' => $status0Leads, 'service' => $service]);
    }






    public function cancelleads(Request $request)
    {
        $query = Leads::with(['user', 'call.user'])->where('status', 1)->orderByDesc('id');
        if ($request->filled('search')) {
            $query->where('order_id', 'like', '%' . $request->input('search') . '%');
        }
        if ($request->filled('uid')) {
            $user = User::where('email', $request->input('uid'))
                ->orWhere('mobile_no', 'like', '%' . $request->input('uid') . '%')
                ->first();



            $query->where('emp_id', $user->id);
        }

        if ($request->filled('additional_filter3')) {
            if ($request->filled('additional_filter6')) {
                $query->whereBetween('create_at', [$request->input('additional_filter3'), $request->input('additional_filter6')]);
            } elseif ($request->filled('additional_filter7')) {
                $query->whereBetween('deadline', [$request->input('additional_filter3'), $request->input('additional_filter6')]);
            } else {
                $query->whereDate('create_at', $request->input('additional_filter3'));
            }
        }
        if ($request->filled('search') || $request->filled('uid') || $request->filled('additional_filter3') || $request->input('additional_filter6') || $request->input('additional_filter7')) {
            $status1Leads = $query->paginate(200);
        } else {
            $status1Leads = $query->paginate(20);
        }
        return view('leads.cleads', ['status1Leads' => $status1Leads,]);
    }


    public function leads_update(Request $req, $id)
    {
        $leads = Leads::find($id);
        $id = $leads->emp_id;
        
        $deliveryDate = $req->input('delivery_date');
        $today = \Carbon\Carbon::today()->format('Y-m-d'); // Get today's date
        // Check if the delivery date is before today
        if ($deliveryDate < $today) {
            // Redirect back with an error message if the date is invalid
            return redirect()->back()->with('error', 'Delivery date cannot be before the order date.');
        }
        

        $user = User::find($id);

        $user_name = $req->input('user_name');
        $email = $req->input('email');
        $countrycode = $req->input('country_code');
        $countrycode2 = $req->input('country_code2');
        $mobile_no = $req->input('mobile');
        $mobile2_no2 = $req->input('mobile2');
        // Check if email already exists with another user
        // Check if email already exists with another user
        if (User::where('email', $email)->where('id', '!=', $id)->exists()) {
            $existingUser = User::where('email', $email)->where('id', '!=', $id)->first();
            return back()->with('danger', 'Email already exists with another user')->with('existingUser', $existingUser);
        }

        // Check if mobile number already exists with another user
        if (User::where('mobile_no', $mobile_no)->where('id', '!=', $id)->exists()) {
            $existingUser = User::where('mobile_no', $mobile_no)->where('id', '!=', $id)->first();
            return back()->with('danger', 'Mobile number already exists with another user')->with('existingUser', $existingUser);
        }




        // Update user details
        $user->name = $user_name;
        $user->email = $email;
        $user->countrycode = $countrycode;
        $user->countrycode2 = $countrycode2;
        $user->mobile_no = $mobile_no;
        $user->mobile_no2 = $mobile2_no2;

        $user->save();





        $leads->project_title = $req->input('project_title');
        $leads->pages = $req->input('pages');
        $leads->l_status = $req->input('l_status');
        $leads->created_at = $req->input('order_date'); // Assuming you meant 'created_at' instead of 'create_at'
        $leads->deadline = $req->input('delivery_date');
        $leads->delivery_time = $req->input('delivery_time');
        $leads->price = $req->input('price');
        $leads->message = $req->input('message');
        $leads->service_type = $req->input('service_type');
        $leads->resit = $req->input('resit');
        $leads->tech = $req->input('tech');
        $leads->module_code = $req->input('module_code');

        $leads->draft_required = $req->input('draft_required');
        $leads->draft_date = $req->input('draft_date');
        $leads->draft_time = $req->input('draft_time');


        $leads->save();

        return back()->with('success', 'Lead updated successfully.');
    }

    public function leads_Cancel($id)
    {
        try {
            $lead = Leads::findOrFail($id);

            // Check if the lead is not already canceled
            if ($lead->status !== 1) {
                $lead->status = 1;
                $lead->save();

                return response()->json(['message' => 'Lead canceled successfully']);
            } else {
                return response()->json(['message' => 'Lead is already canceled']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to cancel lead', 'message' => $e->getMessage()], 500);
        }
    }
    public function leads_Active($id)
    {
        try {
            $lead = Leads::findOrFail($id);

            // Check if the lead is not already canceled
            if ($lead->status !== 0) {
                $lead->status = 0;
                $lead->save();

                return response()->json(['message' => 'Lead Activated successfully']);
            } else {
                return response()->json(['message' => 'Lead is already Active']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to Active lead', 'message' => $e->getMessage()], 500);
        }
    }
    public function new_lead(Request $req)
    {
        // $lead = new Leads;
        // $lead->user_name = $req->input('user_name');
        // $lead->email = $req->input('email');
        // $lead->save();

        // return redirect()->back()->with('success', 'writer submitted succesffully');
        dd($req->all());
    }

    public function delete_leads($id)
    {
        Leads::destroy($id);

        return response()->json(['success' => true]);
    }

    public function userData(Request $request)
    {
        $mobile = $request->input('mobile');
        $userData = User::where('mobile_no', $mobile)
            ->orWhere('mobile_no2', $mobile)
            ->first();

        return response()->json(['user' => $userData]);
    }


    public function insert_leads(Request $request)
    {
        $deliveryDate = $request->input('delivery_date');
        $today = Carbon::today();

        // Check if the delivery date is before today
        if (Carbon::parse($deliveryDate)->lt($today)) {
            // Redirect back with an error message if the date is invalid
            return redirect()->back()->with('error', 'Delivery date cannot be before today.');
        }
        // Get the latest order to generate a new order ID
        $latestOrder = Order::orderByDesc('id')->first();
        $newOrderNumber = $latestOrder ? (intval(substr($latestOrder->order_id, 3)) + 1) : 1;
        $newOrderId = 'UKS' . $newOrderNumber;

        $user = User::where('id', $request->input('id'))->first();

        if (!$user) {
            $existingUser = User::where('email', $request->input('email'))->first();

            if ($existingUser) {
                // If email exists with another number, prompt user to update details
                return redirect()->back()->withInput()->with('error', 'Email already exists with another number. Please update your details.');
            }

            $user = new User;
            $user->email = $request->input('email') ?: 'user' . $request->input('mobile') . '@gmail.com';
            $user->mobile_no = $request->input('mobile');
            $user->name = $request->input('user_name') ?: 'user' . $request->input('mobile');
            $user->countrycode = $request->input('countrycode');
            $user->password = Hash::make('user@123');
            $user->role_id = 2;
            $user->save();

            $userId = $user->id;
            $name = $user->name;
            $email = $user->email;
        } else {
            // User exists, update user details
            $user->email = $request->input('email');
            $user->name = $request->input('user_name');
            $user->countrycode = $request->input('countrycode');
            $user->save();

            $userId = $user->id;
        }

        // Create a new Leads instance
        $leads = new Leads;
        $leads->order_id = $newOrderId;
        $leads->emp_id = $userId;
        $leads->project_title = $request->input('project_title');
        $leads->module_code = $request->input('module_code');
        $leads->pages = $request->input('pages');

        $leads->deadline = $request->input('delivery_date');


        $leads->delivery_time = $request->input('delivery_time');
        $leads->price = $request->input('amount');
        $leads->l_status = $request->input('i_status');
        $leads->message = $request->input('message');

        $leads->service_type = $request->input('service_type');
        $leads->resit = $request->input('resit');
        $leads->tech = $request->input('tech');
        $leads->countrycode2 = $request->input('countrycode2');
        $leads->mobile2 = $request->input('mobile_no2');

        $leads->draft_required = $request->input('draft_required');
        $leads->draft_date = $request->input('draft_date');
        $leads->draft_time = $request->input('draft_time');

        $leads->save();
        $leadsId = $leads->id;

        $order = new Order;
        $order->uid = 0;
        $order->order_id = $newOrderId;
        $order->lead_id = $leadsId;
        $order->title = $request->input('project_title');
        $order->pages = $request->input('pages');
        $order->amount = $request->input('amount');
        $order->message = $request->input('message');
        $order->order_date = now();

        $order->delivery_date = $request->input('delivery_date');
        $order->save();

        return redirect()->back()->with('success', 'New Leads Insert Successfully');
    }





    public function convert(Request $request, $id)
    {
        try {
            // Find the lead by ID
            $lead = Leads::findOrFail($id);
            $emp_id = $lead->emp_id;
            $order_code = $lead->order_id;

            // Check if an order already exists for this lead
            $order = Order::where('lead_id', $id)->first();

            // If the order doesn't exist, create a new one
            if (!$order) {
                $order = new Order();
                $order->lead_id = $lead->id;
            }

            // Update order fields with the provided values
            $order->title = $request->input('project_title');
            $order->pages = $request->input('pages');
            $order->services = $request->input('service_type');
            $order->tech = $request->has('tech') ? 1 : 0;
            $order->delivery_date = $request->input('delivery_date');
            $order->amount = $request->input('price');
            $order->message = $request->input('message');
            $order->projectstatus = 'Other';
            $order->uid = $emp_id;
            $order->order_date = now()->format('Y-m-d');
            $order->is_read = '1';
            $order->module_code = $request->input('module_code');
            $order->draftrequired = $request->input('draft_required');
            $order->draft_date = $request->input('draft_date');
            $order->draft_time = $request->input('draft_time');

            // Save the order
            $order->save();

            // Update user information if provided
            if ($request->filled(['email', 'mobile', 'countrycode', 'user_name'])) {
                $user = User::where('id', $emp_id)->first();
                if ($user) {
                    // Check if the provided email is already registered with a different user
                    $existingUserWithEmail = User::where('email', $request->input('email'))->where('id', '!=', $emp_id)->first();
                    if ($existingUserWithEmail) {
                        // Prompt user to change email
                        return response()->json(['error' => 'Email already registered with a different user', 'message' => 'Email is already registered with a different user. Please change your email.'], 400);
                    }

                    $user->email = $request->input('email');
                    $user->mobile_no = $request->input('mobile');
                    $user->mobile_no2 = $request->input('mobile_no2');
                    $user->countrycode = $request->input('countrycode');
                    $user->countrycode2 = $request->input('countrycode2');
                    $user->name = $request->input('user_name');
                    $user->save();
                    // Define data for the email
                    $mailData = [
                        'name' => $request->input('user_name'),
                        'email' => $request->input('email'),
                        'title' => $request->input('project_title'),
                        'order_code' => $order_code,
                        'date'     => $request->input('delivery_date')
                    ];
                    // Mail::to('vikramsuthar.wm@gmail.com')->send(new LeadsConvertMail($mailData));
                    // Define CC recipients
                    $ccRecipients = [
                        'anshjangid02@gmail.com', // Add CC email addresses here
                    ];

                    // Send email with CC
                    Mail::to('vikramsuthar.wm@gmail.com')
                        ->cc($ccRecipients)
                        ->send(new LeadsConvertMail($mailData));
                } else {
                    \Log::error('User not found with ID: ' . $emp_id);
                }
            }

            // Delete the lead
            $lead->delete();

            // Return a response with updated data
            return response()->json(['message' => 'Lead converted successfully', 'order' => $order]);
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            \Log::error($e);

            // Log the error for debugging purposes
            $errorMessage = 'An error occurred. Please try again.';
            if (config('app.debug')) {
                $errorMessage .= ' Error: ' . $e->getMessage();
            }

            return response()->json(['error' => 'Error converting lead', 'message' => $errorMessage], 500);
        }
    }






    public function insert_call(Request $request)
    {
        $id = $request->input('id');
        $description   = $request->input('description');


        $Calls = new Calls;
        $Calls->created_by = auth()->user()->id;
        $Calls->lead_id = $id;
        $Calls->description = $description;
        $Calls->save();
        $message = 'Record created successfully.';
        $user = auth()->user();

        // Return the response
        return response()->json([
            'status' => 'success',
            'message' => $Calls->description,
            'created_at' => $Calls->created_at->diffForHumans(),
            'user' => [
                'name' => $user->name,
                'avatar' => asset($user->photo),
            ],
        ]);
    }

    public function fetchData($lead_id)
    {
        // Fetch data based on the provided lead ID
        $data = Calls::where('lead_id', $lead_id)->get();

        return response()->json(['data' => $data]);
    }


    public function search(Request $request)
    {
        $searchTerm = $request->input('additionalFilter1');
        $userdtail = $request->input('additionalFilter2');
        $Status = $request->input('additionalFilter4');
        $techn = $request->input('additionalFilter5');
        $fromDate = $request->input('additionalFilter3');
        $UptoDate = $request->input('additionalFilter6');
        $datetatus = $request->input('additionalFilter7');

        $leads = Leads::query();

        if ($searchTerm != '') {
            $leads->where(function ($query) use ($searchTerm) {
                $query->where('order_id', 'like', '%' . $searchTerm . '%')
                    ->orWhere('project_title', 'like', '%' . $searchTerm . '%');
            });
        }

        if ($Status != '') {
            $leads->where('l_status',  $Status);
        }

        if ($techn != '') {

            if ($techn == 'Technical') {
                $leads->where('tech',  'on');
            } elseif ($techn == 'Resit') {
                $leads->where('resit',  'on');
            } elseif ($techn == 'First') {
                $leads->where('service_type',  'First Class Work');
            }
        }

        if ($userdtail != '') {
            // Assuming $leads is an instance of a database query builder

            $leads->where(function ($query) use ($userdtail) {
                $query->where('emp_id', $userdtail);
            });
        }

        if ($fromDate != '') {
            if ($UptoDate != '') {
                $leads->whereBetween('create_at', [$fromDate, $UptoDate]);
            } else {
                $leads->whereDate('create_at', $fromDate);
            }
        } elseif ($datetatus != '') {
            if ($fromDate != '' && $UptoDate != '') {
                $leads->whereBetween('deadline', [$fromDate, $UptoDate]);
            } elseif ($fromDate != '') {
                $leads->where('deadline', $fromDate);
            } else {
                // Assuming $datetatus is a date string in a valid format, such as 'Y-m-d'
                $leads->whereDate('deadline', $datetatus);
            }
        }






        $leads->orderBy('id', 'desc')->where('status', 0);

        $output = '';
        $index = 1;

        foreach ($leads->get() as $lead) {
            $output .= "
            <tr>
                <td>{$index}</td>
                
                <td class='icon-container my-auto d-flex '>
               
                " . ($lead->flag == '1' ? "
                
                    <div class='form-check form-check-sm form-check-custom form-check-solid m-5'>
                        <input class='form-check-input widget-13-check' type='checkbox' id='{$lead->id}'  checked onchange='checkedLead(this, {$lead->id})'>
                    </div>
               
                " : '') . "
                
                  " . ($lead->flag == '0' ? "
                
                    <div class='form-check form-check-sm form-check-custom form-check-solid m-5'>
                        <input class='form-check-input widget-13-check' type='checkbox' id='{$lead->id}'   onchange='checkedLead(this, {$lead->id})'>
                    </div>
               
                " : '') . "
                    <div class='form-check form-switch my-auto'>
                        <input class='form-check-input' type='checkbox' id='{$lead->id}' role='switch' checked onchange='handleChange(this, {$lead->id})'>
                    </div>
                   
                    <button type='button' class='btn btn-icon btn-bg-warning btn-active-color-light btn-sm me-1' data-bs-toggle='modal' data-bs-target='#leadCallModal{$lead->id}'>Call</button>";

            // Add modal HTML here for each lead
            $output .= "
                        <style>
                            /* Style for modal dialog */
                            .modal-content {
                                height: 100%;
                            }
                            .modal-dialog.modal-dialog-end {
                                margin: 0;
                                position: fixed;
                                right: 0;
                                top: 0;
                                height: 100%;
                                width: 40%; /* Set your desired width */
                                max-width: 100%;
                                z-index: 1050;
                                transform: translateX(100%);
                                transition: transform 0.3s ease;
                            }
                    
                            /* Style for modal dialog when it's shown */
                            .modal.show .modal-dialog.modal-dialog-end {
                                transform: translateX(0);
                            }
                            /* Style for modal body */
                            .modal-body {
                                overflow-y: auto; /* Make the modal body vertically scrollable */
                                max-height: calc(100vh - 200px); /* Set max height to avoid modal extending beyond viewport */
                            }
                        </style>
    


                        <div class='modal fade' id='leadCallModal{$lead->id}' tabindex='-1' aria-labelledby='leadCallModalLabel' aria-hidden='true'>
                            <div class='modal-dialog  modal-dialog-end'>
                                <div class='modal-content'>
                                    <div class='modal-header' >
                                        <div class='card-title' >
                                            <!--begin::User-->
                                            <div class='d-flex justify-content-center flex-column me-3'>
                                                <a href='#' class='fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1'>$lead->order_id</a>
                                                <!--begin::Info-->
                                                <div class='mb-0 lh-1'>
                                                    <span class='badge badge-success badge-circle w-10px h-10px me-1'></span>
                                                    <span class='fs-7 fw-bold text-muted'>Active</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body' data-kt-element='messages{$lead->id}'>";

            // Loop through calls
            foreach ($lead->call->sortByDesc('created_at') as $call) {
                if ($call->created_by != Auth::user()->id) {
                    $output .= "<div class='d-flex justify-content-start mb-10'>
                                                            <div class='d-flex flex-column align-items-start'>
                                                                <div class='d-flex align-items-center mb-2'>
                                                                    <div class='symbol symbol-35px symbol-circle'>";

                    // Check if user photo exists
                    if ($call->user && $call->user->photo) {
                        $output .= "<img alt='Pic' src='" . asset($call->user->photo) . "' />";
                    } else {
                        $output .= "<img alt='Pic' src='assets/media/avatars/blank.png' />";
                    }

                    $output .= "</div>
                                                                    <div class='ms-3'>
                                                                        <a href='#' class='fs-5 fw-bolder text-gray-900 text-hover-primary me-1'>";
                    if ($call->user) {
                        $output .= $call->user->name;
                    }
                    $output .= "</a>
                                                                        <span class='text-muted fs-7 mb-1'>{$call->created_at->diffForHumans()}</span>
                                                                    </div>
                                                                </div>
                                                                <div class='p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start' data-kt-element='message-text'>{$call->description}</div>
                                                            </div>
                                                        </div>";
                } else {
                    $output .= "<div class='d-flex justify-content-end mb-10'>
                                                            <div class='d-flex flex-column align-items-end'>
                                                                <div class='d-flex align-items-center mb-2'>
                                                                    <div class='me-3'>
                                                                        <span class='text-muted fs-7 mb-1'>{$call->created_at->diffForHumans()}</span>
                                                                        <a href='#' class='fs-5 fw-bolder text-gray-900 text-hover-primary ms-1'>You</a>
                                                                    </div>
                                                                    <div class='symbol symbol-35px symbol-circle'>";

                    // Check if user photo exists
                    if ($call->user && $call->user->photo) {
                        $output .= "<img src='" . asset(Auth::user()->photo) . "' />";
                    } else {
                        $output .= "<img alt='Pic' src='assets/media/avatars/blank.png' />";
                    }

                    $output .= "</div>
                                                                </div>
                                                                <div class='p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end' data-kt-element='message-text'>{$call->description}</div>
                                                            </div>
                                                        </div>";
                }
            }

            $output .= "</div>
                                    <div class='modal-footer'>
                                        <textarea class='form-control form-control-flush mb-3' rows='1' id='description{$lead->id}'  placeholder='Type a message'></textarea>
                                        <input type='hidden' name='lead_id' value='{$lead->id}' id='lead_id{$lead->id}'>
                                        <div class='d-flex flex-stack text-end' style='margin-right:auto;'>
                                            <button class='btn btn-primary'  onclick='sendData({$lead->id},$(`#description{$lead->id}`).val())'>Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";



            $output .= "  <a target='_blank' href='/leadedit.{$lead->id}' 
                    
                    class='btn btn-icon btn-bg-secondary btn-active-color-primary btn-sm me-1'>
                        <span class='svg-icon svg-icon-3'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
                                viewBox='0 0 24 24' fill='none'>
                                <path opacity='0.3'
                                    d='M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z'
                                    fill='black'></path>
                                <path
                                    d='M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z'
                                    fill='black'></path>
                            </svg>
                        </span>
                    </a>

                    <a  href='javascript:void(0);' id='clickToCallBtn{$lead->id}' href='#' data-bs-toggle='modal' 
                        id='kt_toolbar_primary_button'
                        class='btn btn-icon btn-bg-success btn-active-color-light btn-sm me-1'>
                        <span class='svg-icon svg-icon-3'>
                            <li class='fa fa-phone fa-lg'></li>
                        </span>
                    </a>

                    <form action='/convertleads/{$lead->id}'method='post'>
                    " . csrf_field() . "
                        <button type='submit' class='btn btn-icon btn-bg-secondary btn-active-color-light btn-sm me-1'>
                            <span class='svg-icon svg-icon-3'>C</span>
                        </button>
                    </form>
                </a>
                 <a href='#' id='clickToDownload{$lead->order_id}' class='btn btn-icon btn-bg-danger btn-active-color-dark btn-sm me-1 download-btn{{$lead->id}}' onclick='downloadFiles(this)' >
                    <span class='svg-icon svg-icon-3'>
                        <i class='fa fa-download fa-lg'></i>
                    </span>
                </a>
                </td>
                <td class='text-center'>{$lead->order_id}  <br>
                    " . ($lead->resit == 'on' ? '<span class="badge badge-light-danger fs-7 fw-bold">Resit</span>' : '') . "
                    " . ($lead->service_type == 'First Class Work' ? '<span class="badge badge-light-info fs-7 fw-bold">First Class Word</span>' : '') . "
                </td>
                <td>
                    

                    " . ($lead->user != '' ?   $lead->user->name : '') . "
                " . ($lead->user != '' ? '<span class="badge badge-light-danger fs-7 fw-bold">' . $lead->user->mobile_no . '</span>' : '') . "
                </td>
                <td>" . \Carbon\Carbon::parse($lead->create_at)->format('d M Y') . "</td>
                <td class='text-center'>{$lead->project_title}  <br>
                " . ($lead->tech == 'on' ? '<span class="badge badge-light-success fs-7 fw-bold">Technical</span>' : '') . "
                " . ($lead->module_code != '' ? '<span class="badge badge-light-danger fs-7 fw-bold">' . $lead->module_code . '</span>' : '') . "
                
                </td>
                <td>{$lead->pages}
                </td>
                <td>{$lead->price}</td>
                <td>" . \Carbon\Carbon::parse($lead->deadline)->format('d M Y') . "</td>
            </tr>";
            $index++;
        }

        return $output;
    }
    public function leadEditPage($id)
    {
        $service = Services::all();

        $lead = Leads::where('id', $id)->first();
        // echo '<pre>'; print_r($lead);exit;

        return view('leads.section.lead_edit', compact('lead', 'service'));
    }
    public function swapUserData(Request $request)
    {
        $userId = $request->input('user_id');

        // Retrieve the user by ID
        $user = Leads::find($userId);
        if ($user) {
            // Swap the values
            $tempCountryCode = $user->countrycode;
            $tempMobileNo = $user->mobile;

            $user->countrycode = $user->countrycode2;
            $user->mobile = $user->mobile2;

            $user->countrycode2 = $tempCountryCode;
            $user->mobile2 = $tempMobileNo;

            // Save the changes
            $user->save();


            // Include the swapped data in the response
            $responseData = [
                'success' => true,
                'message' => 'Data swapped successfully',
                'mobile1' => [
                    'country_code' => $user->countrycode,
                    'mobile_number' => $user->mobile,
                ],
                'mobile2' => [
                    'country_code' => $user->countrycode2,
                    'mobile_number' => $user->mobile2,
                ],
            ];

            return response()->json($responseData, 200);
        } else {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }
    }
    public function leadCallPage($id)
    {
        $lead = Leads::with('call.user')->find($id);
        $service = Services::all();

        return view('leads.section.call_lead', compact('lead', 'service'));
    }

    public function orderByuser(Request $request)
    {

        $latestOrder = Order::orderByDesc('id')->first();
        $newOrderNumber = $latestOrder ? (intval(substr($latestOrder->order_id, 3)) + 1) : 1;
        $newOrderId = 'UKS' . $newOrderNumber;

        $lead = new Leads;
        $lead->order_id = $newOrderId;
        $lead->user_name = auth()->user()->name;
        $lead->email = auth()->user()->email;
        $lead->mobile = auth()->user()->mobile_no;
        $lead->emp_id = auth()->user()->id;
        $lead->project_title = $request->input('title');
        $lead->deadline = $request->input('deadline');
        $lead->create_at = now();
        $lead->save();


        $order = new Order;
        $order->order_id = $newOrderId;
        $order->lead_id = $lead->id;
        $order->save();
        return redirect()->back()->with('success', 'New Leads Insert Successfully');
    }

    public function updateUser(Request $request, $id)
    {
        $userId = $request->input('user_id');

        // Retrieve the user by ID
        $lead = Leads::find($id);

        if ($lead) {
            // Swap the values
            $tempCountryCode = $lead->countrycode;
            $tempMobileNo = $lead->mobile;

            $lead->countrycode = $lead->countrycode2;
            $lead->mobile = $lead->mobile2;

            $lead->countrycode2 = $tempCountryCode;
            $lead->mobile2 = $tempMobileNo;

            // Save the changes
            $lead->save();

            // Include the swapped data in the response
            $responseData = [
                'success' => true,
                'message' => 'Data swapped successfully',
                'mobile1' => [
                    'country_code' => $lead->countrycode,
                    'mobile_number' => $lead->mobile,
                ],
                'mobile2' => [
                    'country_code' => $lead->countrycode2,
                    'mobile_number' => $lead->mobile2,
                ],
            ];

            return response()->json($responseData, 200);
        } else {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }
    }


    public function checked(Request $request, $id)
    {
        $leads = Leads::find($id);

        if ($leads->flag == 0) {
            $leads->flag = 1;
        } else {
            // If flag is already 1, set it to 0
            $leads->flag = 0;
        }

        $leads->save();

        return response()->json(['message' => 'Lead Check successfully']);
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json(['exists' => true, 'email' => $user->email, 'mobile_no' => $user->mobile_no]);
        } else {
            return response()->json(['exists' => false, 'email' => null, 'mobile_no' => null]);
        }
    }

    public function updateEmail(Request $request, $email)
    {
        $existingUser = User::where('email', $email)->first();

        if ($existingUser) {
            // Email already exists, return a response indicating that the email was not updated
            return response()->json(['success' => false, 'message' => 'Email already exists.']);
        } else {
            // Update the email for the authenticated user
            $user = $request->user(); // Assuming you are using Laravel's built-in authentication
            if (!$user) {
                return response()->json(['success' => false, 'message' => 'User not found.']);
            }

            $user->email = $email;
            $user->save();

            // Return a success response
            return response()->json(['success' => true, 'message' => 'Email updated successfully.']);
        }
    }

    public function convertLead($lead)
    {
        $leadData = Leads::find($lead);



        if (!$leadData) {
            return response()->json(['success' => false, 'message' => 'Lead not found.'], 404);
        }

        $order = Order::where('lead_id', $leadData->id)->first();

        if (!$order) {
            return response()->json(['success' => false, 'message' => 'Order not found for the lead.'], 404);
        }

        $order->uid = $leadData->emp_id;
        $order->title = $leadData->project_title;

        $order->pages = $leadData->pages;
        $order->services = $leadData->service_type;
        if ($leadData->tech == 'on') {
            $order->tech = '1';
        }
        // Check if the delivery date is available
        // if (!$leadData->deadline) {
        //     return response()->json(['success' => false, 'message' => 'Delivery date not available.'], 400);
        // }
        $order->delivery_date = $leadData->deadline;
        $order->amount = $leadData->price;
        $order->message = $leadData->messages;
        $order->resit = $leadData->resit;
        $order->projectstatus = 'Other';

        $order->order_date = now()->format('Y-m-d');
        $order->is_read = '1';
        $order->module_code =  $leadData->module_code;

        $order->draftrequired = $leadData->draft_required;
        $order->draft_date = $leadData->draft_date;
        $order->draft_time = $leadData->draft_time;


        $user = User::where('id', $leadData->emp_id)->first();

        $mailData = [
            'name' => $user->name,
            'email' => $user->email,
            'title' => $leadData->project_title,
            'order_code' => $leadData->order_id,
            'date'     => $leadData->deadline,
        ];
        // dd ($mailData); EXIT;

        // Mail::to('vikramsuthar.wm@gmail.com')->send(new LeadsConvertMail($mailData));

        // Define CC recipients
        $ccRecipients = [
            'anshjangid02@gmail.com', // Add CC email addresses here
        ];

        // Send email with CC
        Mail::to('vikramsuthar.wm@gmail.com')
            ->cc($ccRecipients)
            ->send(new LeadsConvertMail($mailData));

        $order->save();


        $leadData->delete();


        return redirect('/order');
    }

    public function FrontEndLeads(Request $request)
    {
        // Validate the reCAPTCHA token
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $recaptchaSecret = config('services.recaptcha.secret_key');
        $recaptchaVerification = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
        ]);

        if (!$recaptchaVerification->json('success')) {
            return redirect()->back()->withErrors(['captcha' => 'ReCAPTCHA verification failed.']);
        }

        //date validation
        $deliveryDate = $request->input('delivery_date');
        $today = date('Y-m-d'); // Get today's date
        // echo  $deliveryDate, "",$today; exit;
        // Check if the delivery date is before today        
        if ($deliveryDate < $today) {
            // Redirect back with an error message if the date is invalid
            return redirect()->back()->withErrors(['delivery_date' => 'Assignment Deadline cannot be before today.']);
        }
        

        // Validate the incoming request
        $request->validate([
            'doc.*' => 'file|max:102400', // Example validation for file uploads
        ]);

        // Get the latest order to generate a new order ID
        $latestOrder = Order::orderByDesc('id')->first();
        $newOrderNumber = $latestOrder ? (intval(substr($latestOrder->order_id, 3)) + 1) : 1;
        $newOrderId = 'UKS' . $newOrderNumber;

        if (Auth::user()) {
            $user = Auth::user();

            // Create a new Leads instance
            $leads = new Leads;
            $leads->order_id = $newOrderId;
            $leads->emp_id = $user->id;

            $leads->deadline = $request->input('delivery_date');

            $leads->message = $request->input('message');

            $leads->email = $user->email;
            $leads->user_name = $user->name;
            $leads->countrycode = $user->countrycode;
            $leads->mobile = $user->mobile_no;
            $leads->frontendorder = 1;



            $leads->save();
            $leadsId = $leads->id;

            $order = new Order;
            $order->uid = 0;
            $order->order_id = $newOrderId;
            $order->lead_id = $leadsId;
            $order->u_email = $user->email;
            $order->uname = $user->name;

            $order->message = $request->input('message');
            $order->order_date =  Carbon::now();

            $order->delivery_date = $request->input('delivery_date');
            $order->save();

            if ($request->file('doc')) {
                // Loop through each uploaded file
                foreach ($request->file('doc') as $file) {
                    // Generate a unique file name to prevent conflicts
                    $fileName = $newOrderId . '_' . $file->getClientOriginalName();

                    // Move the uploaded file to the public/files directory
                    $file->move(public_path('files'), $fileName);

                    // Store the file metadata in the database
                    $newFile = new Files;
                    $newFile->file_data = 'files/' . $fileName; // Store file path relative to public directory
                    $newFile->order_id = $newOrderId;
                    $newFile->file_name = $fileName; // Store the unique file name
                    $newFile->file_type = $file->getClientMimeType();
                    $newFile->save();
                }
            }
        }
        if (!Auth::user()) {
            $user = User::where('email', $request->input('email'))->first();

            if (!$user) {
                $user = new User;
                $user->email = $request->input('email') ?: 'user' . $request->input('mobile') . '@gmail.com';
                $user->mobile_no = $request->input('mobile');
                $user->name = $request->input('user_name') ?: 'user' . $request->input('mobile');
                $user->countrycode = $request->input('countrycode');
                $user->password = Hash::make('user@123');
                $user->role_id = 2;
                $user->save();

                $userId = $user->id;
                $name = $user->name;
                $email = $user->email;
            }

            // Create a new Leads instance
            $leads = new Leads;
            $leads->order_id = $newOrderId;
            $leads->emp_id = $user->id;

            $leads->deadline = $request->input('delivery_date');

            $leads->message = $request->input('message');

            $leads->email = $user->email ?? $request->input('email');
            $leads->user_name = $user->name ?? $request->input('user_name');
            $leads->countrycode = $user->countrycode ?? $request->input('countrycode');
            $leads->mobile = $user->mobile_no ?? $request->input('mobile');
            $leads->frontendorder = 1;


            $leads->save();
            $leadsId = $leads->id;

            $order = new Order;
            $order->uid = 0;
            $order->order_id = $newOrderId;
            $order->lead_id = $leadsId;
            $order->u_email = $user->email ?? $request->input('email');
            $order->uname = $user->name ?? $request->input('user_name');

            $order->message = $request->input('message');
            $order->order_date =  Carbon::now();

            $order->delivery_date = $request->input('delivery_date');
            $order->save();

            if ($request->file('doc')) {
                // Loop through each uploaded file
                foreach ($request->file('doc') as $file) {
                    // Generate a unique file name to prevent conflicts
                    $fileName = $newOrderId . '_' . $file->getClientOriginalName();
                    // Move the uploaded file to the public/files directory
                    $file->move(public_path('files'), $fileName);

                    // Store the file metadata in the database
                    $newFile = new Files;
                    $newFile->file_data = 'files/' . $fileName; // Store file path relative to public directory
                    $newFile->order_id = $newOrderId;
                    $newFile->file_name = $fileName; // Store the unique file name
                    $newFile->file_type = $file->getClientMimeType();
                    $newFile->save();
                }
            }
        }

        return redirect('/MyOrders')->with('success', 'Your Order Place');
    }

    public function findfiles(Request $request)
    {
        $orderId = $request->input('order_id');

        // Fetch files by order ID
        $files = Files::where('order_id', $orderId)->pluck('file_data')->toArray();

        // Return file URLs
        $fileUrls = [];
        foreach ($files as $file) {
            $fileUrls[] = asset($file); // Assuming files are stored in the public/files directory
        }

        return response()->json($fileUrls);
    }
}

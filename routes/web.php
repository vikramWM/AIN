<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Models\Add;
use App\Models\Order;
use App\Models\User;
use App\Models\FeedbackOrder;
use App\Models\Leads;
use App\Http\Controllers\CallController;

use Carbon\Carbon;
use App\Http\Controllers\ExportController;

Route::get('/export', [ExportController::class, 'export'])->name('export.orders');
Route::get('/export-leads', [ExportController::class, 'exportLeads'])->name('export.leads');
Route::get('/export-users', [ExportController::class, 'exportUsers'])->name('export.users');
Route::get('/export-WD', [ExportController::class, 'exportWD'])->name('export.WD');
Route::get('/order-writer', [OrderController::class, 'orderWD'])->name('order.writer');
Route::post('/order-writer', [OrderController::class, 'orderWD2'])->name('order.writer2');

Route::get('/', function () {
    $data['title'] = 'Assignment Writing Help in London, UK @40% off';
    $data['description'] = 'Assignment Writing Help in London, UK offers The technical assignments as well Mathematics, Physics, C++, Java, LabVIEW, MATLAB Assignments order @40% off.';
    $data['keyword'] = 'assignment writing help, assignment writing service, assignment writing services';
    $advertisements = Add::orderBy('id', 'desc')->first()   ;

    // dd($data['advertisements']);
    return view('welcome',compact('data','advertisements'));
});


Route::get('/click2call', function () {
    return view('api.clic2call');
});
Route::get('/Offers',
 function () {
    $data['title'] = 'Offers - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    return view('frontend.offers',compact('data'));
});

Route::post('/neworder-fromhome', [LeadsController::class, 'FrontEndLeads'])->name('neworder.create');
Route::get('/get-files-by-order', [LeadsController::class, 'findfiles'])->name('get-files-by-order');


// Route::post('/neworder-fromhome', function (Request $request) {
//     // Get the latest order to generate a new order ID
//     $latestOrder = Order::orderByDesc('id')->first();
//     $newOrderNumber = $latestOrder ? (intval(substr($latestOrder->order_id, 3)) + 1) : 1;
//     $newOrderId = 'UKS' . $newOrderNumber;

//     $user = User::where('email', $request->input('email'))->first();
    
//     if (!$user) {
//         $user = new User;
//         $user->email = $request->input('email') ?: 'user' . $request->input('mobile') . '@gmail.com';
//         $user->mobile_no = $request->input('mobile');
//         $user->name = $request->input('user_name') ?: 'user' . $request->input('mobile');
//         $user->countrycode = $request->input('countrycode');
//         $user->password = Hash::make('user@123');
//         $user->role_id = 2;
//         $user->save();

//         $userId = $user->id;
//         $name = $user->name;
//         $email = $user->email;
//     } 

//     // Create a new Leads instance
//     $leads = new Leads;
//     $leads->order_id = $newOrderId;
//     $leads->emp_id = $user->id;
    
//     $leads->deadline = $request->input('delivery_date');
    
//     $leads->message = $request->input('message');

//     $leads->email = $user->email ?? $request->input('email');
//     $leads->user_name = $user->name ?? $request->input('user_name');
//     $leads->countrycode = $user->countrycode ?? $request->input('countrycode');
//     $leads->mobile = $user->mobile_no ?? $request->input('mobile');
    

//     $leads->save();
//     $leadsId = $leads->id; 

//     $order = new Order;
//     $order->uid = 0; 
//     $order->order_id = $newOrderId;
//     $order->lead_id = $leadsId;
//     $order->u_email = $user->email ?? $request->input('email');
//     $order->uname = $user->name ?? $request->input('user_name');
    
//     $order->message = $request->input('message');
//     $order->order_date =  Carbon::now();

//     $order->delivery_date = $request->input('delivery_date');
//     $order->save();
    

//     // return redirect()->back()->with('success', 'New Leads Insert Successfully');
//     return redirect('/myOrders')->with(['success' => 'New Leads Insert Successfully']);

// });


Route::get('/PrivacyPolicy',
 function () {
    $data['title'] = 'Privacy Policy - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    return view('Policy.PrivacyPolicy',compact('data'));
});
Route::get('/Terms-Conditions',
 function () {
    $data['title'] = 'Terms &amp; Conditions - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    return view('Policy.Terms&Conditions',compact('data'));
});
Route::get('/RefundPolicy',
 function () {
    $data['title'] = 'Refund Policy - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    return view('Policy.RefundPolicy',compact('data'));
});
Route::get('/GuaranteedPolicy',
 function () {
    $data['title'] = 'Guarantee Policy - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    
    return view('Policy.GuaranteedPolicy',compact('data'));
});
Route::get('/CancellationPolicy',
 function () {
    $data['title'] = 'Cancellation Policy - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    return view('Policy.CancellationPolicy',compact('data'));
});
//     Route::get('/MyOrders',
//     function () {
//        $data['title'] = 'Assignment Writing Help in London,UK | Assignment Writing Service in UK';
//        $data['description'] = '';
//        $data['keyword'] = '';
//        return view('frontend.my-orders',compact('data'));
//    });
Route::get('/MyOrders', [OrderController::class, 'myOrder'])->middleware(['auth'])->name('MyOrders');

// header pages
Route::get('/about', function () {return view('frontend/header/company/about');});
Route::get('/assignment-help-expert-uk', 
function () 
{
    $data['title'] = 'Assignment Help Expert in UK | Assignment Writing Services UK';
    $data['description'] = 'Assignment Writing Help in London, UK offers The technical assignments as well Mathematics, Physics, C++, Java, LabVIEW, MATLAB Assignments order @40% off.';
    $data['keyword'] = '';
    return view('frontend/header/company/what-we-are' ,compact('data'))
    
;});
Route::get('/why-choose-us', 
function () {
    $data['title'] = 'Professional Assignment Writing Service | Assignment Help London';
    $data['description'] = 'At Assignment In Need, we offer assignment help services for all students. Our expert writers provide customers with professional assignment writing service';
    $data['keyword'] = '';
    return view('frontend/header/company/why-choose-us' ,compact('data'));});

Route::get('/assignment-writing-uk', function () 
{
    $data['title'] = 'Cheap Assignment Writing Help in London, UK | Assignment in need';
    $data['description'] = 'Get Help with cheap assignment writing in London, UK by expert writers to secure good grades. Order Now and Get 40% discounts.';
    $data['keyword'] = 'assignment writing help service in london, cheap assignment help uk, assignment writing services';
    return view('frontend/header/services/assignment-writing' , compact('data'));
});
Route::get('/dissertation-writing-services-uk', 
function () {
    $data['title'] = 'Dissertation Writing Services in London, UK';
    $data['description'] = 'Get Dissertation writing services in London, UK by expert dissertation writers to secure good grades. We offer the best dissertation writing services with great discounts.';
    $data['keyword'] = 'Dissertation Writing Services in London, Dissertation Writing Services, Dissertation Writing';
    return view('frontend/header/services/dissertation-writing-services', compact('data'));
});
Route::get('/essay-writing-help-uk', 
function () {
    $data['title'] = 'Essay Writing Help in London, UK | Assingment In Need';
    $data['description'] = 'Get the Best Essay Writing Help in London,UK for an assignment of any topic and urgency. We have experience with Essay Writing Services in UK.';
    $data['keyword'] = 'Essay Writing Help in London, Essay Writing Help, Essay Writing';
    return view('frontend/header/services/essay-writing-help', compact('data'));
});
Route::get('/research-paper-writing-uk', 
function () {
    $data['title'] = 'Research Paper Writing Help in London, UK | Assignment In Need';
    $data['description'] = 'Research Paper Writing Help in London, UK? Get research paper writing help from professional writers. Order Now And Get a 40% Discount.';
    $data['keyword'] = 'Research Paper Writing Help in London, Research Paper Writing, Research Paper Writing Services';
    return view('frontend/header/services/research-paper-writing', compact('data'));
});
Route::get('/homework-writing-help-uk', 
function () {
    $data['title'] = 'Homework Writing Help in London, UK | Assignment In Need';
    $data['description'] = 'Assignment In Need offer to do any kind of homework Writing Help in London,UK accurately at cheap price. You can choose our service any time.';
    $data['keyword'] = 'Homework Writing Help in London, Homework Writing, Homework Writing Help';
    return view('frontend/header/services/homework-writing-help', compact('data'));
});

Route::get('uk/birmingham/assignment-help', 
function () {
    $data['title'] = '#1 Online Assignment Help Birmingham | Assignment In Need';
    $data['description'] = 'Assignment In Need provides high-quality assignment writing services in Birmingham, ensuring fast delivery, cost-effectiveness, and plagiarism-free solutions.';
    $data['keyword'] = '';
    return view('frontend/header/country/birmingham', compact('data'));
});
Route::redirect('assignment-help-in-birmingham', 'uk/birmingham/assignment-help', 301);



Route::get('/uk/manchester/assignment-help', 
function () {
    $data['title'] = '#1 Online Assignment Help Manchester | Assignment In Need ';
    $data['description'] = 'Get quality assignment writing services in Manchester by Assignment In Need. Enjoy fast turnaround times, competitive pricing, and plagiarism-free solutions.';
    $data['keyword'] = '';
    return view('frontend/header/country/manchester', compact('data'));
});
Route::redirect('best-assignment-writing-help-in-manchester', 'uk/manchester/assignment-help', 301);



Route::get('/au/sydney/assignment-help',
 function () {
    $data['title'] = 'Assignment writing Help in Sydney - Assignment In Need';
    $data['description'] = 'Get top-notch Assignment Writing Help in Sydney with Assignment In Need. Our expert team ensures impeccable assignments, timely delivery, and academic excellence.';
    $data['keyword'] = 'assignment writing help in Sydney, assignment writing help services, Assignment Services';
    return view('frontend/header/country/sydney', compact('data'));
});
Route::redirect('assignment-writing-help-in-sydney', '/au/sydney/assignment-help', 301);

Route::get('/au/melbourne/assignment-help', function () {
    $data['title'] = 'Assignment Writing Help in Melbourne - Assignment In Need';
    $data['description'] = "Seeking reliable Assignment Writing Help in Melbourne? Look no further! Our expert team at 'Assignment In Need' is here to provide top-notch assistance for all your academic assignments.";
    $data['keyword'] = 'assignment writing help in Melbourne, assignment writing, Assignment help';
    return view('frontend/header/country/melbourne', compact('data'));
});
Route::redirect('assignment-writing-help-in-melbourne', 'au/melbourne/assignment-help', 301);


Route::get('/my', 
function () {
    $data['title'] = 'Assignment Writing Help in Malaysia | Assignment in need';
    $data['description'] = 'Get Help with assignment writing Help in Malaysia by expert writers to secure good grades. order now and Get 50 % off on assignment Writing Services.';
    $data['keyword'] = 'assignment writing help in Malaysia, assignment writing help services, Assignment help services';
    return view('frontend/header/country/malaysia', compact('data'));
});
Route::redirect('assignment-writing-malaysia', '/my', 301);



Route::get('/es/barcelona/assignment-help', 
function () {
    $data['title'] = 'Assignment In Need Barcelona';
    $data['description'] = 'Need assignment help in Barcelona? We&#039;ve got you covered! Expert tutors for any subject, deadline-guaranteed. Get FREE quotes now!';
    $data['keyword'] = 'assignment writing help in Barcelona, assignment writing services, Assignment help';
    return view('frontend/header/country/barcelona', compact('data'));
});
Route::redirect('assignment-in-need-barcelona', '/es/barcelona/assignment-help', 301);


Route::get('/ae', 
function () {
    $data['title'] = 'Best Assignment Help UAE | Assignment in Need';
    $data['description'] = '';
    $data['keyword'] = 'assignment writing help in UAE, assignment services in UAE, UAE Assignment help';
    return view('frontend/header/country/uae', compact('data'));
});
Route::redirect('best-assignment-help-uae', 'ae', 301);


Route::get('/au', 
function () {
    $data['title'] = 'Assignment Writing Help in Australia | Assignment in need';
    $data['description'] = 'Get Help with assignment writing Help in Australia by expert writers to secure good grades. order now and Get 50 % off on assignment Writing Services.';
    $data['keyword'] = '';
    return view('frontend/header/country/assignment-writing-australia', compact('data'));
});
Route::redirect('assignment-writing-australia', '/au', 301);

Route::get('/es', 
function () {
    $data['title'] = 'Best Assignment Help Spain - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    return view('frontend/header/country/best-assignment-help-spain', compact('data'));
});

Route::redirect('best-assignment-help-spain', 'es', 301);


// Route::get('/samples', function () {return view('frontend/header/samples');});
Route::get('/upload-your-assignment',
 function () {
    $data['title'] = 'Assignment Writing Help in London,UK | Assignment Writing Service in UK';
    $data['description'] = '';
    $data['keyword'] = '';
    return view('frontend/header/order-now', compact('data'));
});
// Route::get('myProfile', function () {return view('frontend/myProfile');});
Route::get('myProfile',
 function () {
     // Get the authenticated user
     $user = Auth::user();

     // Check if the user is authenticated
     if ($user) {
         // User is authenticated, retrieve user details
         $userData = [
             'name' => $user->name,
             'email' => $user->email,
             'address' => $user->address,
             'mobile_no' => $user->mobile_no,
             'photo' => $user->photo,
             'Id' => $user->id,
             // Add other user details as needed
         ];
     } else {
         // User is not authenticated, set user data to null or handle accordingly
         $userData = null;
     }
 
     // Define other data for the view
     $data['title'] = 'My Profile | Online Essay, Research Paper writers UK';
     $data['description'] = 'If you are looking for Online Assignment Help UK then Assignment In Need is one of the best Online Essay, Research Paper writers UK.';
     $data['keyword'] = '';
 
     // Pass user data and other data to the view
     return view('frontend.myProfile', compact('data', 'userData'));
});
Route::post('/change-user-password', function () {
   
    // Retrieve the current user's ID
    $userId = Auth::id(); // Assuming you are using Laravel's authentication

    // Retrieve the payload
    $payload = request()->all();

    // Retrieve the user record from the database
    $user = User::find($userId);

    // Verify if the new password and its confirmation are not empty
    if (empty($payload['current_password']) || empty($payload['new_password']) || empty($payload['new_password_confirmation'])) {
        // Passwords are empty, redirect back with an error message
        return Redirect::back()->with('error', 'password cannot be empty');
    }

    
    // Verify if the new password and its confirmation match
    if ($payload['new_password'] !== $payload['new_password_confirmation']) {
        // Passwords don't match, redirect back with an error message
        return Redirect::back()->with('error', 'New password and confirmation do not match');
    }

    // Verify if the current password matches the hashed password stored in the database
    if (Hash::check($payload['current_password'], $user->password)) {
        // Hash the new password
        $hashedNewPassword = Hash::make($payload['new_password']);

        // Update the user's password
        $user->update(['password' => $hashedNewPassword]);

        // Password updated successfully, redirect back with a success message
        return Redirect::back()->with('success', 'Password updated successfully');
    } else {
        // Current password doesn't match, redirect back with an error message
        return Redirect::back()->with('error', 'Current password is incorrect');
    }
})->name('postChangeUserPassword');

Route::post('/userProfile/{id}', function($id, Request $request) {
    try {
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('phone');
        $user->address = $request->input('address');

        if ($request->hasFile('photo')) {
            $uploadedFile = $request->file('photo');

            $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
            $destinationPath = public_path('assets/media/avatars');

            $uploadedFile->move($destinationPath, $fileName);

            $user->photo = 'assets/media/avatars/' . $fileName;
        } else {
            $user->photo = 'assets/media/avatars/blank.png';
        }

        $user->save();
        dd($user);
        return redirect()->back()->with('success', 'Profile Updated Successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
    }
})->name('userProfile.update');
Route::post('/myordersFeedback', function(Request $request) {
    // Get the content from the request
    $content = $request->input('content');
    
    // Get the user ID from authentication
    $userId = auth()->id();

    // Get the orderId from the request
    $orderId = $request->input('order_id');

    // Create a new instance of the FeedbackOrder model
    $feedbackOrder = new FeedbackOrder();

    // Set the feedback, uid, and orderId fields
    $feedbackOrder->feedback = $content;
    $feedbackOrder->uid = $userId;
    $feedbackOrder->order_Id = $orderId;

    // Save the feedback order to the database
    $feedbackOrder->save();

    // You can also return a response if needed
    return response()->json(['message' => 'Feedback saved successfully'], 200);

})->name('myordersFeedback');

Route::get('/fetchFeedback', function () {
    // Fetch feedback from the database
    $feedback = FeedbackOrder::all();
    
    // Return the feedback as JSON
    return response()->json($feedback);
})->name('fetchFeedback');


Route::get('contact-us',
 function () {
    $data['title'] = 'Online Assignment Help UK | Online Essay, Reaserch Paper writers UK';
    $data['description'] = 'If you are looking for Online Assignment Help UK then Assignment In Need is one of the best Online Essay, Research Paper writers UK.';
    $data['keyword'] = '';
    return view('frontend/header/contact-us', compact('data'));
});
Route::get('/advertisement', [HomeController::class, 'write_advertisement'])->name('advertisement');
Route::post('/submit_advertisement', [HomeController::class, 'advertisement_store'])->name('submit_advertisement');
Route::delete('/advertisement/{id}', [HomeController::class, 'destroyAdvertisement'])->name('advertisement.destroy');



Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/write_blog', [HomeController::class, 'write_blog'])->name('write_blog');
Route::get('/blog_list', [HomeController::class, 'blog_list'])->name('blog_list');
Route::post('/submit_blog', [HomeController::class, 'blog_store'])->name('submit_blog');

Route::get('/blog/{slug}', [HomeController::class, 'getBlogBySlug']);

Route::delete('/blogs/{id}', [HomeController::class, 'destroyBlog'])->name('blogs.destroy');
Route::delete('/blog_list/{id}', [HomeController::class, 'editBlog'])->name('blogs.edit');

Route::get('/samples', [HomeController::class, 'sample'])->name('samples');
Route::get('/create_sample', [HomeController::class, 'create_sample'])->name('create_sample');
Route::get('/sample_list', [HomeController::class, 'sample_list'])->name('sample_list');

Route::post('/submit_sample', [HomeController::class, 'sample_store'])->name('submit_sample');
Route::get('/sample/{slug}', [HomeController::class, 'getSampleBySlug']);
Route::delete('/sample/{id}', [HomeController::class, 'destroySample'])->name('sample.destroy');
Route::delete('/sample_list/{id}', [HomeController::class, 'editSample'])->name('sample.edit');


Route::get('/orders_data', function () {
    return view('orders_data');
});


Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/fetch-team-members', function () {
    try {
        // Get the role_id from the request
        $roleId = request()->get('role_id');

        // Fetch team members based on the role_id
        $teamMembers = User::where('role_id', $roleId)->get();

        // Return team members as JSON response
        return response()->json(['teamMembers' => $teamMembers]);
    } catch (\Exception $e) {
        // Log the exception
        \Log::error('Error fetching team members: ' . $e->getMessage());

        // Return an error response
        return response()->json(['error' => 'Internal Server Error'], 500);
    }
});


Route::middleware(['auth', 'checkrole'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::post('/change-password', [ProfileController::class, 'changePasswordSave'])->name('postChangePassword');
    Route::post('/change-passwordby-admin', [ProfileController::class, 'changePasswordSaveAdmin'])->name('postChangePasswordAdmin');
    Route::POST('/profile/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');


    Route::get('/menus', [MenuController::class, 'index'])->name('menus');
    Route::post('/menus', [MenuController::class, 'store'])->name('menus');
    Route::delete('menus/{menu}',[MenuController::class, 'destroy'])->name('menus.destroy');
    Route::put('/menu/{id}', [MenuController::class, 'update'])->name('update');

    Route::get('/submenu', [MenuController::class, 'submenu'])->name('submenu');
    Route::post('/submenu', [MenuController::class, 'submenu_insert'])->name('submenu');
    Route::delete('submenu/{submenus}',[MenuController::class, 'delete'])->name('submenu.delete');
    Route::put('/submenu/{id}', [MenuController::class, 'submenu_update'])->name('submenu_update');
    
    Route::get('/userright', [MenuController::class, 'userright'])->name('userright');
    Route::Post('/userright', [MenuController::class, 'permission'])->name('userright');
    Route::get('/rolePermission', [MenuController::class, 'rolePermission'])->name('rolePermission');
    Route::post('/updateUser/{id}', [LeadsController::class, 'updateUser']);



    Route::get('/user', [UserController::class, 'index'])->name('user'); 
    Route::POST('/user/{id}', [UserController::class, 'EditUser'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'DeleteUser'])->name('user.delete');
    Route::get('/usercreate', [UserController::class, 'new_user'])->name('usercreate');
    Route::Post('/usercreate', [UserController::class, 'insert_new_user'])->name('usercreate');

    Route::Get('/order', [OrderController::class, 'index'])->name('order');

    Route::Post('/order/feedback', [OrderController::class, 'saveFeedback'])->name('feedback');

    


    Route::get('/get-data', [OrderController::class, 'get-data'])->name('get');
    Route::put('/order/{id}', [OrderController::class, 'OrderEdit'])->name('order.update');
    Route::put('/fail/{orderId}', [OrderController::class, 'fail'])->name('update.order');
    route::put('/payment/{id}', [OrderController::class, 'payment'])->name('payment.update');
    route::get('/search', [OrderController::class, 'search']);
    route::get('/suggestions', [UserController::class, 'search'])->name('suggestions');
    Route::get('/fetch-subwriters', [OrderController::class, 'fetchSubWriters'])->name('fetch-subwriters');
    // Route::get('/search', [SearchController::class, 'fetchSubWriters'])->name('search.index');
    Route::get('/search-order', [SearchController::class, 'search'])->name('search-order');
    // routes/web.php

    Route::get('/search-user', [SearchController::class, 'searchUser'])->name('search-user');



    route::get('/search-writer', [OrderController::class, 'search_writer']);
    route::get('/search-writerTl', [OrderController::class, 'search_writerTl']);
    route::get('/filter', [OrderController::class, 'filter']);
    route::get('edit.{id}',[OrderController::class, 'orderEditPage'])->name('edit');
    route::get('call.{id}',[OrderController::class, 'orderCallPage'])->name('call');
    route::get('comment.{id}',[OrderController::class, 'orderCommentPage'])->name('comment');
    route::get('orderpayments.{id}',[OrderController::class, 'orderPayment'])->name('orderpayments');
    route::delete('orderpayments.{id}',[OrderController::class, 'orderPayment_delete'])->name('orderpayments.delete');
    Route::post('/comment/{id}', [OrderController::class, 'insert_feedback'])->name('comment.insert');
    Route::post('/orderedit/{id}', [OrderController::class, 'OrderEditwriterAdmin'])->name('orderedit.update');

    
    Route::post('/status/{id}', [OrderController::class, 'status_update'])->name('status.update');

   Route::get('/feedback', [OrderController::class, 'feedbacksheet'])->name('feedback');
   Route::post('/send-feedback', [OrderController::class, 'sendFeedback'])->name('send.feedback');

   Route::post('/mark-as-read', [OrderController::class, 'markAsRead']);

   route::post('/OrderCallInsert.{id}' ,[OrderController::class , 'OrderCallInsert']);

   Route::post('/swap-user-data', [OrderController::class , 'swapUserData']);



    Route::get('/master', [MasterController::class, 'index'])->name('master');
    
    Route::get('/typeOfSecvices',      [MasterController::class, 'typeOfSecvices'])->name('typeOfSecvices');
    Route::Post('/typeOfSecvices',     [MasterController::class, 'insert_services'])->name('typeOfSecvices');
    Route::put('/typeOfSecvices/{id}', [MasterController::class, 'update_service'])->name('typeOfSecvices.update');
    Route::delete('/typeOfSecvices/{id}', [MasterController::class, 'Delete_service'])->name('typeOfSecvices.delete');



    Route::get('/formatting', [MasterController::class, 'formatting'])->name('formatting');
    Route::post('/formatting', [MasterController::class, 'formatting_insert'])->name('formatting');
    Route::put('/formatting/{id}', [MasterController::class, 'formatting_update'])->name('formatting.update');
    Route::delete('/formatting/{id}', [MasterController::class, 'formatting_delete'])->name('formatting.delete');

    Route::get('/Categories', [MasterController::class, 'Categories'])->name('Categories');
    Route::post('/categories', [MasterController::class, 'store_categories'])->name('categories.store');
    Route::Put('/categories/{id}', [MasterController::class, 'update_categories'])->name('categories.update');
    Route::delete('/categories/{id}', [MasterController::class, 'delete_categories'])->name('categories.delete');


    Route::get('/Banks', [MasterController::class, 'Banks'])->name('Banks');
    Route::post('/banks', [MasterController::class, 'store_bank'])->name('banks.store');
    Route::put('/banks/{id}/edit', [MasterController::class, 'edit'])->name('banks.edit');
    Route::delete('/banks/{id}', [MasterController::class, 'destroy'])->name('banks.destroy');

    Route::get('/status', [MasterController::class, 'status'])->name('status');
    Route::get('/Payments', [MasterController::class, 'Payments'])->name('Payments');
    Route::post('/update-payment-status/{paymentId}/{isChecked}', [MasterController::class, 'updateStatus']);


    Route::get('/failedJobs', [MasterController::class, 'failedJobs'])->name('failedJobs');


    Route::get('/writer', [MasterController::class, 'Writer'])->name('writer');
    Route::POst('/writer', [MasterController::class, 'store_writer'])->name('writer');
    Route::Put('/writer/{id}', [MasterController::class, 'update_writer'])->name('writer.update');
    Route::delete('/writer/{id}', [MasterController::class, 'delete_writer'])->name('writer.delete');

    Route::get('/writerTL', [MasterController::class, 'writerTL'])->name('writerTL');
    Route::Post('/writerTL', [MasterController::class, 'writerTLinsert'])->name('writerTL');
    Route::PUT('/writerTL/{id}', [MasterController::class, 'update_writerTL'])->name('writerTL.update');
    Route::delete('/writerTL/{id}', [MasterController::class, 'delete_writerTL'])->name('writerTL.delete');


    Route::get('/subwriter', [MasterController::class, 'SubWriter'])->name('subwriter');
    Route::get('/getSubWriters/{writerTLId}', [MasterController::class, 'getSubWriters'])->name('getSubWriters');
    Route::get('/get-writer-tls', [MasterController::class, 'getWriterTLs'])->name('get.writer.tls');
    Route::Post('/subwriter', [MasterController::class, 'store_subwriter'])->name('subwriter');
    Route::Put('/subwriter/{id}', [MasterController::class, 'update_subwriter'])->name('subwriter.update');
    Route::Put('/subwriter/delete/{id}', [MasterController::class, 'delete_subwriter'])->name('subwriter.delete');

    route::get('/typeofpaper', [MasterController::class, 'paperType'])->name('typeofpaper');
    route::post('/typeofpaper', [MasterController::class, 'insert_paper'])->name('typeofpaper');
    Route::put('/typeofpaper/{id}', [MasterController::class, 'paper_update'])->name('typeofpaper.update');
    Route::delete('/typeofpaper/{id}', [MasterController::class, 'delete_paper'])->name('typeofpaper.delete');

    Route::get('/college', [MasterController::class, 'college'])->name('college');
    Route::post('/college', [MasterController::class, 'store_college'])->name('college.store');
    Route::put('/college/{id}', [MasterController::class, 'college_update'])->name('college.update');
    Route::delete('/college/{id}', [MasterController::class, 'delete_college'])->name('college.delete');

    //
    Route::post('/swap-lead-mobile', [LeadsController::class , 'swapUserData']);
    Route::get('/leads', [LeadsController::class, 'index'])->name('leads');  
    Route::get('/leads-new', [LeadsController::class, 'index2'])->name('leads-new');  
    Route::POST('/leads', [LeadsController::class, 'insert_leads'])->name('leads');  
    route::get('/search-leads', [LeadsController::class, 'search'])->name('search-leads');

    Route::post('/leads/send-data', [LeadsController::class, 'insert_call'])->name('send-data');

    Route::get('/leads/fetch-data/{id}', [LeadsController::class, 'fetchData'])->name('fetch-data');


    Route::get('/c-leads', [LeadsController::class, 'cancelleads'])->name('c-leads');    
    Route::POST('/leads/{id}', [LeadsController::class, 'leads_update'])->name('leads.edit');
    Route::put('/cancel_leads{id}', [LeadsController::class, 'leads_Cancel'])->name('leads.update');
    Route::put('/active_leads{id}', [LeadsController::class, 'leads_Active'])->name('leads.update');
    Route::Delete('/Delete{id}', [LeadsController::class, 'delete_leads'])->name('leads.Delete');
    // routes/web.php
    Route::get('/userData', [LeadsController::class, 'userData'])->name('userData');
    Route::POST('/convert/{id}', [LeadsController::class, 'convert'])->name('convert.convert');

    route::get('leadedit.{id}',[LeadsController::class, 'leadEditPage'])->name('leadedit');
    route::get('leadcall.{id}',[LeadsController::class, 'leadCallPage'])->name('leadcall');
    route::post('neworder',[LeadsController::class, 'orderByuser'])->name('neworder');
    route::post('updateEmail/{email}',[LeadsController::class, 'updateEmail'])->name('neworder');
    Route::get('checkEmail', [LeadsController::class, 'checkEmail'])->name('update.email');
    Route::post('/convertleads/{lead}', [LeadsController::class, 'convertLead'])->name('convertLead');

    Route::put('/checklead/{id}', [LeadsController::class, 'checked'])->name('update.value');

    Route::get('/Qc-Sheets', [OrderController::class, 'Qc'])->name('Qc-Sheets');
    Route::post('/qc/{id}', [OrderController::class, 'QcUpdate'])->name('qc.update');
    route::get('/search-qc', [SearchController::class, 'searchQc']);
    route::get('/Qc-edit.{id}', [SearchController::class, 'Qc_edit'])->name('Qc-edit.update');
    
     Route::PUT('/followUpUser/{id}', [UserController::class, 'followupuser']);
    Route::get('/follow-up', [OrderController::class, 'followUp'])->name('follow-up');
    Route::post('/follow.{id}', [OrderController::class, 'followUpUpdate'])->name('follow.update');
    Route::get('/search-fw', [SearchController::class, 'searchFw']);

    
    Route::post('/update-ai-score/{orderId}', [SearchController::class, 'updateAi']);
        Route::post('/qcchecked/{orderId}', [SearchController::class, 'qcchecked']);


 Route::post('/appdialnumber', [CallController::class, 'initiateCall'])->name('appdialnumber');
    Route::get('/HangUp', [CallController::class, 'HangUp'])->name('HangUp');
    Route::get('/HoldCall', [CallController::class, 'HoldCall'])->name('HoldCall');
    Route::get('/unhold', [CallController::class, 'UnHoldCall'])->name('unhold');


    
});

require __DIR__.'/auth.php';


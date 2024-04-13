<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sample;
use App\Models\Blog;
use App\Models\Add;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;
use App\Models\User;
use App\Models\FeedbackOrder;
use Carbon\Carbon;

use Illuminate\Support\Str;

class HomeController extends Controller
{
      public function dashboard(Request $request)
    {
        // chart-2 
        $selectedDate = $request->input('selectedDate', null);
    
        // If no date is selected, use current month and year
        if (!$selectedDate) {
            $selectedDate = date('Y-m'); // Default to current year and month
        }
        
        // Extract selected month and year from the selected date
        $currentMonth = date('m', strtotime($selectedDate));
        $currentYear = date('Y', strtotime($selectedDate));
        // $currentMonth = date('m');
        // $currentYear = date('Y');
        
        $totalOrderCount = Order::whereMonth('order_date', $currentMonth)
            ->whereYear('order_date', $currentYear)
            ->whereNotNull('admin_id')
            ->where('admin_id', '!=', 0)
            ->get()
            ->groupBy('wid');
        $totalOrderChartCount = Order::whereMonth('order_date', $currentMonth)
            ->whereYear('order_date', $currentYear)
            ->whereNotNull('admin_id')
            ->where('admin_id', '!=', 0)
            ->count();
        
        
        $userByWid = [];
        $othersOrder = 0; // Initialize a variable to keep track of orders where user name is null or empty
        
        foreach ($totalOrderCount as $wid => $orders) {
            // Get the user associated with this 'wid'
            $user = User::where('id', $wid)->first();
        
            // Check if user name is not empty or null
            if (!empty($user->name)) {
                // Store user details along with the orders
                $userByWid[] = [
                    'user' => $user->name,
                    'orders' => $orders->count(),
                ];
            } else {
                // Increment othersOrder count if user name is null or empty
                $othersOrder += $orders->count();
            }
        }
        
        // Include 'Others' order count if there are any orders with null or empty user names
        if ($othersOrder > 0) {
            $userByWid[] = [
                'user' => 'Not Assign',
                'orders' => $othersOrder,
            ];
        }
        
        // Include total orders count
        $userByWid[] = [
            'user' => 'Total Orders',
            'orders' => $totalOrderChartCount,
        ];
        // echo '<pre>'; print_r($userByWid); exit;              
        // chart-2 
        // chart-3
           
            $selectedDate2 = $request->input('selectedDate', null);
            
    
            // If no date is selected, use current month and year
            if (!$selectedDate2) {
                $selectedDate2 = date('Y-m'); // Default to current year and month
            }
            
            // Extract selected month and year from the selected date
            $currentMonth2 = date('m', strtotime($selectedDate2));
            $currentYear2 = date('Y', strtotime($selectedDate2));
            
            
            $totalOrderCount2 = Order::whereMonth('order_date', $currentMonth2)
                ->whereYear('order_date', $currentYear2)
                
                ->where('uid', '!=', 0)
                ->get()
                ->groupBy('writer_name');
            $totalOrderChartCount2 = Order::whereMonth('order_date', $currentMonth2)
                ->whereYear('order_date', $currentYear2)
               
                
                ->where('uid', '!=', 0)
               
                ->count();
            
            
            $userByWid2 = [];
            $othersOrder2 = 0; // Initialize a variable to keep track of orders where user name is null or empty
            
            foreach ($totalOrderCount2 as $writer_name => $orders) {
                // Get the user associated with this 'writer_name'
                $teamMembers = Order::where('writer_name', $writer_name)->first();
               
                // Check if user name is not empty or null
                if (!empty($teamMembers->writer_name)) {
                    // Store user details along with the orders
                    $userByWid2[] = [
                        'user' => $teamMembers->writer_name,
                        'orders' => $orders->count(),
                    ];
                } else {
                    // Increment othersOrder count if user name is null or empty
                    $othersOrder2 += $orders->count();
                }
            }
            
            // Include 'Others' order count if there are any orders with null or empty user names
            if ($othersOrder2 > 0) {
                $userByWid2[] = [
                    'user' => 'Not Assign',
                    'orders' => $othersOrder2,
                ];
            }
            
            // Include total orders count
            $userByWid2[] = [
                'user' => 'Total Orders',
                'orders' => $totalOrderChartCount2,
            ];
            // echo '<pre>'; print_r($userByWid2) ; exit;
        // chart-3 
        
    

        $totalOrderCount = Order::count();
        $notAssignOrderCount = Order::Where('admin_id', '8392')->where(function ($query)
            {
            $query->whereNotNull('writer_status')
                    ->orWhere('writer_status', '!=', '');
            })
            ->count();
    
        $inprogressOrder13 = Order::where('writer_status', 'In Progress')->count();
        $completeOrder13 = Order::where('writer_status', 'Completed')->count();
        $totalwritertl = Order::where('admin_id', '8392')->count();
    
        // Writer
        // dd(auth()->user()->id);
        $writerOrder = Order::where('wid', auth()->user()->id)->count();

        $writerNotAssignOrderCount = Order::
        Where('writer_status', '')
        ->where('wid', auth()->user()->id)
        ->count();
    
    
        // Subwriter
        $subWriterOrder = Order::where('swid', auth()->user()->id)->count();
    
        // Total User Count
        $totalUserCount = User::count();
    
        // Today's Order Count
        $todayOrdersCount = Order::where('uid' , '!=' , 0)->whereDate('created_at', Carbon::today())->count();
    
        // Feedback Count
        $feedbackCount = Order::where('status_issue', 'Issue Raised')->count();
    
        // Order Count for the Current Month
        $currentMonthOrdersCount = Order::whereMonth('created_at', Carbon::now()->month)->count();
    
        // Order by status
        $otherOrder = Order::where('projectstatus', 'Other')->count();
        $cancelledOrder = Order::where('projectstatus', 'Cancelled')->count();
        $pendingOrder = Order::where('projectstatus', 'Pending')->count();
        $holdWorkOrder = Order::where('projectstatus', 'Hold Work')->count();
        $inprogressOrder = Order::where('projectstatus', 'In Progress')->count();
    
        $userData = User::where('tl_id', auth()->user()->id)->get();
        $userData2 = User::where('role_id', 6)->where('flag', 0)->get();
        $data = ['Team' => $userData, 'writer' => $userData2];
    
        if (auth()->check()) {
            switch (auth()->user()->role_id) {
                case 1:
                    return view('dashboard', compact('userByWid2','userByWid','totalOrderCount', 'totalUserCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
                case 3:
                    return view('dashboard.QcTeam');
                case 4:
                    return view('dashboard.marketingTeam', compact('totalOrderCount', 'totalUserCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
                case 5:
                    return view('dashboard.projectTeam');
                case 6:
                    return view('dashboard.writer', compact('writerOrder', 'writerNotAssignOrderCount', 'data'));
                case 7:
                    return view('dashboard.subWriter', compact('subWriterOrder'));
                case 8:
                    return view('dashboard.team13', compact('totalwritertl', 'inprogressOrder13', 'completeOrder13', 'data', 'notAssignOrderCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
                case 9:
                    return view('dashboard.marketingTeam', compact('totalOrderCount', 'totalUserCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
                default:
                    abort(403, 'Unauthorized action.');
            }
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
    
    public function write_advertisement()
    {
        // Retrieve all advertisements from the database
        $advertisements = Add::all();

        // Pass the advertisements to the view
        return view('blog-sample.advertisement', compact('advertisements'));
    }
    public function advertisement_store(Request $request)
    {
        // Create a new instance of the Add model
        $add = new Add();

        // Set the created_by field to the name of the authenticated user
        $add->created_by = auth()->user()->name;

        if ($request->hasFile('photo')) {
            $uploadedFile = $request->file('photo');

            // Generate a unique filename based on the original file name
            $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();

            // Define the destination path
            $destinationPath = public_path('assets/media/blogthumbnail');

            // Move the uploaded file to the destination path
            $uploadedFile->move($destinationPath, $fileName);

            // Update the user's photo field with the file path
            $add->Images = 'assets/media/blogthumbnail/' . $fileName;
        } else {
            // If no photo is uploaded, set a default value
            $add->Images = 'assets/media/avatars/blank.png';
        }

        // Save the advertisement
        $add->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Add submitted successfully');
    }
    public function destroyAdvertisement($id)
    {
        // Logic to delete the blog entry
        $add = Add::find($id);
        $add->delete();

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'entry deleted successfully');
    }

    public function blog()
    {
        $blogs = Blog::where('type', 'blog')->paginate(3);
        $data['title'] = 'Blog - Assignment In Need';
        $data['description'] = '';
        $data['keyword'] = '';
        return view('frontend.header.blog', compact('blogs','data'));
    }
    public function write_blog()
    {
        
        return view('blog-sample.blog');
    }
    public function blog_list()
    {
        $data = [
            'blog' => Blog::where('type', 'blog')->orderBy('created_at', 'desc')->get(),
        ];        
        return view("blog-sample.blog-list", compact('data'));
    }
    
    public function getBlogBySlug($slug)
    {
        // $data['blog'] = Blog::find($id);
       
        $data['blog'] = Blog::where('slug', $slug)->first();
        
        // Check if the blog exists
        if (!$data['blog']) {
            abort(404); // Or handle the case where the blog with the given slug is not found
        }
     
        $data['recent_post'] = Blog::where('type', 'blog')->latest()->take(3)->get();
        $data['title'] = $slug;
        $data['description'] = '';
        $data['keyword'] = '';

                
        return view("frontend.header.blog-detail", compact('data'));
    }
    
    public function blog_store(Request $request)
    {
        if ($request->input('type') === "blog") {
           // Validate the request data
            $request->validate([
                'blogTitle' => 'required',
                'blogContent' => 'required',
            ]);

            // Check if the title already exists
            $existingBlog = Blog::where('tittle', $request->input('blogTitle'))->first();
            if ($existingBlog) {
                return redirect()->back()->with('error', 'Blog with this title already exists.');
            }

            // Generate slug
            $slug = Str::slug($request->input('blogTitle'), '-');

            // Check if the slug is unique
            $existingSlugCount = Blog::where('slug', $slug)->count();
            if ($existingSlugCount > 0) {
                // If the slug already exists, append a unique identifier
                $slug .= '-' . ($existingSlugCount + 1);
            }

            $blog = new Blog;
            $blogContent = $request['blogContent'];
            $images = [];

            // Check if the blog content contains any <img> tags
            if (strpos($blogContent, '<img') !== false) {
                // Use regular expression to extract image URLs from <img> tags
                preg_match_all('/<img[^>]+src="([^">]+)"/', $blogContent, $matches);

                // Iterate through each matched image URL
                foreach ($matches[1] as $image) {
                    // Extract image URL
                    $imageUrl = $image;

                    // Generate a unique filename based on the image URL
                    $fileName = basename($imageUrl); // Extracts the filename from the URL

                    // Download image from URL
                    $imageContents = file_get_contents($imageUrl);

                    // Check if image download was successful
                    if ($imageContents !== false) {
                        // Define the destination directory where the image will be saved
                        $destinationPath = 'assets/media/blogthumbnail';

                        // Save the image to the storage disk
                        $saved = public_path('assets/media/blogthumbnail');

                        // Check if image was successfully saved
                        if ($saved) {
                            // Construct the public URL for the saved image
                            $publicUrl = public_path('assets/media/blogthumbnail');

                            // Store the public URL for later use
                            $images[] = $publicUrl;
                        } else {
                            // Handle error if image could not be saved
                            // (e.g., log the error, display a message to the user)
                        }
                    } else {
                        // Handle error if image could not be downloaded
                        // (e.g., log the error, display a message to the user)
                    }
                }
            }
            $blog->tittle = $request['blogTitle'];
            $blog->content = $blogContent;
           



            $blog->type = $request['type'];

            $blog->slug = Str::slug($request->input('blogTitle'), '-');        

            if ($request->hasFile('photo')) {
                $uploadedFile = $request->file('photo');

                // Generate a unique filename based on the original file name
                $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();

                // Define the destination path
                $destinationPath = public_path('assets/media/blogthumbnail');

                // Move the uploaded file to the destination path
                $uploadedFile->move($destinationPath, $fileName);

                // Update the user's photo field with the file path
                $blog->Images = 'assets/media/blogthumbnail/' . $fileName;
            } else {
                // If no photo is uploaded, set a default value
                $blog->Images = 'assets/media/avatars/blank.png';
            }

            // echo '<pre>'; print_r($blog); exit;

            $blog->save();
            return redirect()->back()->with('success', 'Blog submitted successfully');

            // return redirect('/blog')->with('success', 'Blog submitted successfully');
        } 
        
    }
    public function destroyBlog($id)
    {
        // Logic to delete the blog entry
        $blog = Blog::find($id);
        $blog->delete();

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Blog entry deleted successfully');
    }

    public function sample()
    {
        $samples = Blog::where('type', 'sample')->paginate(3);
        $data['title'] = 'Assignment Samples- Assignmentin Need';
        $data['description'] = 'Looking for Assignment Samples visit our website and get samples for Assignment Help in UK.';
        $data['keyword'] = '';
        return view('frontend/header/samples', compact('samples','data'));
        // return view('frontend/header/samples');
    }
    public function sample_store(Request $request)
    {
        if ($request->input('type') === "sample") {
           // Validate the request data
            $request->validate([
                'blogTitle' => 'required',
                'blogContent' => 'required',
            ]);

            // Check if the title already exists
            $existingBlog = Blog::where('tittle', $request->input('blogTitle'))->first();
            if ($existingBlog) {
                return redirect()->back()->with('error', 'Sample with this title already exists.');
            }

            // Generate slug
            $slug = Str::slug($request->input('blogTitle'), '-');

            // Check if the slug is unique
            $existingSlugCount = Blog::where('slug', $slug)->count();
            if ($existingSlugCount > 0) {
                // If the slug already exists, append a unique identifier
                $slug .= '-' . ($existingSlugCount + 1);
            }

            $blog = new Blog;
            $blogContent = $request['blogContent'];
            $images = [];

            // Check if the blog content contains any <img> tags
            if (strpos($blogContent, '<img') !== false) {
                // Use regular expression to extract image URLs from <img> tags
                preg_match_all('/<img[^>]+src="([^">]+)"/', $blogContent, $matches);

                // Iterate through each matched image URL
                foreach ($matches[1] as $image) {
                    // Extract image URL
                    $imageUrl = $image;

                    // Generate a unique filename based on the image URL
                    $fileName = basename($imageUrl); // Extracts the filename from the URL

                    // Download image from URL
                    $imageContents = file_get_contents($imageUrl);

                    // Check if image download was successful
                    if ($imageContents !== false) {
                        // Define the destination directory where the image will be saved
                        $destinationPath = 'assets/media/blogthumbnail';

                        // Save the image to the storage disk
                        $saved = public_path('assets/media/blogthumbnail');

                        // Check if image was successfully saved
                        if ($saved) {
                            // Construct the public URL for the saved image
                            $publicUrl = public_path('assets/media/blogthumbnail');

                            // Store the public URL for later use
                            $images[] = $publicUrl;
                        } else {
                            // Handle error if image could not be saved
                            // (e.g., log the error, display a message to the user)
                        }
                    } else {
                        // Handle error if image could not be downloaded
                        // (e.g., log the error, display a message to the user)
                    }
                }
            }
            $blog->tittle = $request['blogTitle'];
            $blog->content = $request['blogContent'];
            $blog->type = $request['type'];

            $blog->slug = Str::slug($request->input('blogTitle'), '-');        

            if ($request->hasFile('photo')) {
                $uploadedFile = $request->file('photo');

                // Generate a unique filename based on the original file name
                $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();

                // Define the destination path
                $destinationPath = public_path('assets/media/blogthumbnail');

                // Move the uploaded file to the destination path
                $uploadedFile->move($destinationPath, $fileName);

                // Update the user's photo field with the file path
                $blog->Images = 'assets/media/blogthumbnail/' . $fileName;
            } else {
                // If no photo is uploaded, set a default value
                $blog->Images = 'assets/media/avatars/blank.png';
            }

            // echo '<pre>'; print_r($blog); exit;

            $blog->save();
            return redirect()->back()->with('success', 'Sample submitted successfully');

            
        } 
        
    }
    public function getSampleBySlug($slug)
    {
        // $data['blog'] = Blog::find($id);
        $data['blog'] = Blog::where('slug', $slug)->first();
        // Check if the blog exists
        if (!$data['blog']) {
            abort(404); // Or handle the case where the blog with the given slug is not found
        }
     
        $data['recent_post'] = Blog::where('type', 'sample')->latest()->take(3)->get();
        $data['title'] = $slug;
        $data['description'] = '';
        $data['keyword'] = '';
        

                
        return view("frontend.header.sample-detail", compact('data'));
    }
    public function create_sample()
    {
        
        return view('blog-sample.sample');
    }
    public function sample_list()
    {
        
        $data = [
            'blog' => Blog::where('type', 'sample')->orderBy('created_at', 'desc')->get(),
        ];        
       
        return view("blog-sample.sample-list", compact('data'));
    }
    public function destroySample($id)
    {
        // Logic to delete the blog entry
        $blog = Blog::find($id);
        $blog->delete();

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Sample entry deleted successfully');
    }
}

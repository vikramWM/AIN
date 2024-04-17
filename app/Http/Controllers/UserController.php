<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Bank;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function index(Request $request)
    // {
    //     $searchUserId = $request->input('user_id');
    //     $perPage = 10;
    
    //     // Query for paginated users with flag and status not equal to 1
    //     $data['users'] = User::where('flag', '==', 0)
            
    //         ->when($searchUserId, function ($query) use ($searchUserId) {
    //             return $query->where('id', $searchUserId);
    //         })
    //         ->orderBy('id', 'desc')
    //         ->paginate($perPage);
    
    //     // Query for all users with flag and status not equal to 1
    //     $data['all_user'] = User::where('flag', '==', 0)
           
    //         ->orderBy('id', 'desc')
    //         ->get();
    
    //     $data['role'] = Role::all();
    //     $data['bank'] = Bank::all();
    
    //     return view('user.user_view', compact('data'));
    // }
    public function index(Request $request)
{
    $searchUserId = $request->input('user_id');
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $roleId = $request->input('role');
    $perPage = 10;

    // Query for paginated users with flag and status not equal to 1
    $query = User::where('flag', 0);

    if ($searchUserId) {
        $query->where('id', $searchUserId);
    }

    if ($startDate && !$endDate) {
        $query->whereDate('created_at', $startDate);
    }

    if ($startDate && $endDate) {
        $query->whereBetween('created_at', [$startDate, $endDate]);
    }

    if ($roleId) {
        $query->where('role_id', $roleId);
    }

    $data['users'] = $query->orderBy('id', 'desc')->paginate($perPage);

    // Query for all users with flag and status not equal to 1
    $data['all_user'] = User::where('flag', 0)->orderBy('id', 'desc')->get();
    $data['role'] = Role::all();
    $data['bank'] = Bank::all();

    return view('user.user_view', compact('data'));
}


    public function EditUser(Request $request ,$id)
    {
        try {
            $user = User::findOrFail($id);
    
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->countrycode = $request->input('countrycode');
            $user->mobile_no = $request->input('phone');
            $user->countrycode2 = $request->input('countrycode2');
            $user->mobile_no2 = $request->input('phone2');
            $user->role_id = $request->input('role');
            $user->bank_id = $request->input('bank');
            $user->address = $request->input('address');
            $user->call_id = $request->input('call_id');
    
            if ($request->hasFile('photo')) {
                $uploadedFile = $request->file('photo');
    
                $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
                $destinationPath = public_path('assets/media/avatars');
                $uploadedFile->move($destinationPath, $fileName);
                $user->photo = 'assets/media/avatars/' . $fileName;
            } else {
                $user->photo = 'assets/media/avatars/blank.png';
            }
            // dd($user);
            // Check if the provided old password is correct
            
            $user->sip = $request->input('sip');
            $user->save();
    
            return redirect()->back()->with('success', 'Profile Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    public function new_user()
    {
        $data['role'] = Role::all();
      
        return view('user.add_user', compact( 'data'));
    }


    public function insert_new_user(Request $request)
    {
        // Validate input data, including a unique rule for email
      
        $existingUser = User::where('email', $request->input('email'))
        
            ->first();

        if ($existingUser) {
            // User already exists, show an alert or handle accordingly
            return redirect()->back()->with('error', 'User with the same email or phone number already exists.');
        }

        // Continue with user creation
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->countrycode = $request->input('country_code');
        $user->mobile_no = $request->input('primary_mobile');
        $user->countrycode2 = $request->input('country_code2');
        $user->mobile_no2 =  $request->input('secondary_mobile');
        $user->role_id = $request->input('role');
        $user->address = $request->input('address');
        $user->password = Hash::make('user@123');

        if ($request->hasFile('photo')) {
            // Handle file upload
            $uploadedFile = $request->file('photo');
            $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
            $destinationPath = public_path('assets/media/avatars');
            $uploadedFile->move($destinationPath, $fileName);
            $user->photo = 'assets/media/avatars/' . $fileName;
        } else {
            $user->photo = 'assets/media/avatars/blank.png';
        }

        $user->save();

        return redirect('/user')->with('success', 'User created successfully. Users Login Password Is "user@123"');
    }
    
      public function followupuser(Request $request, $id)
    {
        $user = User::find($id);
        $followup = $request->input('followup'); // Get the follow-up value from the request
    
        // Toggle follow-up status
        $user->followup = $followup ? 1 : 0;
        $user->save();
    
        // Prepare response message
        $message = $followup ? 'User marked for follow-up' : 'User no longer marked for follow-up';
    
        return response()->json(['message' => $message]);
    }

   


}

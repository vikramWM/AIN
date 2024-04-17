<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ExportController extends Controller
{
    public function export(Request $request)
    {
        // Retrieve filter parameters from the request
        $searchTerm = $request->input('search');
        $uid = $request->input('uid');
        $status = $request->input('status');
        $writer = $request->input('writer');
        $dateStatus = $request->input('date_status');
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $WriterTL = $request->input('WriterTL');
        $SubWriter = $request->input('SubWriter');
        $college = $request->input('college');
        $extra = $request->input('extra');
        $secondaryMobile = $request->input('secondary_mobile');
        $selectedDataTextBox = $request->input('selectedDataTextBox');

        // Query orders based on the filter parameters
        $orders = Order::with('user')
            ->where('uid', '!=', 0);

        // Apply filter conditions
        if ($searchTerm) {
            $orders->where(function ($query) use ($searchTerm) {
                $query->where('order_id', 'like', '%' . $searchTerm . '%')
                    ->orWhere('title', 'like', '%' . $searchTerm . '%');
            });
        }

        if ($selectedDataTextBox) {
            $orders->where('order_id', $selectedDataTextBox);
        }

        if ($uid) {
            $orders->where('uid', $uid);
        }

        if ($secondaryMobile) {
            $orders->where('module_code', 'like', '%' . $secondaryMobile . '%');
        }

        if ($status) {
            $orders->where('projectstatus', $status);
        }

        if ($writer) {
            if ($writer == 'team 13') {
                $orders->where('admin_id', 8392);
            } else {
                $orders->where('writer_name', 'like', $writer);
            }
        }

        if ($dateStatus || $fromDate || $toDate) {
            if ($fromDate && $toDate && $dateStatus) {
                $orders->whereBetween($dateStatus, [$fromDate, $toDate]);
            } elseif ($fromDate && $toDate) {
                $orders->whereBetween('order_date', [$fromDate, $toDate]);
            } elseif ($fromDate) {
                $orders->where('order_date', $fromDate);
            } elseif ($dateStatus) {
                $orders->whereDate($dateStatus, Carbon::today());
            }
        }

        if ($WriterTL) {
            $orders->where('wid', $WriterTL);
        }

        if ($SubWriter) {
            $orders->where('swid', $SubWriter);
        }

        if ($college) {
            $orders->where('college_name', $college);
        }

        if ($extra) {
            if ($extra == 'tech') {
                $orders->where('tech', '1');
            } elseif ($extra == 'resit') {
                $orders->where('resit', 'on');
            } elseif ($extra == 'failedjob') {
                $orders->where('is_fail', '1');
            } elseif ($extra == '1') {
                $orders->where('services', 'First Class Work');
            }
        }

        // Get filtered orders
        $filteredOrders = $orders->orderBy('id', 'desc')->get();

        // Prepare CSV file content
        $csvData = 'Order Code,User Name,User Email,Mobile,Order Date,Pages,Title,Delivery Date,Delivery Time,Amount,Writer Name,Writer Deadline,Chapter,Draft Date,Draft Time' . PHP_EOL;
        foreach ($filteredOrders as $order) {
            // Access user's name and email from the user relationship
            $userName = '"' . ($order->user->name ?? '') . '"';
            $userEmail = '"' . ($order->user->email ?? '') . '"';
            $userMobile = '"' . ($order->user->mobile_no ?? '') . '"';
            // Enclose fields in double quotes to treat commas as a single block in Excel
            $order_id = '"' . $order->order_id . '"';
            $orderDate = '"' . $order->order_date . '"';
            $pages = '"' . $order->pages . '"';
            $title = '"' . $order->title . '"';
            $deliveryDate = '"' . $order->delivery_date . '"';
            $deliveryTime = '"' . $order->delivery_time . '"';
            $amount = '"' . $order->amount . '"';
            $writerName = '"' . $order->writer_name . '"';
            $writerDeadline = '"' . $order->writer_deadline . '"';
            $chapter = '"' . $order->chapter . '"';
            $draftDate = '"' . $order->draft_date . '"';
            $draftTime = '"' . $order->draft_time . '"';
        
            $csvData .= $order_id . ',' . $userName . ',' . $userEmail . ',' . $userMobile . ',' . $orderDate . ',' . $pages . ',' . $title . ','  . $deliveryDate . ',' . $deliveryTime . ',' . $amount . ',' . $writerName . ',' . $writerDeadline . ',' . $chapter . ',' . $draftDate . ',' . $draftTime .  PHP_EOL;
        }

        // Generate file name with current timestamp
        $filename = 'Orders_' . now()->format('YmdHis') . '.csv';

        // Save CSV content to storage
        Storage::disk('local')->put($filename, $csvData);

        // Download the CSV file
        return Response::download(storage_path('app/' . $filename), $filename, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    public function exportLeads(Request $request)
    {
        // Retrieve filter parameters from the request
        $searchTerm = $request->input('additional_filter1');
        $userDetail = $request->input('additional_filter2');
        $status = $request->input('additional_filter4');
        $techn = $request->input('additional_filter5');
        $fromDate = $request->input('additional_filter3');
        $uptoDate = $request->input('additional_filter6');
        $dateStatus = $request->input('additional_filter7');
    
        // Start query to retrieve leads
        $leadsQuery = Leads::with('user')->where('status', 0);
    
        // Apply filters if provided
        if ($searchTerm) {
            $leadsQuery->where(function ($query) use ($searchTerm) {
                $query->where('order_id', 'like', '%' . $searchTerm . '%')
                    ->orWhere('project_title', 'like', '%' . $searchTerm . '%');
            });
        }
    
        if ($userDetail) {
            $leadsQuery->where('emp_id', $userDetail);
        }
    
        if ($status) {
            $leadsQuery->where('l_status', $status);
        }
    
        if ($techn) {
            if ($techn == 'Technical') {
                $leadsQuery->where('tech', 'on');
            } elseif ($techn == 'Resit') {
                $leadsQuery->where('resit', 'on');
            } elseif ($techn == 'First') {
                $leadsQuery->where('service_type', 'First Class Work');
            }
        }
    
        if ($fromDate) {
            if ($uptoDate) {
                $leadsQuery->whereBetween('created_at', [$fromDate, $uptoDate]);
            } else {
                $leadsQuery->whereDate('created_at', $fromDate);
            }
        } elseif ($dateStatus) {
            if ($uptoDate) {
                $leadsQuery->whereBetween('deadline', [$fromDate, $uptoDate]);
            } else {
                $leadsQuery->whereDate('deadline', $dateStatus);
            }
        }
    
        // Fetch the leads
        $leads = $leadsQuery->orderByDesc('id');
    
        // Check if filters are provided
        $filtersProvided = $searchTerm || $userDetail || $status || $techn || $fromDate || $uptoDate || $dateStatus;

        // Fetch leads based on whether filters are provided or not
        $leads = $filtersProvided ? $leadsQuery->get() : Leads::where('status', 0)->orderByDesc('id')->get();

        // Prepare CSV file content with headers
        
        $csvData = 'Order Code,User Name,User Email,Mobile,Order Date,Pages,Title,Delivery Date,Delivery Time,Draft Date,Draft Time' . PHP_EOL;
    
        // Generate CSV data
        
        foreach ($leads as $lead) {
            // Access user's name and email from the user relationship
            $userName = '"' . ($lead->user->name ?? '') . '"';
            $userEmail = '"' . ($lead->user->email ?? '') . '"';
            $userMobile = '"' . ($lead->user->mobile_no ?? '') . '"';
            // Enclose fields in double quotes to treat commas as a single block in Excel
            $order_id = '"' . $lead->order_id . '"';
            $title = '"' . $lead->project_title . '"';
            $pages = '"' . $lead->pages . '"';
            $amount = '"' . $lead->price . '"';
            $deliveryDate = '"' . $lead->deadline . '"';
            $deliveryTime = '"' . $lead->delivery_time . '"';
            $orderDate = '"' . $lead->create_at . '"';
            $draftDate = '"' . $lead->draft_date . '"';
            $draftTime = '"' . $lead->draft_time . '"';
        
            $csvData .= $order_id . ',' . $userName . ',' . $userEmail . ',' . $userMobile . ',' . $orderDate . ',' . $pages . ',' . $title . ','  . $deliveryDate . ',' . $deliveryTime . ',' . $draftDate . ',' . $draftTime .  PHP_EOL;
        }
    
        // Generate file name
        $filename = 'leads_' . now()->format('YmdHis') . '.csv';
    
        // Save CSV content to storage
        Storage::disk('local')->put($filename, $csvData);
    
        // Return the file path to the AJAX request
        return response()->download(storage_path('app/' . $filename), $filename, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
    




}

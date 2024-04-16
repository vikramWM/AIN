<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
            $userName = $order->user->name ?? '';
            $userEmail = $order->user->email ?? '';
            $userMobile = $order->user->mobile_no ?? '';
            // Enclose title in double quotes to treat commas as a single block in Excel
            $title = '"' . $order->title . '"';
            $csvData .= $order->order_id . ',' . $userName . ',' . $userEmail . ',' . $userMobile . ',' . $order->order_date . ',' . $order->pages . ',' . $title . ','  . $order->delivery_date . ',' . $order->delivery_time . ',' . $order->amount . ',' . $order->writer_name . ',' . $order->writer_deadline . ',' . $order->chapter . ',' . $order->draft_date . ',' . $order->draft_time .  PHP_EOL;
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
}

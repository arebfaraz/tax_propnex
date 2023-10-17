<?php

namespace App\Http\Controllers;

use App\Imports\BulkImport;
use App\Models\Agent;
use App\Models\CommissionDistribution;
use App\Models\Invoice;
use App\Models\Project;
use App\Models\ProjectDetails;
use App\Models\PropertyDetails;
use App\Models\PurchaserDetail;
use App\Models\Registration;
use Illuminate\Http\Request;
use Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function transactions()
    {
        $projects = Project::all();
        return view('newtransaction')->with('projects', $projects);
    }
    public function registration($id)
    {
        $data = ProjectDetails::find($id);
        $projectid = $data->project_id;
        $project = Project::where('id', $projectid)->first();

        return view('registration', compact(['data', 'project']));
    }
    public function search(Request $request)

    {
        $data = ProjectDetails::where('project_id', $request->project_id)->get();
        $data1 = '';
        if (count($data) > 0) {
            foreach ($data as $qa) {
                $data1 .= '             <tr>
                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                <div>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                    ' . $qa->id . ' </p>
                                                </div>
                                            </td>
                                            <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">' . $qa->closing_agent . '</td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">' . $qa->block_no . '</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">' . $qa->unit_no . '</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">' . $qa->postal_code . '</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">' . $qa->type . '</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">' . $qa->size . '</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">' . $qa->bed_room . '</p>
                                                </div>
                                            </td>
    
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">' . $qa->car_parking . '</p>
                                                </div>
                                            </td>
    
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">' . $qa->remark . '</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <a href="/registration/' . $qa->id . '" class="text-red-500 dark:text-gray-400">Submit</a>
                                                </div>
                                            </td>
    
                                        </tr>
                                ';
            }
        } else {
            $data1 = '
            <tr>
            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                <div>
                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                    </p>
                </div>
            </td>
            <td class="px-12 py-4 text-sm font-medium whitespace-nowrap"></td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <p class="text-gray-500 dark:text-gray-400">NO DATA FOUNT</p>
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                </div>
            </td>

            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                </div>
            </td>

            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <p class="text-gray-500 dark:text-gray-400"></p>
                </div>
            </td>
            <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div>
                    <a class="text-red-500 dark:text-gray-400"></a>
                </div>
            </td>

        </tr>                     ';
        }
        return response($data1);
    }
    public function store(Request $request)
    {
        // return $request;
        $ivRandomNumber = rand(100000000, 999999999);
        $newivRandomNumber = "IV" . $ivRandomNumber;
        $pxRandomNumber = rand(100000000, 999999999);
        $newpxRandomNumber = "PX" . $pxRandomNumber;

        $data = new Registration;
        $data->spa_no = $request->spa_no;
        $data->spa_date = $request->spa_date;
        $data->project_name = $request->project_name;
        $data->block_no = $request->block_no;
        $data->transaction_no = $newpxRandomNumber;
        $data->unit_no = $request->unit_no;
        $data->category = $request->category;
        $data->property_type = $request->property_type;
        $data->model = $request->model;
        $data->unit_code = $request->unit_code;
        $data->bedroom = $request->bedroom;
        $data->size = $request->size;
        $data->gender = $request->gender;
        $data->marital = $request->marital;
        $data->age = $request->age;
        $data->status = $request->status;
        $data->property = $request->property;
        $data->email = $request->email;
        $data->transaction_price = $request->transaction_price;
        $data->discount = $request->discount;
        $data->nett_transacted_price = $request->nett_transacted_price;
        $data->percentage = $request->gross_percentage;
        $data->amount = $request->amount;
        $data->gross_percentage = $request->gross_percentage;
        $data->gross_amount = $request->gross_amount;
        $data->vat = $request->vat;
        $data->paying_vat = $request->paying_vat;
        $data->net_commission = $request->net_commission;
        $data->vat_amount = $request->vat_amount;
        $data->total_amount = $request->total_amount;
        $data->save();


        $pxcRandomNumber = rand(100000000, 999999999);
        $newpxcRandomNumber = "PXC" . $pxcRandomNumber;

        $invoice = new Invoice;
        $invoice->transaction_no = $newpxRandomNumber;
        $invoice->registration_id = $data->id;
        $invoice->invoice_no = $newivRandomNumber;
        $invoice->status = $request->status;
        $invoice->pxc_id = $newpxcRandomNumber;
        $invoice->associate_passport_no = $request->id_passport_no1;
        $invoice->associate_name = $request->agent_name1;
        $invoice->invoice_date = $request->spa_date;
        // $invoice->tax_code = $request->total_amount;
        $invoice->transaction_due_amount = $request->total_amount;
        $invoice->total_invoiced_due_amount = $request->total_amount;
        $invoice->current_due_amount = $request->total_amount;
        // $invoice->vat = $request->vat;
        $invoice->vat_amount = $request->vat_amount;
        $invoice->invoice_amount = $request->total_amount;
        $invoice->client_name_1 = $request->project_name;
        // $invoice->client_name_2 = ;
        // $invoice->client_name_3 = $request->total_amount;
        // $invoice->client_name_4 = $request->total_amount;
        $invoice->billing_address = $request->address1;
        // $invoice->remarks = $request->total_amount;
        // $invoice->reason = $request->total_amount;

        $invoice->save();




        for ($i = 1; $i < 1000; $i++) {
            if ($request['purchaser_name' . $i]) {
                $purchaser = new PurchaserDetail;
                $purchaser->registration_id = $data->id;
                $purchaser->type = $request['type' . $i];
                $purchaser->company_name = $request['company_name' . $i];
                $purchaser->roc_no = $request['roc_no' . $i];
                $purchaser->name = $request['purchaser_name' . $i];
                $purchaser->dob = $request['dob' . $i];
                $purchaser->nationality = $request['nationality' . $i];
                $purchaser->contact_no = $request['contact_no' . $i];
                $purchaser->current_residential_type = $request['current_residential_type' . $i];
                $purchaser->address = $request['address' . $i];
                $purchaser->payment_scheme = $request['payment_scheme' . $i];
                $purchaser->buyer_type = $request['buyer_type' . $i];
                $purchaser->vattin = $request['vattin' . $i];
                $purchaser->save();
            } else {
                break;
            }
        }

        for ($i = 1; $i < 1000; $i++) {
            if ($request['agent_name' . $i]) {
                $commission = new CommissionDistribution;
                $commission->registration_id = $data->id;
                $commission->agent_type = $request['agent_type' . $i];
                $commission->id_passport_no = $request['id_passport_no' . $i];
                $commission->company     = $request['company' . $i];
                $commission->name = $request['agent_name' . $i];
                $commission->phone     = $request['agent_phone' . $i];
                $commission->share = $request['commission_percentage' . $i];
                $commission->gross_commission = $request['gross_commission' . $i];
                $commission->total_amount = $request['commission_total_amount' . $i];
                $commission->save();
            } else {
                break;
            }
        }



        return back()->with('ehdefkDHFASDJHFVAMJH');
    }
    public function invoices(Request $request)
    {
        return view('invoices');
    }
    public function invoice_update(Request $request, $id)
    {
        $invoice = Invoice::find($id);

        return view('invoice_update', compact('invoice'));
    }
    public function print(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        return view('proforma_invoice_print', compact('invoice'));
    }

    public function agent_search(Request $request)
    {

        $agents = Agent::all();

        if ($request->search_value) {
            $agents = Agent::where($request->search_by, 'LIKE', "%{$request->search_value}%")->get();
        }
        return response()->json($agents);
    }

    public function agentid(Request $request)
    {
        $agent = Agent::find($request->agent_id);
        return response()->json($agent);
    }
    public function transaction_search(Request $request)
    {
        $invoice = '';
        if ($request->search_value) {
            $invoice = Invoice::where('transaction_no', 'LIKE', "%{$request->search_value}%")->get();
        }
        return response()->json($invoice);
    }

    public function import_bulk() {
        return view('bulk_import');
    }

    public function store_bulk(Request $request) {
        Excel::import(new BulkImport, $request->file('file'));
        return redirect('/agents');
    }
}

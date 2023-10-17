<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="bg-primary">
    <!-- header -->
    @include('inc.header')
    <!-- header -->



    <div class="text-white py-5 px-8">
        @csrf
        <h1 class="text-4xl">Proforma Invoices</h1>
        <h1 class="text-base mt-8"></h1>
        <div class="bg-black/10 mt-2 py-6 px-3">

            <div class="grid grid-flow-row grid-cols-4 gap-7">
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Transaction No.</span>
                    <input name="" value="{{ $invoice->transaction_no }}" disabled
                        class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Invoice No.</span>
                    <input name="" value="{{ $invoice->invoice_no }}" disabled
                        class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Status.</span>
                    <input name="" value="{{ $invoice->status }}" disabled
                        class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
            </div>
            <div class="grid grid-flow-row grid-cols-4 gap-7 mt-5">
                <div class="flex flex-col">
                    <span class="px-1 text-sm">PXC ID</span>
                    <input name="" value="{{ $invoice->pxc_id }}" disabled
                        class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Associate ID / Passport No.</span>
                    <input name="" value="{{ $invoice->associate_passport_no }}" disabled
                        class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Associate Name</span>
                    <input name="" value="{{ $invoice->associate_name }}" disabled
                        class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
            </div>
            <div class="grid grid-flow-row grid-cols-4 gap-7 mt-5">
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Invoice Date</span>
                    <input name="" value="{{ $invoice->invoice_date }}"
                        class="text-black rounded px-2 bg-gray-300 mt-1" type="date">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Tax Code</span>
                    <input name="" value="{{ $invoice->tax_code }}"
                        class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Transaction Due Amount</span>
                    <input name="" value="{{ $invoice->transaction_due_amount }}" disabled
                        class="text-black rounded px-2 bg-gray-300 mt-1 text-right" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Total Invoiced Due Amount</span>
                    <input name="" value="{{ $invoice->total_invoiced_due_amount }}" disabled
                        class="text-black rounded bg-gray-300 text-right px-2" type="text">
                </div>
            </div>
            <div class="grid grid-flow-row grid-cols-4 gap-7 mt-5">
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Current Due Amount</span>
                    <input name="" value="{{ $invoice->current_due_amount }}"
                        class="text-black rounded px-2 bg-gray-300 mt-1 text-right" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">VAT (%)</span>
                    <input name="" disabled class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">VAT Amount</span>
                    <input name="" disabled class="text-black rounded px-2 bg-gray-300 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Invoice Amount</span>
                    <input name="" value="{{ $invoice->invoice_amount }}" disabled
                        class="text-black rounded bg-gray-300 px-2 text-right" type="text">
                </div>
            </div>
            <div class="grid grid-flow-row grid-cols-4 gap-7 mt-5">
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Client Name 1 (Default)</span>
                    <input name="" value="{{ $invoice->client_name_1 }}" class="text-black rounded px-2  mt-1"
                        type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Client Name 2</span>
                    <input name="" class="text-black rounded px-2  mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Client Name 3</span>
                    <input name="" class="text-black rounded px-2  mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm">Client Name 4</span>
                    <input name="" class="text-black rounded px-2" type="text">
                </div>
            </div>
            <div class="grid grid-flow-row grid-cols-4 gap-7 mt-5">
                <div class="flex flex-col">
                    <span class="px-1 text-sm">BIlling Address</span>
                    <input name="" value="{{ $invoice->billing_address }}"
                        class="text-black rounded px-2 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm text-blue-600">.</span>
                    <input name="" value="{{ $invoice->billing_address }}"
                        class="text-black rounded px-2 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm text-blue-600">.</span>
                    <input name="" class="text-black rounded px-2 mt-1" type="text">
                </div>
                <div class="flex flex-col">
                    <span class="px-1 text-sm text-blue-600">.</span>
                    <input name="" class="text-black rounded px-2" type="text">
                </div>
            </div>
            <div class="mt-2">
                <div class="flex flex-col w-2/3">
                    <span class="px-1 text-sm">Remarks</span>
                    <textarea class="text-black mt-2 rounded px-2 " name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="mt-2">
                <div class="flex flex-col w-2/3">
                    <span class="px-1 text-sm">Reason</span>
                    <textarea class="text-black mt-2 rounded px-2 " name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="mt-8 flex">
                <button class="bg-blue-600 text-white py-2 px-5 flex rounded">New
                    <svg fill="#fff" class="w-6 ml-2" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Z">
                        </path>
                        <path
                            d="M128.5,74a9.67,9.67,0,0,0-14,0L100,88.5l-14-14a9.9,9.9,0,0,0-14,14l14,14-14,14a9.9,9.9,0,0,0,14,14l14-14,14,14a9.9,9.9,0,0,0,14-14l-14-14,14-14A10.77,10.77,0,0,0,128.5,74Z">
                        </path>
                    </svg>
                </button>
                <button class="bg-red-600 text-white py-2 px-5 rounded ml-2">Voil Bill</button>
                <button class="bg-blue-600 text-white py-2 px-5 rounded ml-2 flex">Save
                    <svg viewBox="0 0 24 24" class="w-6 ml-2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 20.75H7C6.27065 20.75 5.57118 20.4603 5.05546 19.9445C4.53973 19.4288 4.25 18.7293 4.25 18V6C4.25 5.27065 4.53973 4.57118 5.05546 4.05546C5.57118 3.53973 6.27065 3.25 7 3.25H14.5C14.6988 3.25018 14.8895 3.32931 15.03 3.47L19.53 8C19.6707 8.14052 19.7498 8.33115 19.75 8.53V18C19.75 18.7293 19.4603 19.4288 18.9445 19.9445C18.4288 20.4603 17.7293 20.75 17 20.75ZM7 4.75C6.66848 4.75 6.35054 4.8817 6.11612 5.11612C5.8817 5.35054 5.75 5.66848 5.75 6V18C5.75 18.3315 5.8817 18.6495 6.11612 18.8839C6.35054 19.1183 6.66848 19.25 7 19.25H17C17.3315 19.25 17.6495 19.1183 17.8839 18.8839C18.1183 18.6495 18.25 18.3315 18.25 18V8.81L14.19 4.75H7Z"
                            fill="#fff"></path>
                        <path
                            d="M16.75 20H15.25V13.75H8.75V20H7.25V13.5C7.25 13.1685 7.3817 12.8505 7.61612 12.6161C7.85054 12.3817 8.16848 12.25 8.5 12.25H15.5C15.8315 12.25 16.1495 12.3817 16.3839 12.6161C16.6183 12.8505 16.75 13.1685 16.75 13.5V20Z"
                            fill="#fff"></path>
                        <path
                            d="M12.47 8.75H8.53001C8.3606 8.74869 8.19311 8.71403 8.0371 8.64799C7.88109 8.58195 7.73962 8.48582 7.62076 8.36511C7.5019 8.24439 7.40798 8.10144 7.34437 7.94443C7.28075 7.78741 7.24869 7.61941 7.25001 7.45V4H8.75001V7.25H12.25V4H13.75V7.45C13.7513 7.61941 13.7193 7.78741 13.6557 7.94443C13.592 8.10144 13.4981 8.24439 13.3793 8.36511C13.2604 8.48582 13.1189 8.58195 12.9629 8.64799C12.8069 8.71403 12.6394 8.74869 12.47 8.75Z"
                            fill="#fff"></path>
                    </svg>
                </button>
                <a href="/proforma_invoice_print/{{ $invoice->id }}"
                    class="bg-blue-600 text-white py-2 px-5 rounded ml-2 flex">Print
                    Proforma Invoice
                    <svg fill="#fff" class="w-6 ml-2" viewBox="0 0 32 32" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.656 6.938l-0.344 2.688h11.781l-0.344-2.688c0-0.813-0.656-1.438-1.469-1.438h-8.188c-0.813 0-1.438 0.625-1.438 1.438zM1.438 11.094h19.531c0.813 0 1.438 0.625 1.438 1.438v8.563c0 0.813-0.625 1.438-1.438 1.438h-2.656v3.969h-14.219v-3.969h-2.656c-0.813 0-1.438-0.625-1.438-1.438v-8.563c0-0.813 0.625-1.438 1.438-1.438zM16.875 25.063v-9.281h-11.344v9.281h11.344zM15.188 18.469h-8.125c-0.188 0-0.344-0.188-0.344-0.375v-0.438c0-0.188 0.156-0.344 0.344-0.344h8.125c0.188 0 0.375 0.156 0.375 0.344v0.438c0 0.188-0.188 0.375-0.375 0.375zM15.188 21.063h-8.125c-0.188 0-0.344-0.188-0.344-0.375v-0.438c0-0.188 0.156-0.344 0.344-0.344h8.125c0.188 0 0.375 0.156 0.375 0.344v0.438c0 0.188-0.188 0.375-0.375 0.375zM15.188 23.656h-8.125c-0.188 0-0.344-0.188-0.344-0.375v-0.438c0-0.188 0.156-0.344 0.344-0.344h8.125c0.188 0 0.375 0.156 0.375 0.344v0.438c0 0.188-0.188 0.375-0.375 0.375z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="h-10"></div>


    <div class="bg-white fixed bottom-0 flex justify-between items-center px-10 left-0 w-full">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            <svg fill="#000000" class="w-10 h-10" viewBox="-5.5 0 32 32" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.344 7.375c3.688 1.563 6.281 5.219 6.281 9.5 0 5.656-4.625 10.313-10.313 10.313-5.656 0-10.313-4.656-10.313-10.313 0-4.281 2.594-7.938 6.313-9.5v3.469c-1.938 1.313-3.25 3.5-3.25 6.031 0 4 3.25 7.25 7.25 7.25s7.25-3.25 7.25-7.25c0-2.531-1.281-4.719-3.219-6.031v-3.469zM12.031 16.813v-12.031h-3.438v12.031h3.438z">
                </path>
            </svg>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        <h1>
            E.A.M.S HTTP1 © 2015 (ID- 0-1)</h1>
    </div>







</body>

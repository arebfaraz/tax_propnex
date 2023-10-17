<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>
    <div class="bg-white border border-gray-200 container print:w-full w-[800px] h-full mx-auto mt-10">
        <div class="flex justify-center items-center my-5 ">
            <img src="/images/logokh.png" alt="logo" class="w-20">
            <div class="text-center">
                <h1 class="">ព្របណិក៍ (ខេមបូឌា) ឯ.ក</h1>
                <h1 class="">PROPNEX (CAMBODIA) CO., LTD</h1>
            </div>
        </div>
        <div class="text-center text-xs">
            <h1 class="">អាស័យដ្ឋាន៖ #១១៥៩, ផ្លូវជាតិលេខ ២, ភូមិ ព្រែកតានូ សង្កាត់​ ចាក់អង្រែលើ, ខ័ណ្ឌមានជ័យ,
                រាជធានីភ្នំពេញ, កម្ពុជា​</h1>
            <h1 class="">Address: #1159, National Road No 2, Prek Ta Nu, Chak Angrae Leu, Mean Chey, Phnom Penh,
                Cambodia</h1>
            <h1 class="mt-2">ទូរស័ព្ទលេខ/Telephone No: +855 92313278</h1>
        </div>
        <div class="border-t border-gray-600 mx-10 my-4"></div>
        <div class="w-full text-center">
            <h1 class="">វិក្កយបត្រ</h1>
            <h1 class="">PROFORMA INVOICE</h1>
        </div>
        <div class="mx-10 mt-3 flex justify-between">
            <div class="">
                <h1 style="font-size: 13px" class="font-bold">អតិថិជន/Customer:</h1>
                <h1 style="font-size: 13px" class="">{{ $invoice->client_name_1 }}</h1>
                <h1 style="font-size: 13px" class="mt-2 font-bold">Company:</h1>
                <h1 style="font-size: 13px" class="font-bold">{{ $invoice->associate_name }}</h1>
                <h1 style="font-size: 13px" class="mt-1">ទូរស័ព្ទលេខ/Telephone:</h1>
            </div>
            <div class="border border-black h-20 p-1">
                <div class=" flex items-center justify-between">
                    <div class="mr-2">
                        <p class="" style="font-size: 13px">លេខវិក័យប័ត្រ</p>
                        <p class="" style="font-size: 10px">(Invoice No).</p>
                    </div>
                    <p class="text-sm">{{ @$invoice->invoice_no }}</p>
                </div>

                <div class=" flex items-center justify-between">
                    <div class="mr-2">
                        <p class="" style="font-size: 13px">កាលបរិច្ឆេទ</p>
                        <p class="" style="font-size: 10px">(Date):</p>
                    </div>
                    <p class="text-sm">{{ @$invoice->invoice_date }}</p>
                </div>

            </div>
        </div>
        <div class="mx-10 mt-3 flex justify-between">
            <div class="">
                <h1 style="font-size: 13px" class="font-bold">អាស័យដ្ឋាន:</h1>
                <h1 style="font-size: 13px" class="">Address:</h1>
            </div>
            <div class="border border-black h-8 w-48 p-1">
                <h1 style="font-size: 13px" class="font-bold">Due date :</h1>
            </div>
        </div>
        <div class="mx-10 mt-3">
            <h1 style="font-size: 13px" class="">{{ @$invoice->billing_address }}</h1>
            <h1 style="font-size: 13px" class="">{{ @$invoice->billing_address }}</h1>
        </div>


        <!-- component -->
        <table class="border-collapse mx-10 mt-9">
            <thead>
                <tr>
                    <th style="font-size: 13px"
                        class="p-1 font-bold uppercase text-gray-600 border border-gray-300  lg:table-cell">
                        ល. រ</th>
                    <th style="font-size: 13px"
                        class="py-1 px-16 font-bold uppercase text-gray-600 border border-gray-300  lg:table-cell">
                        បរិយាយមុខទំនិញ</th>
                    <th style="font-size: 13px"
                        class="py-1 px-6 font-bold uppercase text-gray-600 border border-gray-300  lg:table-cell">
                        ថ្លៃឯកតា</th>
                    <th style="font-size: 13px"
                        class="py-1 px-5 font-bold uppercase text-gray-600 border border-gray-300  lg:table-cell">
                        កំរៃជើងសារ</th>
                    <th style="font-size: 13px"
                        class="py-1 px-6 font-bold uppercase text-gray-600 border border-gray-300  lg:table-cell">
                        តម្លៃសរុប</th>
                </tr>
            </thead>
            <tbody>
                <tr style="font-size: 12px" class="bg-white  table-row  flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b table-cell relative ">
                        N.o*
                    </td>
                    <td class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center table-cell static">
                        Description
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        Unit Price (USD)
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        Percentage %
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        USD Amount
                    </td>
                </tr>
                <tr style="font-size: 12px" class="bg-white  table-row  flex-no-wrap mb-10 lg:mb-0">
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b lg:table-cell relative lg:static">
                        1
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        {{ @$invoice->registration->unit_code }} 09/066 {{ @$invoice->associate_name }} SINGAPORE 012000
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        {{ @$invoice->registration->total_amount }}
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        {{ @$invoice->registration->percentage }}
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        {{ @$invoice->invoice_amount }}
                    </td>
                </tr>
                <tr style="font-size: 12px" class="bg-white  table-row  flex-no-wrap mb-10 lg:mb-0">
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-r-transparent text-center  lg:table-cell relative lg:static">
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-r-transparent text-center lg:table-cell relative lg:static">

                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-r-transparent border-b text-center lg:table-cell relative lg:static">

                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        Grand Total
                    </td>
                    <td
                        class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center lg:table-cell relative lg:static">
                        {{ $invoice->invoice_amount }}
                    </td>
                </tr>
            </tbody>
        </table>


        <div class="mt-5 mx-10 ">
            <h1 style="font-size: 13px" class="underline">
                PLEASE MAKE PAYMENT EITHER:</h1>
            <p style="font-size: 13px" class="">
                By cheque to ........................................ and state the transaction number on the back of
                the cheque.</p>
            <p style="font-size: 13px" class="">
                By internet banking to:</p>
        </div>
        <div class="mt-10 mx-10">
            <p style="font-size: 11px" class="">
                Please indicate the transaction number in the telegraphic transfer and note that the admin charges will
                be borne by the payer.</p>
            <ul style="font-size: 11px" class=" ml-3 list-decimal">
                <li>Please note that you should avoid paying in cash, cheque, bank transfer or any other mode of payment
                    directly to the salesperson.</li>
                <li>The company will not be liable for any payment made to the salesperson or any other persons.</li>
                <li>Upon receiving payment, the company will send you an official receipt. Any other non-official
                    receipt issued by the salesperson.</li>
                <li>The company reserves the right to demand for all outstanding payment to be paid immediately.</li>
            </ul>
        </div>
        <div class="mt-10 ml-20">
            <p style="font-size: 13px" class="">
                Issued by: PropNex Cambodia</p>
            <p style="font-size: 13px" class="mt-16 border-t border-black w-32">Signature & Stamp</p>
        </div>
        <div class="h-20"></div>
    </div>

</body>

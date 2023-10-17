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



    <form action="/registration" method="POST" id="form1" class="text-white py-5 px-8">
        @csrf
        <h1 class="text-4xl">New Sale Registration</h1>

        <h1 class="text-base mt-8">{{ $project->name }}</h1>
        <div class="bg-black/10 mt-2 py-6 px-3">
            <div action="">
                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">SPA No.</span>
                        <input name="spa_no" class="text-black text-xs" type="text">
                    </div>
                    <div class="flex flex-col w-40 mx-7">
                        <span class="px-1 text-sm">SPA Date <span class="text-red-600">*</span></span>
                        <input name="spa_date" class="text-black text-xs" type="date">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-black/10 mt-5 py-6 px-3">
            <h1 class="text-base mt-1">PROPERTY DETAILS</h1>

            <div action="" class="mt-2">
                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Project Name</span>
                        <input name="project_name" value="{{ $project->name }}" class="text-black text-sm"
                            type="text">
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">Block No.</span>
                        <input name="block_no" value="{{ $data->block_no }}" class="text-black text-sm" type="text">
                    </div>
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Unit No.</span>
                        <input name="unit_no" value="{{ $data->unit_no }}" class="text-black text-sm" type="text">
                    </div>
                </div>
                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Category <span class="text-red-600">*</span></span>

                        <select name="category" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="2" selected="">NON-LANDED RESIDENTIAL</option>
                            <option value="3">LANDED RESIDENTIAL</option>
                            <option value="4">COMMERCIAL</option>
                            <option value="6">MIXED-USE DEVELOPMENT</option>
                            <option value="7">LAND</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">Property Type</span>
                        <select name="property_type" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="4">AFFORDABLE APARTMENT</option>
                            <option value="1" selected="">LUXURY APARTMENT</option>
                            <option value="3">MID-END APARTMENT</option>
                            <option value="2">PREMIUM APARTMENT</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Model </span>
                        <select name="model" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="13">APARTMENT</option>
                            <option value="11">DUAL KEY</option>
                            <option value="4">DUPLEX</option>
                            <option value="7">PENTHOUSE</option>
                            <option value="12">SKY VILLA</option>
                        </select>
                    </div>

                </div>
                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Unit Code <span class="text-red-600">*</span></span>
                        <input name="unit_code" class="text-black text-sm" type="text">
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">Bedroom <span class="text-red-600">*</span></span>
                        <input name="bedroom" value="{{ $data->bed_room }}" class="text-black text-sm" type="text">
                    </div>
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Size <span class="text-red-600">*</span></span>
                        <input name="size" value="{{ $data->size }}" class="text-black text-sm" type="text">
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-black/10 mt-5 py-6 px-3">
            <h1 class="text-base mt-1">PURCHASER DETAILS</h1>


            <!-- component -->
            <table id="table" class=" hidden border-collapse w-full">
                <thead>
                    <tr>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            No</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Type</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Company Name</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            ROC / No</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Name </th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Date Of Birth </th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Nationality</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Contact No</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Current Residential Type</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Address</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">

                            Payment Scheme</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Buyer Type</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            VAT TIN</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Copy Detail</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Edit</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Delete</th>
                    </tr>
                </thead>
                <tbody id="property">


                </tbody>
            </table>
            <div class="text-xs my-8"> <input type="checkbox" value="0" checked=""> Same as the above
                (first
                record)</div>
            <div class="flex"><input type="radio" name="first_record" value="Individual" checked> Individual
                <br>
                <input type="radio" name="first_record" value="Company" class="ml-10"> Company <br>
            </div>

            <div class="mt-2">
                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Name <span class="text-red-600 text-xl">*</span></span>

                        <input name="name" class="text-black text-sm" type="text">
                        <span id="nameValidate" class="text-red-600 text-sm hidden">Required Name</span>
                    </div>
                    <div class="flex flex-col w-40 mx-4 validateMargin">
                        <span class="px-1 text-sm">Gender</span>
                        <select name="gender" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-40 validateMargin">
                        <span class="px-1 text-sm">Marital Status</span>
                        <select name="marital" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Contact No</span>
                        <input name="contact_no" class="text-black text-sm" type="text">
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">
                            Birth Date</span>
                        <input name="dob" class="text-black text-sm" type="date">
                    </div>
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Age</span>
                        <input name="age" class="text-black text-sm" type="text">
                    </div>
                </div>
                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Nationality </span>
                        <select name="nationality" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Angola">Angola</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Britain">Britain</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Cambodia" selected>Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="33">Finland</option>
                            <option value="Finland">France</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Holland">Holland</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Ivory Coast">Ivory Coast</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Libya">Libya</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Mali">Mali</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Namibia">Namibia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Republic of the Congo">Republic of the Congo</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Scotland">Scotland</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Korea">South Korea</option>
                            <option value="Spain">Spain</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Thailand">Thailand</option>
                            <option value="The Czech Republic">The Czech Republic</option>
                            <option value="The United Arab Emirates">The United Arab Emirates</option>
                            <option value="The United States">The United States</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="99">Turkmenistan</option>
                            <option value="Turkmenistan">Ukraine</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Wales">Wales</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">Status </span>
                        <select name="status" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="Active">Citizen</option>
                            <option value="Active">Temporary Resident</option>
                            {{-- <option value="">Non-Resident</option> --}}
                        </select>
                    </div>
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Current Residence Type</span>
                        <select name="current_residential_type" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="DUPLEX">DUPLEX </option>
                            <option value="PENT-HOUSE">PENT-HOUSE </option>
                            <option value="STUDIO APARTMENT">STUDIO APARTMENT </option>
                            <option value="1 BEDROOM APARTMENT">1 BEDROOM APARTMENT </option>
                            <option value="2 BEDROOM APARTMENT">2 BEDROOM APARTMENT </option>
                            <option value="3 BEDROOM APARTMENT">3 BEDROOM APARTMENT </option>
                            <option value="4 BEDROOM APARTMENT">4 BEDROOM APARTMENT </option>
                            <option value="SKY VILLA">SKY VILLA </option>
                            <option value="DUAL KEY">DUAL KEY </option>
                            <option value="TERRACE">TERRACE </option>
                            <option value="SEMI DETACHED">SEMI DETACHED </option>
                            <option value="DETACHED">DETACHED </option>
                            <option value="VILLA">VILLA </option>
                            <option value="OFFICETEL">OFFICETEL </option>
                            <option value="SHOPHOUSE">SHOPHOUSE </option>
                            <option value="OFFICE UNIT">OFFICE UNIT </option>
                        </select>
                    </div>

                </div>
                <div class="flex items-end">
                    <div class="flex flex-col w-96">
                        <span class="px-1 text-sm">Address </span>
                        <input name="address" class="text-black text-sm" type="text">
                    </div>

                </div>
                <div class="flex items-end">
                    <div class="flex flex-col w-80 mr-3">
                        <span class="px-1 text-sm">No. Of Property [excluding this property] </span>
                        <input name="property" class="text-black text-sm" type="text">
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">
                            Payment Scheme <span class="text-red-600 text-xl">*</span></span>
                        <select name="payment_scheme" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="PROGRESSIVE INSTALMENTS">PROGRESSIVE INSTALMENTS</option>
                            <option value="FULL CASH UPFRONT">FULL CASH UPFRONT</option>
                            <option value="MORTGAGE LOAN">MORTGAGE LOAN</option>
                        </select>
                    </div>

                </div>
                <div class="flex items-end">

                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">
                            Buyer Type</span>
                        <select name="buyer_type" class=" text-sm text-gray-900 w-full">
                            <option value=""> -- Select -- </option>
                            <option value="PROPERTY INVESTOR">PROPERTY INVESTOR</option>
                            <option value="PROPERTY INVESTOR">HOME OCCUPIER</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-40 ml-3">
                        <span class="px-1 text-sm">VAT TIN</span>
                        <input name="vattin" class="text-black text-sm" type="text">
                    </div>
                </div>
                <div class="flex items-end">
                    <div class="flex flex-col w-40 mr-3">
                        <span class="px-1 text-sm">Email </span>
                        <input name="email" class="text-black text-sm" type="text">
                    </div>
                </div>
                <div onclick="purchaserTable()" class="w-20 cursor-pointer py-1 px-5 mt-4 bg-blue-400">Add</div>
            </div>
        </div>
        <div class="bg-black/10 mt-5 py-6 px-3">
            <h1 class="text-base mt-1">TRANSACTION DETAILS</h1>


            <div class="mt-2">
                <div class="flex items-end">
                    <div class="flex flex-col w-60">
                        <span class="px-1 text-sm">Transaction Price<span class="text-red-600 text-xl">*</span></span>

                        <input name="transaction_price" onchange='transaction()'
                            class="text-black text-sm text-right" type="text">
                    </div>
                    <div class="flex flex-col w-60 ml-3">
                        <span class="px-1 text-sm">Discount From Developer <span
                                class="text-red-600 text-xl">*</span></span>

                        <input name="discount" onchange='transaction()' class="text-black text-sm text-right"
                            type="text">
                    </div>
                </div>
                <div class="flex items-end">
                    <div class="flex flex-col w-60">
                        <span class="px-1 text-sm">Nett Transacted Price (for billing)</span>
                        <input name="nett_transacted_price" class="text-black text-sm text-right" readonly
                            type="text">
                    </div>
                    <div class="flex flex-col w-60 ml-3">
                        <span class="px-1 text-sm">Calculation Based On <span
                                class="text-red-600 text-xl">*</span></span>
                        <div class="flex">
                            <div class="text-xs mr-6">
                                <input name="percentage" type="checkbox" value="0" checked=""
                                    class="mr-2 text-right">Percentage
                                (%)
                            </div>
                            <div class="text-xs">
                                <input name="amount" type="checkbox" value="0" class="mr-2"> Amount ($)
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex items-end mt-3">
                    <div class="flex flex-col w-60">
                        <span class="px-1 text-sm">Gross Commission From Developer/Lead Agency (%)<span
                                class="text-red-600 ">*</span></span>

                        <input name="gross_percentage" onchange="calculateCommission()"
                            class="text-black text-sm text-right" type="text">
                    </div>
                    <div class="flex flex-col w-60 ml-3">
                        <span class="px-1 text-sm">Gross Commission From Developer/Lead Agency ($)<span
                                class="text-red-600">*</span></span>

                        <input name="gross_amount" class="text-black text-sm text-right" type="text">
                    </div>
                </div>
                <div class="flex items-end">
                    <div class="flex flex-col w-60 mt-4">
                        <span class="px-1 text-sm">VAT Declared?<span class="text-red-600 text-xl">*</span></span>
                        <div class="flex">
                            <div class="text-xs mr-6">
                                <input type="radio" name="vat" value="yes" checked onclick="vatDeclared()"
                                    class="mr-2">YES
                            </div>
                            <div class="text-xs">
                                <input type="radio" name="vat" value="no" onclick="vatDeclared()"
                                    class="mr-2"> NO
                            </div>
                        </div>
                        <div class="flex flex-col w-60">
                            <span class="px-1 text-sm">Net Commission</span>
                            <input name="net_commission" class="text-black text-sm text-right" readonly
                                type="text">
                        </div>
                    </div>
                    <div id="payingVat" class="flex flex-col w-60 ml-3 ">
                        <span class="px-1 text-sm">Developer/Lead Agency paying VAT? (Yes)<span
                                class="text-red-600 text-xl">*</span></span>
                        <div class="flex">
                            <div class="text-xs mr-6">
                                <input type="checkbox" name="paying_vat" value="yes" checked=""
                                    class="mr-2">YES
                            </div>
                            <div class="text-xs">
                                <input type="checkbox" name="paying_vat" value="no" class="mr-2"> NO
                            </div>
                        </div>
                        <div class="flex flex-col w-60">
                            <span class="px-1 text-sm">VAT AMOUNT (10%)</span>
                            <input name="vat_amount" class="text-black text-sm text-right" readonly type="text">
                        </div>
                    </div>
                </div>
                <div class="flex items-end mt-3">
                    {{-- <div class="flex flex-col w-60">
                        <span class="px-1 text-sm">Net Commission</span>
                        <input name="net_commission" class="text-black text-sm text-right" readonly type="text">
                    </div> --}}
                    {{-- <div class="flex flex-col w-60 ml-3">
                        <span class="px-1 text-sm">VAT AMOUNT (10%)</span>
                        <input name="vat_amount" class="text-black text-sm text-right" readonly type="text">
                    </div> --}}
                </div>
                <div class="flex items-end mt-3">
                    <div class="flex flex-col w-60">
                        <span class="px-1 text-sm">Total Amount</span>
                        <input name="total_amount" class="text-black text-sm text-right" readonly type="text">
                    </div>
                </div>
            </div>



            <h1 class="text-base mt-28">COMMISSION DISTRIBUTION<span class="text-red-600 text-xl">*</span></h1>

            <table id="distable" class=" hidden border-collapse w-3/5 ">
                <thead>
                    <tr>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500  lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                        <th style="font-size: 10px;" class="p-2 bg-gray-500 text-gray-500 lg:table-cell">
                        </th>
                    </tr>
                    <tr>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            No</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Agent Type</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            ID / Passport No. </th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Company</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Name </th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Phone</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Share (%)</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Gross Commission</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Total Amount</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Edit</th>
                        <th style="font-size: 10px;"
                            class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                            Delete</th>
                    </tr>
                </thead>
                <tbody id="agent">


                </tbody>
            </table>
            <div class="mt-10">
                <div class="flex flex-col w-60">
                    <span class="px-1 text-sm">Agent Type <span class="text-red-600 text-xl">*</span></span>
                    <select name="agent_type" class=" text-sm text-gray-900 w-full">
                        <option value=""> -- Select -- </option>
                        <option value="Closing Agent">Closing Agent</option>
                        <option value="Internal Cobroke">Internal Cobroke</option>
                        <option value="External Cobroke Agency">External Cobroke Agency</option>
                        <option value="External Cobroke Individual">External Cobroke Individual</option>
                        <option value="Tagger">Tagger</option>
                    </select>
                </div>
                <div class="flex items-start">

                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Name <span class="text-red-600 text-xl">*</span></span>

                        <div class="flex">
                            <div class="flex flex-col"> <input name="commission_name"
                                    class="text-black text-sm w-32 mr-2" type="text">
                                <span id="agentNameValidate" class="text-red-600 hidden">Name Required</span>
                            </div>
                            <a onclick="hideshow2()">
                                <svg class="w-4" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 14.866 14.866 18 11 18C7.13401 18 4 14.866 4 11ZM11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C13.125 20 15.078 19.2635 16.6177 18.0319L20.2929 21.7071C20.6834 22.0976 21.3166 22.0976 21.7071 21.7071C22.0976 21.3166 22.0976 20.6834 21.7071 20.2929L18.0319 16.6177C19.2635 15.078 20 13.125 20 11C20 6.02944 15.9706 2 11 2Z"
                                        fill="#fff"></path>
                                </svg>
                            </a><br>

                        </div>
                    </div>
                    <div class="flex flex-col w-40 ml-3">
                        <span class="px-1 text-sm">ID/Passport No.<span class="text-red-600 text-xl">*</span></span>

                        <input name="id_passport_no" class="text-black text-sm" type="text">
                        <span id="passportValidate" class="text-red-600 hidden">ID/Passport No. Required</span>

                        <input name="agent_phone" class="text-black text-sm" type="text" hidden>
                        <input name="agent_company" class="text-black text-sm" type="text" hidden>
                    </div>
                </div>
                <div id="commissontable" class="bg-[#42073F] hidden my-2 w-full p-4">
                    <h1 class="">Select Agent</h1>
                    <div class="flex items-end">
                        <div class="flex flex-col w-40">
                            <span class="px-1 text-sm">Search By</span>
                            <select name="search_by" class=" text-sm text-gray-900 w-full">
                                <option value="account_name">Account Name</option>
                                <option value="biz_name">Business Name</option>
                                <option value="propnex_id">PropNex ID</option>
                                <option value="id_passport_no">ID / Passport No.</option>
                                <option value="phone">Mobile No.</option>
                                <option value="email">Company Email</option>
                                <option value="pxc_id">PXC ID</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-40 ml-3">
                            <span class="px-1 text-sm">Value</span>
                            <input name="search_value" class="text-black text-sm" type="text">
                        </div>
                        <a onclick="searchBy()" class="bg-green-500 flex px-7 py-0.5 h-7 mx-4">Search <svg
                                class="w-4 mt-1 ml-1" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 14.866 14.866 18 11 18C7.13401 18 4 14.866 4 11ZM11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C13.125 20 15.078 19.2635 16.6177 18.0319L20.2929 21.7071C20.6834 22.0976 21.3166 22.0976 21.7071 21.7071C22.0976 21.3166 22.0976 20.6834 21.7071 20.2929L18.0319 16.6177C19.2635 15.078 20 13.125 20 11C20 6.02944 15.9706 2 11 2Z"
                                    fill="#fff"></path>
                            </svg></a>
                        <a onclick="closebtn()" class="bg-red-500 flex px-7 py-0.5 h-7">Cancel <svg fill="#fff"
                                class="w-4 mt-1 ml-1" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100,15a85,85,0,1,0,85,85A84.93,84.93,0,0,0,100,15Zm0,150a65,65,0,1,1,65-65A64.87,64.87,0,0,1,100,165Z">
                                </path>
                                <path
                                    d="M128.5,74a9.67,9.67,0,0,0-14,0L100,88.5l-14-14a9.9,9.9,0,0,0-14,14l14,14-14,14a9.9,9.9,0,0,0,14,14l14-14,14,14a9.9,9.9,0,0,0,14-14l-14-14,14-14A10.77,10.77,0,0,0,128.5,74Z">
                                </path>
                            </svg></a>

                    </div>

                    <table class="border-collapse w-3/4 mt-4">
                        <thead>
                            <tr>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    No</th>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    PropnexID</th>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    PXC ID</th>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    ID / Passport No.</th>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    Account Name </th>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    Biz Name </th>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    Phone</th>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    Email</th>
                                <th style="font-size: 10px;"
                                    class="p-1 bg-gray-200 text-gray-600 border border-gray-300 lg:table-cell">
                                    Select</th>
                            </tr>
                        </thead>
                        <tbody id="agentTable">

                        </tbody>
                    </table>
                </div>

                <div class="flex items-start">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Percentage <span class="text-red-600 text-xl">*</span></span>
                        <input name="commission_percentage" onchange="agentCommission()" class="text-black text-sm"
                            type="text">
                        <span id="percentageValidate" class="text-red-600 hidden">Percentage Required</span>

                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">Gross Commission</span>
                        <input name="gross_commission" class="text-black text-sm" type="text">
                    </div>
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Total Amount</span>
                        <input name="commission_total_amount" class="text-black text-sm" type="text">
                    </div>

                </div>

                <div id="validateDiv" class="bg-[#b91d47] flex justify-between p-4 my-2 hidden">
                    <div>
                        <p class="text-white">Error occured while saving record!</p>
                        <p id="customError"></p>
                    </div>
                    <div>
                        <span class="cursor-pointer" onclick="closeValidateDiv()">X</span>
                    </div>
                </div>
                <div onclick="commissionshow()" class="py-1 w-16 cursor-pointer px-5 mt-4 bg-blue-400">Add</div>

                <div class="flex mt-7 border-t-2 border-blue-700 pt-6">
                    <a onclick="checkValidation()" class="py-1 px-5 cursor-pointer bg-blue-400 ">Save</a>
                    <a class="py-1 px-5 mx-4 bg-blue-400">New</a>
                    <a class="py-1 px-5 bg-blue-400">Cancel</a>

                </div>
            </div>
        </div>


    </form>
    <div class="h-96"></div>


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






    <script>
        var count = 1;

        function commissionshow() {
            if (!($("input[name=commission_name]").val())) {
                $('#agentNameValidate').removeClass('hidden')
            } else if (!($("input[name=id_passport_no]").val())) {
                $('#agentNameValidate').addClass('hidden')
                $('#passportValidate').removeClass('hidden')

            } else if (!($("input[name=commission_percentage]").val())) {
                $('#agentNameValidate').addClass('hidden')
                $('#passportValidate').addClass('hidden')
                $('#percentageValidate').removeClass('hidden')
            } else {

                $('#distable').removeClass('hidden')
                var agent_type = $("select[name=agent_type]").val();
                var commission_name = $("input[name=commission_name]").val();
                var id_passport_no = $("input[name=id_passport_no]").val();
                var search_by = $("select[name=search_by]").val();
                var commission_percentage = $("input[name=commission_percentage]").val();
                var gross_commission = $("input[name=gross_commission]").val();
                var commission_total_amount = $("input[name=commission_total_amount]").val();
                var agent_phone = $("input[name=agent_phone]").val();
                var agent_company = $("input[name=agent_company]").val();
                $('#agent').append(`
            <tr class="bg-white lg:hover:bg-gray-100  mb-10 lg:mb-0">
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + count + `
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + agent_type + `
                            <input name="agent_type` + count + `" value="` + agent_type + `" hidden></input>
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + id_passport_no + `
                            <input name="id_passport_no` + count + `" value="` + id_passport_no + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + agent_company + `
                            <input name="agent_company` + count + `" value="` + agent_company + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + commission_name + `
                            <input name="agent_name` + count + `" value="` + commission_name + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + agent_phone + `
                            <input name="agent_phone` + count + `" value="` + agent_phone + `" hidden></input>
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + commission_percentage + `
                            <input name="commission_percentage` + count + `" value="` + commission_percentage + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + gross_commission + `
                            <input name="gross_commission` + count + `" value="` + gross_commission + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + commission_total_amount + `
                            <input name="commission_total_amount` + count + `" value="` + commission_total_amount + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline">Edit</a>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline pl-6">Remove</a>
                        </td>
                    </tr>`)
                count += 1;
                mission_name = $("input[name=commission_name]").val('');
                var id_passport_no = $("input[name=id_passport_no]").val('');
                var search_by = $("select[name=search_by]").val('');
                var commission_percentage = $("input[name=commission_percentage]").val('');
                var gross_commission = $("input[name=gross_commission]").val('');
                var commission_total_amount = $("input[name=commission_total_amount]").val('');
                var agent_phone = $("input[name=agent_phone]").val('');
                var agent_company = $("input[name=agent_company]").val('');

                $('#agentNameValidate').addClass('hidden')
                $('#passportValidate').addClass('hidden')
                $('#percentageValidate').addClass('hidden')

            }

        }

        function hideshow2() {
            $('#commissontable').removeClass('hidden')
        }

        function closebtn() {
            $('#commissontable').addClass('hidden')
        }

        function fillinput(e) {
            $.ajax({
                type: 'get',
                url: '/agentid',
                data: {
                    'agent_id': e,
                },
                success: function(data) {
                    $("input[name=commission_name]").val(data.account_name);
                    $("input[name=id_passport_no]").val(data.id_passport_no);
                    $("input[name=agent_phone]").val(data.phone);
                    $("input[name=agent_company]").val(data.biz_name);
                    $('#commissontable').addClass('hidden')
                    // $('#tabledata').empty();
                    // $('#tabledata').append(data);
                }
            });
            $('#commissontable').addClass('hidden')
            // console.log(e);
        }

        function searchBy() {
            var search_by = $("select[name=search_by]").val();
            var search_value = $("input[name=search_value]").val();
            $.ajax({
                type: 'get',
                url: '/agent_search',
                data: {
                    'search_by': search_by,
                    'search_value': search_value,
                },

                success: function(data) {
                    $('#agentTable').empty();
                    data.forEach((item, index) => {
                        $('#agentTable').append(`<tr style="font-size: 10px;"
            class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td 
                class="w-full lg:w-auto p-2 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                ${item.id}
            </td>
            <td
                class="w-full lg:w-auto p-2 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                ${item.propnex_id}
            </td>
            <td
                class="w-full lg:w-auto p-2 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                ${item.pxc_id}
            </td>
            <td
                class="w-full lg:w-auto p-2 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                ${item.id_passport_no}
            </td>
            <td
                class="w-full lg:w-auto p-2 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                ${item.account_name}
            </td>
            <td
                class="w-full lg:w-auto p-2 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                ${item.biz_name}
            </td>
            <td
                class="w-full lg:w-auto p-2 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                ${item.phone}
            </td>
            <td
                class="w-full lg:w-auto p-2 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                ${item.email}
            </td>
            <td onclick="fillinput(${item.id})"
                class="w-full cursor-pointer lg:w-auto p-1 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                <svg class="w-10" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 12L8 12" stroke="#1ab72c" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M13 15L15.913 12.087V12.087C15.961 12.039 15.961 11.961 15.913 11.913V11.913L13 9"
                        stroke="#1ab72c" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </td>
        </tr>`);
                    })
                }
            });
        }

        var count1 = 1;

        function purchaserTable() {
            if ($("input[name=name]").val()) {
                $('#nameValidate').addClass('hidden')
                $('.validateMargin').removeClass('mb-4')
                $('#table').removeClass('hidden')
                var name = $("input[name=name]").val();
                var gender = $("select[name=gender]").val();
                var dob = $("input[name=dob]").val();
                var nationality = $("select[name=nationality]").val();
                var current_residential_type = $("select[name=current_residential_type]").val();
                var address = $("input[name=address]").val();
                var payment_scheme = $("select[name=payment_scheme]").val();
                var buyer_type = $("select[name=buyer_type]").val();
                var type = $("input[name=first_record]:checked").val();
                var vattin = $("input[name=vattin]").val();
                var contact_no = $("input[name=contact_no]").val();


                $('#property').append(`
            <tr class="bg-white lg:hover:bg-gray-100  mb-10 lg:mb-0">
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + count1 + `
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + type + `
                            <input name="type` + count1 + `" value="` + type + `" hidden></input>
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + name + `
                            <input name="purchaser_name` + count1 + `" value="` + name + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + dob + `
                            <input name="dob` + count1 + `" value="` + dob + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + nationality + `
                            <input name="nationality` + count1 + `" value="` + nationality + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + contact_no + `
                            <input name="contact_no` + count1 + `" value="` + contact_no + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + current_residential_type + `
                            <input name="current_residential_type` + count1 + `" value="` + current_residential_type + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                           ` + address + `
                           <input name="address` + count1 + `" value="` + address + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + payment_scheme + `
                            <input name="payment_scheme` + count1 + `" value="` + payment_scheme + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + buyer_type + `
                            <input name="buyer_type` + count1 + `" value="` + buyer_type + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + vattin + `
                            <input name="vattin` + count1 + `" value="` + vattin + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline">Copy</a>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline">Edit</a>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                            <a href="#" class="text-blue-400 hover:text-blue-600 underline pl-6">Remove</a>
                        </td>
                    </tr>`)
                $("input[name=name]").val('');
                $("select[name=gender]").val('');
                $("input[name=dob]").val('');
                $("select[name=nationality]").val('');
                $("select[name=current_residential_type]").val('');
                $("input[name=address]").val('');
                $("select[name=payment_scheme]").val('');
                $("select[name=buyer_type]").val('');
                $("input[name=type]").val('');
                $("input[name=vattin]").val('');
                $("input[name=contact_no]").val('');
                $("input[name=age]").val('');
                $("input[name=property]").val('');
                count1 += 1;
            } else {
                $('#nameValidate').removeClass('hidden')
                $('.validateMargin').addClass('mb-4')

            }

        }

        function transaction() {
            var price = $('input[name=transaction_price]').val();
            var discount = $('input[name=discount]').val();
            var nett_transacted_price = $('input[name=nett_transacted_price]').val(price - discount);

            var nett_transacted_price = $('input[name=nett_transacted_price]').val();
            var gross_percentage = $('input[name=gross_percentage]').val();
            var gross_amount = (nett_transacted_price * gross_percentage * 0.01);
            $('input[name=gross_amount]').val(gross_amount);
            var net_commission = $('input[name=net_commission]').val(gross_amount);
            var vat_amount = (gross_amount * 0.1);
            var total_amount = gross_amount + vat_amount;
            $('input[name=vat_amount]').val(vat_amount);
            $('input[name=total_amount]').val(total_amount);
            if ($('input[name=commission_percentage]').val()) {
                var percentage = $('input[name=commission_percentage]').val()
                var net_commission = $('input[name=net_commission]').val();
                var commission = net_commission * percentage * 0.01;
                $('input[name=gross_commission]').val(commission);
                $('input[name=commission_total_amount]').val(commission)
            }
            // alert(a);
        }

        function calculateCommission() {
            var nett_transacted_price = $('input[name=nett_transacted_price]').val();
            var gross_percentage = $('input[name=gross_percentage]').val();
            var gross_amount = (nett_transacted_price * gross_percentage * 0.01);
            var round_gross_amount = (gross_amount);
            $('input[name=gross_amount]').val(gross_amount);
            var net_commission = $('input[name=net_commission]').val(gross_amount);
            var vat_amount = (gross_amount * 0.1);
            var total_amount = (gross_amount + vat_amount);
            $('input[name=vat_amount]').val(vat_amount);
            $('input[name=total_amount]').val(total_amount);




        }

        function vatDeclared() {
            if ($('input[name=vat]:checked').val() == 'no') {
                // alert(1);
                $('#payingVat').addClass('hidden')
                var gross_amount = $('input[name=gross_amount]').val();
                $('input[name=total_amount]').val(gross_amount);

            } else {
                $('#payingVat').removeClass('hidden');
                var nett_transacted_price = $('input[name=nett_transacted_price]').val();
                var gross_percentage = $('input[name=gross_percentage]').val();
                var gross_amount = nett_transacted_price * gross_percentage * 0.01;
                $('input[name=gross_amount]').val(gross_amount);
                var net_commission = $('input[name=net_commission]').val(gross_amount);
                var vat_amount = gross_amount * 0.1;
                var total_amount = gross_amount + vat_amount;
                $('input[name=vat_amount]').val(vat_amount);
                $('input[name=total_amount]').val(total_amount);
            }
        }

        function agentCommission() {
            var percentage = $('input[name=commission_percentage]').val()
            var net_commission = $('input[name=net_commission]').val();
            var commission = net_commission * percentage * 0.01;
            $('input[name=gross_commission]').val(commission);
            $('input[name=commission_total_amount]').val(commission)


        }

        function checkValidation() {

            if (!($('input[name=purchaser_name1]').val())) {
                $('#validateDiv').removeClass('hidden')
                $('#customError').empty();
                $('#customError').append('Please Add Purchaser Details.');

            } else if (!($('input[name=agent_name1]').val())) {
                $('#validateDiv').removeClass('hidden')
                $('#customError').empty();
                $('#customError').append('Please Add Commission Sharing.');

            } else {
                $('#validateDiv').addClass('hidden')
                $('#form1').submit();

            }
        }

        function closeValidateDiv() {
            $('#validateDiv').addClass('hidden')

        }
    </script>
</body>

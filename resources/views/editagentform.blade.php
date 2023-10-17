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

    @if (session()->has('error'))
        <div class="alert alert-success">
            {{ session()->get('error') }}
        </div>
    @endif
    <form action="/updateagent/{{ $pageData->id }}" method="POST" class="text-white py-5 px-8">
        @csrf
        <h1 class="text-4xl">Edit Agent</h1>
        <div class="bg-black/10 mt-5 py-6 px-3">

            <div class="mt-2">
                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Account Name</span>
                        <input name="account_name" value="{{ $pageData->account_name }}" class="text-black text-sm"
                            type="text" required>
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">
                            Company Name</span>
                        <input value="{{ $pageData->biz_name }}" name="biz_name" class="text-black text-sm"
                            type="text" required>
                    </div>

                </div>

                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Phone</span>
                        <input value="{{ $pageData->phone }}" name="phone" class="text-black text-sm" type="text"
                            required>
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">
                            Email</span>
                        <input value="{{ $pageData->email }}" name="email" class="text-black text-sm" type="email"
                            required>
                    </div>

                </div>

                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">ID/Passport Number</span>
                        <input value="{{ $pageData->id_passport_no }}" name="passport_no" class="text-black text-sm"
                            type="text" required>
                    </div>

                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">Active</span>
                        <select class="text-black text-sm" name="status">
                            <option {{ $pageData->active == 'Y' ? 'selected' : '' }} class="text-black text-sm"
                                value="Y">Yes</option>
                            <option {{ $pageData->active == 'N' ? 'selected' : '' }} class="text-black text-sm"
                                value="N">No</option>
                        </select>
                    </div>

                </div>


                <input type="submit" class="w-20 cursor-pointer py-1 px-5 mt-4 bg-blue-400" />
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
            $('#distable').removeClass('hidden')
            var agent_tpye = $("select[name=agent_type]").val();
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
                            ` + agent_tpye + `
                            <input name="agent_tpye` + count + `" value="` + agent_tpye + `" hidden></input>
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + id_passport_no + `
                            <input name="id_passport_no` + count + `" value="` + id_passport_no + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + agent_company + `
                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + commission_name + `
                            <input name="agent_name` + count + `" value="` + commission_name + `" hidden></input>

                        </td>
                        <td style="font-size: 10px;"
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b  lg:table-cell relative lg:static">
                            ` + agent_phone + `
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

        function hideshow() {
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
            count1 += 1;

        }

        function transaction() {
            var price = $('input[name=transaction_price]').val();
            var discount = $('input[name=discount]').val();
            var nett_transacted_price = $('input[name=nett_transacted_price]').val(price - discount);

            var nett_transacted_price = $('input[name=nett_transacted_price]').val();
            var gross_percentage = $('input[name=gross_percentage]').val();
            var gross_amount = nett_transacted_price * gross_percentage * 0.01;
            $('input[name=gross_amount]').val(gross_amount);
            var net_commission = $('input[name=net_commission]').val(gross_amount);
            var vat_amount = gross_amount * 0.1;
            var total_amount = gross_amount + vat_amount;
            $('input[name=vat_amount]').val(vat_amount);
            $('input[name=total_amount]').val(total_amount);
            // alert(a);
        }

        function calculateCommission() {
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
    </script>



    <script>
        function hideshow() {
            // document.getElementById('table').classList.remove("hidden");
            // document.getElementById('closebtn').classList.remove("hidden");

            $value = $("#project").val();
            // console.log($value);
            $.ajax({
                type: 'get',
                url: '/transactions/search',
                data: {
                    'project_id': $value,
                },
                success: function(data) {
                    document.getElementById('table').classList.remove("hidden");
                    document.getElementById('closebtn').classList.remove("hidden");
                    $('#tabledata').empty();
                    $('#tabledata').append(data);
                }
            });

        }

        function transactions() {
            document.getElementById('transaction').classList.toggle("hidden")
        }

        function projAgent() {
            document.getElementById('projagent').classList.toggle("hidden")
        }


        function hideadd() {
            document.getElementById('table').classList.add("hidden")
            document.getElementById('closebtn').classList.add("hidden")
        }
    </script>
</body>

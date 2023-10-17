{{-- header  --}}
<header class="text-gray-600 body-font bg-[#405574]">
    <div class="mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
        <a href="/home" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="images/logoT.png" alt="" class="w-10">
            <span class="ml-3 text-xl text-white">R.E.M.S (Headquarter)
            </span>
        </a>

        <nav class="text-white flex text-xs">
            <a href="/home" class="px-3 py-2 hover:bg-white hover:text-black">Home</a>
            <a href="" class="px-3 py-2 hover:bg-white hover:text-black">Project</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="px-3 py-2 hover:bg-white hover:text-black">
                    <span>Transactions</span>
                    {{-- <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg> --}}
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                    <div class="px-2 py-2 w-96 bg-white text-black rounded-md shadow dark-mode:bg-gray-800">
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="/new-transactions">New Project Transaction
                        </a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Project Transaction
                            Records</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Set Transaction
                            Overriding</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Review and Verify
                            Transactions</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Approved
                            Transactions</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Dashboard</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Billing Advice</a>
                        <div class="w-full h-0.5 bg-gray-300 my-2"></div>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Revertable Project Transactions Listing</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Revertabled Project Transactions History Listing</a>
                        <div class="w-full h-0.5 bg-gray-300 my-2"></div>

                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">New Resale / Rental
                            Transaction</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Edit Resale / Rental
                            Transaction</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">View Transaction</a>
                        <div class="w-full h-0.5 bg-gray-300 my-2"></div>

                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Search All
                            Transactions</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Settings</a>
                    </div>

                </div>
            </div>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="px-3 py-2 hover:bg-white hover:text-black">
                    <span>Invoices</span>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                    <div class="px-2 py-2 w-96 bg-white text-black shadow rounded-md dark-mode:bg-gray-800">
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-md md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="/invoices">Proforma Invoices Listing
                        </a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-md md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Create Proforma Invoices</a>

                        <div class="w-full h-0.5 bg-gray-300 my-2"></div>

                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-md md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Tax Invoices Listing</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-md md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Create Tax Invoices</a>

                        <div class="w-full h-0.5 bg-gray-300 my-2"></div>


                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-md md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Credit Note Listing</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-md md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Create Credit Note</a>
                    </div>
                </div>
            </div>
            <a href="" class="px-3 py-2 hover:bg-white hover:text-black">Settlement</a>
            <a href="" class="px-3 py-2 hover:bg-white hover:text-black">Associate</a>
            <a href="" class="px-3 py-2 hover:bg-white hover:text-black">Reports</a>
            <a href="" class="px-3 py-2 hover:bg-white hover:text-black">Settings</a>


            <div class="relative">
                <button onclick="projAgent()" class="px-3 py-2 hover:bg-white hover:text-black">
                    <span>Manage</span>
                </button>
                <div id="projagent" class="absolute right-0 w-full mt-2 origin-top-right hidden shadow-lg">
                    <div class="px-2 py-2 w-52 bg-white text-black shadow dark-mode:bg-gray-800">

                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-md md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="/projects">Projects</a>
                        <a class="block px-4 py-1 text-xs font-semibold bg-transparent rounded-md md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="/agents">Agents</a>
                    </div>
                </div>
            </div>
            <a href="/bulk_import" class="px-3 py-2 hover:bg-white hover:text-black">Bulk Import</a>

        </nav>

    </div>
</header>

{{-- header  --}}

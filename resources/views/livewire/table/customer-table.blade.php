<div>
    <div class="intro-y box p-5 mt-5">
        <!-- Topside -->
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <!-- Search -->
            <div class="w-full xl:flex sm:mr-auto" >
                <div class="w-full sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                    <input  type="text" class="form-control w-full sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                </div>
            </div>
            <!-- Sort -->
            <div class="flex mt-5 sm:mt-0">
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Sort</label>
                    <select  class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                        <option value="">Last update</option>
                        <option value="">Amount spent</option>
                        <option value="">Total orders</option>
                        <option value="">Last order date</option>
                        <option value="">First order date</option>
                        <option value="">Date added as a customer</option>
                        <option value="">Last abandoned order date</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Customer List -->
       <div class="overflow-x-auto scrollbar-hidden">
           @if($customers->count())
           <div class="overflow-x-auto">
               <table class="table table-striped mt-5">
                   <thead>
                       <tr>
                           <th class="whitespace-nowrap ">Customer Name</th>
                           <th class="whitespace-nowrap text-center">Email</th>
                           <th class="whitespace-nowrap text-center">Phone Number</th>
                           <th class="whitespace-nowrap text-center">Orders</th>
                           <th class="whitespace-nowrap text-center">Spent</th>
                           <th class="whitespace-nowrap text-center">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                   @foreach($customers as $customer)
                       <tr>
                           <td class="whitespace-nowrap ">{{$customer->name}} </td>
                           <td class="whitespace-nowrap text-center">{{$customer->email}}</td>
                           <td class="whitespace-nowrap text-center">{{$customer->phone_number}}</td>
                           <td class="whitespace-nowrap text-center">0 orders</td>
                           <td class="whitespace-nowrap text-center">₱0.00</td>
                           <td class="table-report__action w-56">
                               <div class="flex justify-center items-center">
                                   <div class="flex justify-center items-center">
                                        <button  class="flex items-center mr-3">
                                            <i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit
                                        </button>
                                        <button  class="flex items-center text-danger">
                                            <i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Delete
                                        </button>
                                   </div>
                               </div>
                           </td>
                       </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
           @else
           <h2 class="intro-y text-lg font-medium mt-10">
               No Results found <strong>{{{request()->query('search')}}}</strong>
           </h2>
           @endif
       </div>

       <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-5">
           <nav class="w-full sm:w-auto sm:mr-auto">
               {!! $customers->onEachSide(1)->links() !!}
           </nav>
           <div class="mx-auto text-slate-500">
            Showing {{$customers->firstItem()}} to {{$customers->lastItem()}} of {{$customers->total()}} entries
        </div>
           <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
               <option>10</option>
               <option>25</option>
               <option>35</option>
               <option>50</option>
           </select>
       </div>
    </div>
</div>

<div>

    <div class="overflow-x-auto">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th class="whitespace-nowrap">Full Name</th>
                    <th class="whitespace-nowrap text-center">Address</th>
                    <th class="whitespace-nowrap text-center">Postcode</th>
                    <th class="whitespace-nowrap text-center">Phone Number</th>
                    <th class="whitespace-nowrap text-center">Action</th>
                </tr>
            </thead>
            <tbody id="addressTbody">
                @forelse ($address as $address)
                <tr>
                    <td class="whitespace-nowrap">{{ $address->name }}</td>
                    <td class="whitespace-nowrap text-center">{{ $address->house }}</td>
                    <td class="whitespace-nowrap text-center address">{{ $address->province }}-{{ $address->city }}-{{ $address->barangay}}</td>
                    <td class="whitespace-nowrap text-center">{{ $address->phone_number }}</td>
                    <td class="whitespace-nowrap text-center">
                        <a href="{{ Route('customer.address.edit', $address->id) }}" class="mr-1"><i class="fa-regular fa-pen-to-square w-4 h-4 mr-1"></i> Edit</a>
                        <button wire:click="selectItem({{$address->id}},'delete')" class="text-danger"><i class="fa-regular fa-trash-can w-4 h-4 mr-1" ></i> Delete</td></button>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No Address Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="{{ asset('dist/js/phil-conv-address.js') }}"></script>
</div>

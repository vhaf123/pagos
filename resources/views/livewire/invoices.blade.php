<div>
    <div class="card">
        <div class="card-body">
            <table class="w-full table-fixed">
                <thead class="bg-gray-100">
                    <tr class="text-left">
                        <th class="w-1/2 px-4 py-2">Fecha</th>
                        <th class="w-1/4 px-4 py-2">Dolares</th>
                        <th class="w-1/4 px-4 py-2"></th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @forelse ($invoices as $invoice)
                        <tr>
                            <td class="px-4 py-3">{{ $invoice->date()->toFormattedDateString() }}</td>
                            <td class="px-4 py-3">{{ $invoice->total() }}</td>
                            <td class="px-4 py-3 text-right">
                                <a class="btn btn-primary" href="invoice/{{ $invoice->id }}">Download</a>
                            </td>
                        </tr>
                    @empty
                            
                        <tr>
                        
                            <td colspan="3" class="px-4 py-3 text-sm text-gray-700">No tiene ninguna factura registrada</td>
                        
                        </tr>

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div style="display:flex ;justify-content: center;">
    <table style="width:90%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Medicine_ID</th>
                <th>Quantity</th>
                <th>Sale_date</th>
                <th>Customer_Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->sale_id }}</td>
                <td>{{ $sale->medicine_id }}</td>
                <td>{{ $sale->quantity }}</td>
                <td>{{ $sale->sale_date }}</td>
                <td>{{ $sale->customer_phone }}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>
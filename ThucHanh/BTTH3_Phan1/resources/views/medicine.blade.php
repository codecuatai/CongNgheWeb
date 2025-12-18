<div style="display:flex ;justify-content: center;">
    <table style="width:90%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Dosage</th>
                <th>Form</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicines as $med)
            <tr>
                <td>{{ $med->medicine_id }}</td>
                <td>{{ $med->name }}</td>
                <td>{{ $med->brand }}</td>
                <td>{{ $med->dosage }}</td>
                <td>{{ $med->form }}</td>
                <td>{{ $med->price }}</td>
                <td>{{ $med->stock }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
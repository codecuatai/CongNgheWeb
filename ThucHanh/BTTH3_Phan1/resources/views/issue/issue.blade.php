<div style="display:flex ;justify-content: center;">
    <table style="width:90%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Report By</th>
                <th>Description</th>
                <th>Urgency</th>
                <th>Status</th>
                <th>Create_at</th>
                <th>Update_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($issues as $issue)
            <tr>
                <td>{{ $issue->id }}</td>
                <td>{{ $issue->reported_by }}</td>
                <td>{{ $issue->description }}</td>
                <td>{{ $issue->urgency }}</td>
                <td>{{ $issue->status }}</td>
                <td>{{ $issue->created_at }}</td>
                <td>{{ $issue->updated_at }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
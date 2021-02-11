<h1>ABC</h1>
<table>
    <tr><th> First Name</th>
        <th> Last Name </th>
        @foreach ($data as $item)
        <tr><td>{{$item->firstName}} </td>
            <td>{{$item->lastName}} </td></tr>
            
        @endforeach
</table>
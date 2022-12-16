<h1>Display Student Table</h1>
<table border='1'>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>GENDER</th>
        <th>ACTION</th>
    </tr>
    @foreach($data as $studentdata)
    <tr>
        <td>{{$studentdata->id}}</td>
        <td>{{$studentdata->Name}}</td>
        <td>{{$studentdata->Sname}}</td>
        <td>{{$studentdata->Gender}}</td>
        <td><a href='/deletestudent/{{$studentdata->id}}'>Delete</a> |
            <a href='/editstudent/{{$studentdata->id}}'>Edit</a>
        </td>
    </tr>
    @endforeach
</table>
<h1>Display Employee Table</h1>
<table border='1'>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>ACTION</th>
    </tr>
    @foreach($data as $employeedata)
    <tr>
        <td>{{$employeedata->id}}</td>
        <td>{{$employeedata->Name}}</td>
        <td>{{$employeedata->Email}}</td>
        <td>{{$employeedata->Mobile}}</td>
        <td><a href='/deleteemployee/{{$employeedata->id}}'>Delete</a> |
        <a href='/editemployee/{{$employeedata->id}}'>Edit</a></td>
    </tr>
    @endforeach
</table>
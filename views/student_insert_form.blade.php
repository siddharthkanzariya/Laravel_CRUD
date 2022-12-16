<html>
    <head>
        <h1>Insert Student Data</h1>
    </head>
    <body>
        <form method="post" action="{{URL::to('/stformprocess')}}">
            @csrf
            <table>
                <tr>
                    <td>Enter Name : </td>
                    <td><input type="text" name="txt1" placeholder="Enter Name"/></td>
                </tr>
                <tr>
                    <td>Enter Surname : </td>
                    <td><input type="text" name="txt2" placeholder="Enter Surname"></td>
                </tr>
                <tr>
                    <td>Gender : </td>
                    <td><input type="text" name="txt3" placeholder="Enter Gender"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
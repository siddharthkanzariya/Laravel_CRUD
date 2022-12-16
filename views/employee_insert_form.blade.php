<html>
    <head>
        <h1 align='center'>Insert Employee Data</h1>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <form method="post" action="{{URL::to('/empformprocess')}}">
            @csrf
            
            <table align='center'>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="txt1" placeholder="Enter Name"/></td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td><input type="email" name="txt2" placeholder="Enter Email"/></td>
                </tr>
                <tr>
                    <td>Mobile : </td>
                    <td><input type="number" name="txt3" placeholder="Enter Mobile"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
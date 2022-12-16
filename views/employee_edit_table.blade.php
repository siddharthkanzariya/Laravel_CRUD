

<html>
    <body>
        <form method="post" action="{{URL::to('/updateempprocess')}}">
        @method('PATCH')    
        @csrf
            Id : <input type="hidden" name="txt0" value="{{$fetchdata->id}}"/>
            <br/>
            Name :<input type="text" name="txt1" value="{{$fetchdata->Name}}"/>
            <br/>
            Email : <input type="email" name="txt2" value="{{$fetchdata->Email}} "/>
            <br/>
            Mobile : <input type="number" name="txt3" value="{{$fetchdata->Mobile}}"/>
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
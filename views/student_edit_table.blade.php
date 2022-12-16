<form method="post" action="{{URL::to('/updatestprocess')}}">
    @method('PATCH')
    @csrf
    ID : <input type="hidden" name="txt0" value="{{$fetchdata->id}}"/>
    <br/>
    Name : <input type="text" name="txt1" value="{{$fetchdata->Name}}"/>
    <br/>
    Surname : <input type="text" name="txt2" value="{{$fetchdata->Sname}}"/>
    <br/>
    Gender : <input type="text" name="txt3" value="{{$fetchdata->Gender}}"/>
    <br/>
    <input type="submit"/>
</form>
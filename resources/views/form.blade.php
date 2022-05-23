<h1>Form</h1>

<x-sidebar name="Mukesh Kumar" age="20" />

<form method="post"
 action="{{route('mukesh')}}" 
 >
@csrf
 <input type="textbox" name="name">
 <input type="text" name="test">
<button type="submit">Submit</button>
</form>
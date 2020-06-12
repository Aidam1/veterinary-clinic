@if ($visit->id)
     <form action="{{route('visits.update',[$visit->id])}}" method="POST"> 
        @method('PUT') 
@else
    <form action="{{route('visits.store')}}" method="POST"> 
@endif
    @csrf
    <div>
        <?php $display = isset($visit->pet_id)?"none":"block"?>
        <label style="display: {{$display}}" for="client_id">Client ID</label>
        <input style="display: {{$display}}" type="text" name="client_id" id="client_id" value="{{old('client_id', $visit->client_id)}}">
    </div>
    <div>
        <label style="display: {{$display}}" for="pet_id">Pet ID</label>
        <input style="display: {{$display}}" type="text" name="pet_id" id="pet_id" value="{{old('pet_id', $visit->pet_id)}}">
    </div>
    <div>
        <label for="report">Report</label>
        <textarea name="report" id="report"rows="10" cols="30">{{old('report', $visit->report)}}</textarea>
    </div>
    
    <input type="submit" value="Submit">
</form>
@if(!empty($collection) && $collection->count()) 
    @foreach($collection as $key => $value)
    
        <tr>  
                <td>{{ $loop->iteration }}</td> 
                <td>{{ $value->name }}</td> 
                <td>{{ $value->email }}</td>   
                <td>{{ $value->subject }}</td>   
                <td>{{ $value->message }}</td>   
                <td>{{ $value->date_time }}</td>   
                <td><img src="{{asset('storage/'.$value->image)}}" style="width:70px"></td>   
                <td>{{ date('d M, Y', strtotime($value->updated_at)) }} </td> 
            </tr> 
            
    @endforeach
@else
    <tr>
        <td colspan="8"><center><i>No Records Found!</i></center></td>
    </tr>
@endif

<tr>
    <td colspan="8">{!! $collection->links() !!} </td>  
</tr>  
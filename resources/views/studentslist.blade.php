<div class="card mb-3">
  <img src="https://c.pxhere.com/photos/c9/cf/education_school_learn_learning_classroom-1201352.jpg!d" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find here all the information about students.</p>
    
    <table class="table">
        <thead class="bg-light">
            <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>      
            <td>{{$student->cne}}</td>
            <td>{{$student->firstName}}</td>
            <td>{{$student->lastName}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->speciality}}</td>
            <td>
                <!-- <a href="" class="btn btn-sm btn-info">Show</a> -->
                <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>   
                <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>                             
                <!-- <form method="POST" action="{{$student->id}}">                    
                {{ csrf_field() }}
                {{ method_field('DELETE') }}                
                    <input type="submit" class="btn btn-danger" value="Delete">                    
                </form> -->

            </td>
        </tr>  
        @endforeach    
        </tbody>
    </table>
  </div>
</div>
    

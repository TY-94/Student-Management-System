<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
</head>
<body>
@include("navbar")

<div class="row header-container">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">        
        <div class="row">
            <section class="col-md-12 d-flex justify-content-center" >
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>                
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")                
            </section>
            <section class="col">
                <div class="card">
                    <img class="card-img-top" src="https://oapen-uk.jiscebooks.org/wp-content/uploads/2021/04/pioneers-of-education-1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Enter Information of New Student</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group" style="margin-bottom:15px">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control" style="margin-top:5px" placeholder="Enter cne">
                            </div>
                            <div class="form-group" style="margin-bottom:15px">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control" style="margin-top:5px" placeholder="Enter the first name">
                            </div>
                            <div class="form-group" style="margin-bottom:15px">
                                <label>Last Name</label>
                                <input name="lastName" type="text" class="form-control" style="margin-top:5px" placeholder="Enter the last name">
                            </div>
                            <div class="form-group" style="margin-bottom:15px">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control" style="margin-top:5px" placeholder="Enter the age">
                            </div>
                            <div class="form-group" style="margin-bottom:15px">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control" style="margin-top:5px" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
                
            </section>
        </div>        
    </div>
@elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>        
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col">
                <div class="card">
                    <img class="card-img-top" src="https://oapen-uk.jiscebooks.org/wp-content/uploads/2021/04/pioneers-of-education-1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Enter Information of New Student</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                        @csrf
                            <div class="form-group" style="margin-bottom:15px">
                                <label>CNE</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" style="margin-top:5px" placeholder="Enter cne">
                            </div>
                            <div class="form-group" style="margin-bottom:15px">
                                <label>First Name</label>
                                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" style="margin-top:5px" placeholder="Enter the first name">
                            </div>
                            <div class="form-group" style="margin-bottom:15px">
                                <label>Last Name</label>
                                <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control" style="margin-top:5px" placeholder="Enter the last name">
                            </div>
                            <div class="form-group" style="margin-bottom:15px">
                                <label>Age</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control" style="margin-top:5px" placeholder="Enter the Age">
                            </div>
                            <div class="form-group" style="margin-bottom:15px">
                                <label>Speciality</label>
                                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" style="margin-top:5px" placeholder="Enter Sepeciality">
                            </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>                   
            </section>
        </div>        
    </div>
@endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
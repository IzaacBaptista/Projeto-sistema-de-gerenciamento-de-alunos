<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student management system</title>
  </head>
  <body>

    @if($layout == 'index')
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section  class="col-md-5"></section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section  class="col">
                    <form action="{{ url('/store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>CNE</label>
                            <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                        </div>
                        <div class="form-group">
                            <label>Second Name</label>
                            <input name="secondName" type="text" class="form-control" placeholder="Enter the second name">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input name="age" type="text" class="form-control" placeholder="Enter the age">
                        </div>
                        <div class="form-group">
                            <label>Speciality</label>
                            <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="row">
            <div class="container-fluid">
                <section class="col">
                    @include("studentslist")
                </section>
                <section  class="col"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section  class="col">
                    <form action="{{ url('/update/'.$student->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>CNE</label>
                            <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                        </div>
                        <div class="form-group">
                            <label>Second Name</label>
                            <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="Enter the second name">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter the age">
                        </div>
                        <div class="form-group">
                            <label>Speciality</label>
                            <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                </section>
            </div>
        </div>

    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

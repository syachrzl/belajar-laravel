<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
      <title>Employee Data</title>
    </head>
    <body>
    <div class="container">
        <center><h1>Edit Employee Data</h1></center>
        <div class="card">
            <div class="card-body">
        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value ="{{  $data->name }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">No HP</label>
                    <input type="text" name="no_hp" class="form-control" id="exampleFormControlInput1" value = "{{ $data->no_hp }}" required>
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Gender</label>
                  <select class="form-control" name="gender" id="exampleFormControlSelect1" required>
                    <option selected>{{ $data->gender }}</option>
                    <option value="Male">Male</option>
                    <option valie="Female">Female</option>
                  </select>
                </div>
                <center>
                    <a href="/employee" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                     </center>
              </form>
        </form>
    </div>
    </div>
    </div>
        <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
  </html>
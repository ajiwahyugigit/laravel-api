<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Api</title>
</head>
<body>
   <div class="section mt-5">
       <div class="container">
        <table class="table responsive">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Negara</th>
                <th scope="col">Positif</th>
                <th scope="col">Sembuh</th>
                <th scope="col">Meninggal</th>
                <th scope="col">Terkonfirmasi</th>

              </tr>
            </thead>
            <tbody>
                @php
                    $nomor = 0;
                @endphp
              @foreach ($data as $d)
              @php
                  $nomor++;
              @endphp
                  <tr>
                      <td>{{$nomor}}</td>
                    
                      @php
                          dd($d)
                      @endphp

                      <td>{{$d}}</td>
                  </tr>
              @endforeach
            </tbody>
          </table>
       </div>
   </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                <th scope="col">Foto</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody id="student">

            </tbody>
          </table>
       </div>
   </div>
</body>

<script>

  function getAllStudents() {

    $.ajax({
        method: 'GET',
        url: 'http://127.0.0.1:8000/api/students',
        dataType: 'json',
        success(result) {
            console.log(result);
            getPageTable(result.data);
        }
    })

  }

  function getPageTable(data) {
    let rows = '';

    for(index in data) {
        rows += `
            <tr>
                <td>
                    ${+index +1}
                </td>
                <td>

                </td>
                <td>
                    ${data[index].nik}
                </td>
                <td>
                    ${data[index].nama}
                </td>
                <td>
                    ${data[index].jenis_kelamin}
                </td>
                <td>
                    ${data[index].tempat_lahir}
                </td>
                <td>
                    ${data[index].tanggal_lahir}
                </td>
                <td>
                    ${data[index].alamat}
                </td>
            </tr>
        `
    }
    document.getElementById('student').innerHTML = rows;
  }


setInterval(function () {
    getAllStudents()
},1000)


document.addEventListener('DOMContentLoaded', () => {
    getAllStudents()
});



</script>


{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
      <table border="1">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nama Kota</th>
              </tr>
          </thead>
          @foreach($data as $item)
          <tbody>
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama_kota }}</td>
              </tr>
          </tbody>
          @endforeach
      </table>
  </body>
  </html>
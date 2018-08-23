
  <body>

          <table class="table">
            <thead >
              <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>No.Ctrl.</th>
                <th>Carrera</th>
                <th>Sem.</th>
                <th>Rol</th>
              </tr>
            </thead>
            <body>
            @foreach($users as $user)
              <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->noControl }}</td>
                <td>{{ $user->carrera }}</td>
                <td>{{ $user->semestre }}</td>
                <td>{{ $user->tipo }}</td>
              </tr>
            @endforeach
          </table>


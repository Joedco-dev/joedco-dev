
  <body>
            

          <table class="table">
            <thead >
              <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Sem.</th>
                <th>Tipo</th>
                <th>No.Ctrl.</th>
                <th>Correo</th>
              </tr>
            </thead>
            <body>
            {{ $student = DB::table('students')->get() }}
              <tr>
                <th>{{ $student->id }}</th>
                <td>{{ $student->nombre }}</td>
                <td>{{ $student->carrera }}</td>
                <td>{{ $student->semestre }}</td>
                <td>{{ $student->tipo }}</td>
                <td>{{ $student->noControl }}</td>
                <td>{{ $student->materias }}</td>
              </tr>
          </table>
        
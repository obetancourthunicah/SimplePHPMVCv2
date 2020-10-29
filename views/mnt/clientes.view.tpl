<section><h1>Mantenimiento de Clientes</h1></section>
<section>Aqui va el Formulario del Filtro</section>
<section>
  <table>
    <thead>
      <tr>
        <th>
          Código
        </th>
        <th>
          Nombre
        </th>
        <th>
          Telefono
        </th>
        <th>
          Correo
        </th>
        <th>
          <a href="index.php?page=cliente&mode=INS&clientid=0">Nuevo</a>
        </th>
      </tr>
    </thead>
    <tbody>
      {{foreach clientes}}
        <tr>
          <td>
            {{clientid}}
          </td>
          <td>
            {{clientname}}
          </td>
          <td>
            {{clientphone1}} {{clientphone2}}
          </td>
          <td>
            {{clientemail}}
          </td>
          <td>
            <a href="index.php?page=cliente&mode=UPD&clientid={{clientid}}">Editar</a><br/>
            <a href="index.php?page=cliente&mode=DSP&clientid={{clientid}}">Mostrar</a><br />
            <a href="index.php?page=cliente&mode=DEL&clientid={{clientid}}">Eliminar</a>
          </td>
        </tr>
        {{endfor clientes}}
    </tbody>
    <tfoot>

    </tfoot>
  </table>
</section>

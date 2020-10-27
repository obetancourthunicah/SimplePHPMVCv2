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
          Actions
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
            Actions
          </td>
        </tr>
        {{endfor clientes}}
    </tbody>
    <tfoot>

    </tfoot>
  </table>
</section>

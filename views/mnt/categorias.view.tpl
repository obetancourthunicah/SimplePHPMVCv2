<section>
  <h1>Mantenimiento de Categorias</h1>
</section>
<hr />
<form action="index.php?page=categorias" method="post">
  <section class="row">
    <h2>Filtrar por</h2>
    <div class="col-sm-12 col-md-10">
      <label class="col-sm-12 col-md-3" for="cat_txtfilter">Nombre</label>
      <input type="text" name="cat_txtfilter" id="cat_txtfilter" value="{{cat_txtfilter}}" placeholder="Nombre"
        class="col-sm-12 col-md-9" />
    </div>
    <div class="col-sm-12 col-md-2">
      <button type="submit" name="btnFiltrar">Actualizar</button>
    </div>
  </section>
</form>
<hr />
<section class="row">
  <table class="col-sm-12">
    <thead class="zebra">
      <tr>
        <th>
          Código
        </th>
        <th>
          Nombre
        </th>
        <th>
          <a class="btn depth-1 s-margin" href="index.php?page=categoria&mode=INS&catecod=0">
            <span class="ion-plus-circled"></span>
          </a>
        </th>
      </tr>
    </thead>
    <tbody>
      {{foreach categorias}}
      <tr>
        <td>
          {{catecod}}
        </td>
        <td>
          {{catenom}}
        </td>

        <td class="center">
          <a class="btn depth-1 s-margin" href="index.php?page=categoria&mode=UPD&catecod={{catecod}}">
            <span class="ion-edit"></span>
          </a> &nbsp;
          <a class="btn depth-1 s-margin" href="index.php?page=categoria&mode=DSP&catecod={{catecod}}">
            <span class="ion-eye"></span>
          </a>&nbsp;
          <a class="btn depth-1 s-margin" href="index.php?page=categoria&mode=DEL&catecod={{catecod}}">
            <span class="ion-trash-a"></span>
          </a>
        </td>
      </tr>
      {{endfor categorias}}
    </tbody>
    <tfoot>
    </tfoot>
  </table>
</section>

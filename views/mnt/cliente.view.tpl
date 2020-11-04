<h1>{{modedsc}}</h1>
<section>
  <form method="post" action="index.php?page=cliente&mode={{mode}}&clientid={{clientid}}">
    <input type="hidden" name="mode" value="{{mode}}"/>
    <input type="hidden" name="clientid" value="{{clientid}}"/>
    <input type="hidden" name="xsstoken" value="{{xsstoken}}"/>
    <div>
    <label for="clientname">Nombre del Cliente</label>
    <input {{readonly}} type="text" name="clientname" id="clientname" value="{{clientname}}" placeholder="Nombre del Cliente" />
    </div>
    <div>
      <label for="clientgender">Género</label>
      <select name="clientgender" id="clientgender" {{readonly}}>
        <option value="FEM" {{clientgender_FEM}}>Femenino</option>
        <option value="MAS" {{clientgender_MAS}}>Masculino</option>
      </select>
    </div>
    <div>
      <label for="clientphone1">Teléfono Principal</label>
      <input {{readonly}} type="text" name="clientphone1" id="clientphone1" value="{{clientphone1}}" placeholder="Teléfono Principal" />
    </div>
    <div>
      <label for="clientphone2">Teléfono Secundario</label>
      <input {{readonly}} type="text" name="clientphone2" id="clientphone2" value="{{clientphone2}}" placeholder="Teléfono Secundario" />
    </div>
    <div>
      <label for="clientemail">Correo Electrónico</label>
      <input {{readonly}} type="text" name="clientemail" id="clientemail" value="{{clientemail}}" placeholder="Correo Electrónico" />
    </div>
    <div>
      <label for="clientIdnumber">Número de Identificación</label>
      <input {{readonly}} type="text" name="clientIdnumber" id="clientIdnumber" value="{{clientIdnumber}}" placeholder="Número de Identificación" />
    </div>
    <div>
      <label for="clientbio">Biografía Corta</label>
      <input {{readonly}} type="text"  name="clientbio" id="clientbio" value="{{clientbio}}" placeholder="Biografía corta" />
    </div>
    <div>
      <label for="clientstatus">Estado</label>
      <select name="clientstatus" id="clientstatus" {{readonly}}>
        <option value="ACT" {{clientstatus_ACT}}>Activo</option>
        <option value="INA" {{clientstatus_INA}}>Inactivo</option>
      </select>

    </div>
    <div>
      <label for="catecod">Categoría de Cliente</label>
      <select name="catecod" id="catecod" {{readonly}}>
       {{foreach catecod_cmb}}
          <option value="{{catecod}}" {{selected}}>{{catenom}}</option>
       {{endfor catecod_cmb}}
      </select>
    </div>
    {{if deletemsg}}
      <div class="alert">
        {{deletemsg}}
      </div>
    {{endif deletemsg}}
    <button id="btnsubmit" name="btnsubmit" type="submit">Enviar</button>
    <button id="btncancel">Cancelar</button>
  </form>
</section>

<script>
  $().ready(function(){
    $("#btncancel").click(function(e){
      e.preventDefault();
      e.stopPropagation();
      location.assign("index.php?page=clientes");
    });
  });
</script>

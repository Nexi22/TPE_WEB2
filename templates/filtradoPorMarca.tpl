{include 'inicioHtml.tpl'}
<form class="col-3 m-auto" action="buscar" method="POST">
    <div class="mb-3">
        <label class="form-label">Marca del vehiculo</label>
        <select name="buscar_id" class="form-control">
            <option value="">Seleccione una marca</option>
            {foreach from=$marcas item=m}
                <option value="{$m->id_marca}">{$m->nombre}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-primary col-12"> Buscar</button>
</form>

{include 'finHtml.tpl'}

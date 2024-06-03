{include 'inicioHtml.tpl'}

<table class="table table-success table-striped mt-2">
    
<h1>marca: {$vehi}</h1>
<ul>
{foreach $vehi as $vehicle}
    <li>{$vehicle->nombre}</li>
{/foreach} 
</ul>
<a href="verVehiculos">Volver</a>  
</div>



    
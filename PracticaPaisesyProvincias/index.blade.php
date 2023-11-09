        @extends('app.base')

@section('title', 'Argo Setting')

@section('content')

<form action="{{ url('setting') }}" method="post">
    
    @method('put')    
    @csrf
    
<label for="paisesEuropa">Países de Europa:</label>
<select name="selectedCountry" id="paises">
    <option value="albania" {{ session('selectedCountry') === 'albania' ? 'selected' : '' }}>Albania</option>
    <option value="alemania" {{ session('selectedCountry') === 'alemania' ? 'selected' : '' }}>Alemania</option>
    <option value="andorra" {{ session('selectedCountry') === 'andorra' ? 'selected' : '' }}>Andorra</option>
    <option value="austria" {{ session('selectedCountry') === 'austria' ? 'selected' : '' }}>Austria</option>
    <option value="belgica" {{ session('selectedCountry') === 'belgica' ? 'selected' : '' }}>Bélgica</option>
    <option value="bielorrusia" {{ session('selectedCountry') === 'bielorrusia' ? 'selected' : '' }}>Bielorrusia</option>
    <option value="bosnia_herzegovina" {{ session('selectedCountry') === 'bosnia_herzegovina' ? 'selected' : '' }}>Bosnia y Herzegovina</option>
    <option value="bulgaria" {{ session('selectedCountry') === 'bulgaria' ? 'selected' : '' }}>Bulgaria</option>
    <option value="chipre" {{ session('selectedCountry') === 'chipre' ? 'selected' : '' }}>Chipre</option>
    <option value="croacia" {{ session('selectedCountry') === 'croacia' ? 'selected' : '' }}>Croacia</option>
    <option value="dinamarca" {{ session('selectedCountry') === 'dinamarca' ? 'selected' : '' }}>Dinamarca</option>
    <option value="eslovaquia" {{ session('selectedCountry') === 'eslovaquia' ? 'selected' : '' }}>Eslovaquia</option>
    <option value="eslovenia" {{ session('selectedCountry') === 'eslovenia' ? 'selected' : '' }}>Eslovenia</option>
    <option value="espana" {{ session('selectedCountry') === 'espana' ? 'selected' : '' }}>España</option>
    <option value="estonia" {{ session('selectedCountry') === 'estonia' ? 'selected' : '' }}>Estonia</option>
    <option value="finlandia" {{ session('selectedCountry') === 'finlandia' ? 'selected' : '' }}>Finlandia</option>
    <option value="francia" {{ session('selectedCountry') === 'francia' ? 'selected' : '' }}>Francia</option>
    <option value="grecia" {{ session('selectedCountry') === 'grecia' ? 'selected' : '' }}>Grecia</option>
    <option value="hungria" {{ session('selectedCountry') === 'hungria' ? 'selected' : '' }}>Hungría</option>
    <option value="irlanda" {{ session('selectedCountry') === 'irlanda' ? 'selected' : '' }}>Irlanda</option>
    <option value="islandia" {{ session('selectedCountry') === 'islandia' ? 'selected' : '' }}>Islandia</option>
    <option value="italia" {{ session('selectedCountry') === 'italia' ? 'selected' : '' }}>Italia</option>
    <option value="letonia" {{ session('selectedCountry') === 'letonia' ? 'selected' : '' }}>Letonia</option>
    <option value="liechtenstein" {{ session('selectedCountry') === 'liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
    <option value="lituania" {{ session('selectedCountry') === 'lituania' ? 'selected' : '' }}>Lituania</option>
    <option value="luxemburgo" {{ session('selectedCountry') === 'luxemburgo' ? 'selected' : '' }}>Luxemburgo</option>
    <option value="malta" {{ session('selectedCountry') === 'malta' ? 'selected' : '' }}>Malta</option>
    <option value="moldavia" {{ session('selectedCountry') === 'moldavia' ? 'selected' : '' }}>Moldavia</option>
    <option value="monaco" {{ session('selectedCountry') === 'monaco' ? 'selected' : '' }}>Mónaco</option>
    <option value="montenegro" {{ session('selectedCountry') === 'montenegro' ? 'selected' : '' }}>Montenegro</option>
    <option value="noruega" {{ session('selectedCountry') === 'noruega' ? 'selected' : '' }}>Noruega</option>
    <option value="paises_bajos" {{ session('selectedCountry') === 'paises_bajos' ? 'selected' : '' }}>Países Bajos</option>
    <option value="polonia" {{ session('selectedCountry') === 'polonia' ? 'selected' : '' }}>Polonia</option>
    <option value="portugal" {{ session('selectedCountry') === 'portugal' ? 'selected' : '' }}>Portugal</option>
    <option value="reino_unido" {{ session('selectedCountry') === 'reino_unido' ? 'selected' : '' }}>Reino Unido</option>
    <option value="republica_checa" {{ session('selectedCountry') === 'republica_checa' ? 'selected' : '' }}>República Checa</option>
    <option value="rumania" {{ session('selectedCountry') === 'rumania' ? 'selected' : '' }}>Rumanía</option>
    <option value="rusia" {{ session('selectedCountry') === 'rusia' ? 'selected' : '' }}>Rusia</option>
    <option value="san_marino" {{ session('selectedCountry') === 'san_marino' ? 'selected' : '' }}>San Marino</option>
    <option value="serbia" {{ session('selectedCountry') === 'serbia' ? 'selected' : '' }}>Serbia</option>
    <option value="suecia" {{ session('selectedCountry') === 'suecia' ? 'selected' : '' }}>Suecia</option>
    <option value="suiza" {{ session('selectedCountry') === 'suiza' ? 'selected' : '' }}>Suiza</option>
    <option value="ucrania" {{ session('selectedCountry') === 'ucrania' ? 'selected' : '' }}>Ucrania</option>
    <option value="vaticano" {{ session('selectedCountry') === 'vaticano' ? 'selected' : '' }}>Ciudad del Vaticano</option>
</select>
<label for="provinciasEspana">Provincias de España:</label>
<select name="selectedProvince" id="provincias">
    <option value="alava" {{ session('selectedProvince') === 'alava' ? 'selected' : '' }}>Álava</option>
    <option value="albacete" {{ session('selectedProvince') === 'albacete' ? 'selected' : '' }}>Albacete</option>
    <option value="alicante" {{ session('selectedProvince') === 'alicante' ? 'selected' : '' }}>Alicante</option>
    <option value="almeria" {{ session('selectedProvince') === 'almeria' ? 'selected' : '' }}>Almería</option>
    <option value="avila" {{ session('selectedProvince') === 'avila' ? 'selected' : '' }}>Ávila</option>
    <option value="badajoz" {{ session('selectedProvince') === 'badajoz' ? 'selected' : '' }}>Badajoz</option>
    <option value="barcelona" {{ session('selectedProvince') === 'barcelona' ? 'selected' : '' }}>Barcelona</option>
    <option value="burgos" {{ session('selectedProvince') === 'burgos' ? 'selected' : '' }}>Burgos</option>
    <option value="caceres" {{ session('selectedProvince') === 'caceres' ? 'selected' : '' }}>Cáceres</option>
    <option value="cadiz" {{ session('selectedProvince') === 'cadiz' ? 'selected' : '' }}>Cádiz</option>
    <option value="castellon" {{ session('selectedProvince') === 'castellon' ? 'selected' : '' }}>Castellón</option>
    <option value="ciudad_real" {{ session('selectedProvince') === 'ciudad_real' ? 'selected' : '' }}>Ciudad Real</option>
    <option value="cordoba" {{ session('selectedProvince') === 'cordoba' ? 'selected' : '' }}>Córdoba</option>
    <option value="cuenca" {{ session('selectedProvince') === 'cuenca' ? 'selected' : '' }}>Cuenca</option>
    <option value="girona" {{ session('selectedProvince') === 'girona' ? 'selected' : '' }}>Girona</option>
    <option value="granada" {{ session('selectedProvince') === 'granada' ? 'selected' : '' }}>Granada</option>
    <option value="guadalajara" {{ session('selectedProvince') === 'guadalajara' ? 'selected' : '' }}>Guadalajara</option>
    <option value="guipuzcoa" {{ session('selectedProvince') === 'guipuzcoa' ? 'selected' : '' }}>Guipúzcoa</option>
    <option value="huelva" {{ session('selectedProvince') === 'huelva' ? 'selected' : '' }}>Huelva</option>
    <option value="huesca" {{ session('selectedProvince') === 'huesca' ? 'selected' : '' }}>Huesca</option>
    <option value="jaen" {{ session('selectedProvince') === 'jaen' ? 'selected' : '' }}>Jaén</option>
    <option value="leon" {{ session('selectedProvince') === 'leon' ? 'selected' : '' }}>León</option>
    <option value="lleida" {{ session('selectedProvince') === 'lleida' ? 'selected' : '' }}>Lleida</option>
    <option value="lugo" {{ session('selectedProvince') === 'lugo' ? 'selected' : '' }}>Lugo</option>
    <option value="madrid" {{ session('selectedProvince') === 'madrid' ? 'selected' : '' }}>Madrid</option>
    <option value="malaga" {{ session('selectedProvince') === 'malaga' ? 'selected' : '' }}>Málaga</option>
    <option value="murcia" {{ session('selectedProvince') === 'murcia' ? 'selected' : '' }}>Murcia</option>
    <option value="navarra" {{ session('selectedProvince') === 'navarra' ? 'selected' : '' }}>Navarra</option>
    <option value="ourense" {{ session('selectedProvince') === 'ourense' ? 'selected' : '' }}>Ourense</option>
    <option value="palencia" {{ session('selectedProvince') === 'palencia' ? 'selected' : '' }}>Palencia</option>
    <option value="pontevedra" {{ session('selectedProvince') === 'pontevedra' ? 'selected' : '' }}>Pontevedra</option>
    <option value="la_rioja" {{ session('selectedProvince') === 'la_rioja' ? 'selected' : '' }}>La Rioja</option>
    <option value="salamanca" {{ session('selectedProvince') === 'salamanca' ? 'selected' : '' }}>Salamanca</option>
    <option value="segovia" {{ session('selectedProvince') === 'segovia' ? 'selected' : '' }}>Segovia</option>
    <option value="sevilla" {{ session('selectedProvince') === 'sevilla' ? 'selected' : '' }}>Sevilla</option>
    <option value="soria" {{ session('selectedProvince') === 'soria' ? 'selected' : '' }}>Soria</option>
    <option value="tarragona" {{ session('selectedProvince') === 'tarragona' ? 'selected' : '' }}>Tarragona</option>
    <option value="teruel" {{ session('selectedProvince') === 'teruel' ? 'selected' : '' }}>Teruel</option>
    <option value="toledo" {{ session('selectedProvince') === 'toledo' ? 'selected' : '' }}>Toledo</option>
    <option value="valencia" {{ session('selectedProvince') === 'valencia' ? 'selected' : '' }}>Valencia</option>
    <option value="valladolid" {{ session('selectedProvince') === 'valladolid' ? 'selected' : '' }}>Valladolid</option>
    <option value="vizcaya" {{ session('selectedProvince') === 'vizcaya' ? 'selected' : '' }}>Vizcaya</option>
    <option value="zamora" {{ session('selectedProvince') === 'zamora' ? 'selected' : '' }}>Zamora</option>
    <option value="zaragoza" {{ session('selectedProvince') === 'zaragoza' ? 'selected' : '' }}>Zaragoza</option>
    <option value="ceuta" {{ session('selectedProvince') === 'ceuta' ? 'selected' : '' }}>Ceuta</option>
    <option value="melilla" {{ session('selectedProvince') === 'melilla' ? 'selected' : '' }}>Melilla</option>
</select>
<button type="submit" class="btn btn-primary">Save setting</button>
</form>
@endSection

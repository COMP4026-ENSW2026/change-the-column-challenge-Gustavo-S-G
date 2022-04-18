<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>

<h1>Adicionar novo pet:</h1>

<form action="/pets" method="post">
    @csrf

    <label for="name">Nome</label>
    <input id="name" name="name" type="text" /> <br/>

    <label for="color">Cor</label>
    <input id="color" name="color" type="text" /> <br/>

    <div>
    <label for="specie">Especie: </label>
            <select id="specie" name="specie">
                <option value="gato">GATO</option>
                <option value="cachorro">CACHORRO</option>
                <option value="zebra">ZEBRA</option>
                <option value="dragao-de-komodo">DRAGÃO DE KOMODO</option>
                <option value="cobra">COBRA</option>
                <option value="coelho">COELHO</option>
                <option value="camaleão">CAMALEÃO</option>
                <option value="cavalo">CAVALO</option>
                <option value="aves">AVES</option>
                <option value="camelo">CAMELO</option>
                <option value="pokemon">POKEMON</option>
                <option value="aracnideo">ARACNIDEO</option>
                <option value="inseto">INSETO</option>
                <option value="peixe">PEIXE</option>
                <option value="planta">PLANTA</option>
            </select> <br/>
    </div>

    <label for="size">Size:</label>
    <select name="size" id="size">
        <option value="xs">XS</option>
        <option value="sm">SM</option>
        <option value="m">M</option>
        <option value="l">L</option>
        <option value="xl">XL</option>
    </select>

    <br/>
    <br/>
    <button type="submit">
        Cadastrar
    </button>
</form>

<a href="/pets">Voltar</a>

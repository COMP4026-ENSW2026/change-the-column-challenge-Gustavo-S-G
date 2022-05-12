<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>

<h1>Adicionar novo Usuário:</h1>

<form action="/users" method="post">
    @csrf

    <label for="name">Nome</label>
    <input id="name" name="name" type="text" /> <br/>

    <label for="password">Password</label>
    <input id="password" name="password" type="number" /> <br/>

    <label for="email">Email</label>
    <input id="email" name="email" type="text" /> <br/>

    <br/>
    <br/>
    <button type="submit">
        Cadastrar
    </button>
</form>

<a href="/users">Voltar</a>

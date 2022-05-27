<php
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <div id="app">
      <form>
        <input type="text" v-model="user.name">
        <input type="password" v-model="user.password">
        <button @click="iniciarSesion">Iniciar sesion</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="main.js"></script>
  </body>
</html>

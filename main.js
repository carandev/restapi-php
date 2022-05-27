var app = new Vue({
  el: '#app',
  data: {
    user: {}
  },
  methods: {
    iniciarSesion: function(e) {
      e.preventDefault();

      fetch('/conection.php', {
        method: "POST",
        body: JSON.stringify(this.user)
      }).then(response => response.json())
        .then(console.log);
    }
  }
})

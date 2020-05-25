Vue.use(VueRouter);
// Vue.use(Vuetify);

// const routes = [{
//         path: '/',
//         component: spahome
//     },
//     {
//         path: '/airports',
//         component: spaAirports
//     }
// ]

// const router = new VueRouter({
//     routes // short for `routes: routes`
// })

// var app = new Vue({
//     el: '#app',
//     watch: {},
//     data: {
//         msg: 'Hello'
//     },
//     methods: {},
//     // router
// })

var App = Vue.component("Home", {
    template: `
        <v-app>
        <v-alert type="success">
        I'm a success alert.
      </v-alert>
  
      <v-alert type="info">
        I'm an info alert.
      </v-alert>
  
      <v-alert type="warning">
        I'm a warning alert.
      </v-alert>
  
      <v-alert type="error">
        I'm an error alert.
      </v-alert>
        </v-app>
  `,
    props: ["title"],
    $_veeValidate: {
        validator: "new"
    }
});

new Vue({
    Vuetify,
    render: h => h(App)
}).$mount('#gardenetics')
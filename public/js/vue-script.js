var vuetify = new Vuetify({
    theme: {
        dark: true,
        themes: {
            light: {
                primary: '#9C27B0',
                secondary: '#BA68C8',
                accent: '#8c9eff',
                error: '#4A148C',
            },
        },
    }
});

App = new Vue({
    el: '#app',
    vuetify: vuetify,
    data: {
        alert: false
    }
});

App.$vuetify.theme.dark = false
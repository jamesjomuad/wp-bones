var vuetify = new Vuetify({
    theme: {
        dark: false,
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

new Vue({
    el: '#app',
    vuetify: vuetify,
    data: {
        drawer: false,
        grid: false,
        plants: [
            { title: 'Quercus (Multisite)', color: 'pink'},
            { title: 'Spiraea', color: 'orange'},
            { title: 'Geranium', color: 'orange'},
            { title: 'Baptisia', color: 'orange'}
        ]
    },
    computed: {
 
    }
});
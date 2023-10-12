const { createApp } = Vue
createApp({
    data() {
        return {
            title: 'Hello Vue',
            discs: []
        }
    },

    methods: {

    },

    mounted() {
        axios
            .get('server.php')
            .then(response => {
                console.log(response);
                this.discs = response.data
            })
    }
}).mount('#app')
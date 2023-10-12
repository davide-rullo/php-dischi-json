const { createApp } = Vue
createApp({
    data() {
        return {
            title: 'Hello Vue',
            todos: null,
            newTask: '',
            error: ''
        }
    },

    methods: {

    },
    mounted() {

    }
}).mount('#app')
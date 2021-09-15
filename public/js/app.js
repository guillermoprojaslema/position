var app = new Vue({
        el: '#app',
        data: {
            counts: {}
        },


        methods: {
            onSubmit() {
                const url = document.getElementById("website").value;

                // TODO: No sé por qué no llega al método la llamda

                axios.post('/counter/ajx_counter', url).then(response => {
                    this.counts = response.data;
                }).catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            }
            ,
        }
    })
;
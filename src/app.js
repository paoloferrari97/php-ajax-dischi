const app = new Vue({
    el: "#app",
    data: {
        dischi:[]
    },
    methods: {
        
    },
    mounted() {
        axios
        .get("./api/database_api.php")
        .then(resp => {
            console.log(resp);
            this.dischi = resp.data;
        })
        .catch(e => {
            console.log(e);
        })
    }
});
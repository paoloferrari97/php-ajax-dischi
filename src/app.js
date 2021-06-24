const app = new Vue({
    el: "#app",
    data: {
        dischi: [],
        genere: "Tutti"
    },
    methods: {
        
    },
    mounted() {
        axios
        .get("./dist/api/database_api.php")
        .then(resp => {
            //console.log(resp);            
            this.dischi = resp.data;
        })
        .catch(e => {
            console.log(e);
        })
    }
});
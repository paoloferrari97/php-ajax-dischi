const app = new Vue({
    el: "#app",
    data: {
        dischi: [],
        genere: "Tutti"
    },
    methods: {
        filtra() {
            axios
        .get("./dist/api/database_api.php")
        .then(resp => {
            //console.log(resp);            
            this.dischi = [];
            for (var i = 0; i < resp.data.length; i++){
                if (resp.data.genre == this.genere || this.genere == 'Tutti') {
                    this.dischi.push(resp.data[i]);
                }
            }
            //this.dischi = resp.data;
        })
        .catch(e => {
            console.log(e);
        })
        }
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

const app = new Vue({
    el: "#root",
    data: {
        discs: [],
        selected: "",
    },
    created() {
        axios
            .get('http://localhost/PHP/php-ajax-dischi/api/server.php')
            .then((response) =>{
                this.discs = response.data
            })
    },
    methods: {
        getfilterdisc() {
            if(this.selected === "") {
                return this.discs
            }

            const filterdisc = [];

            for(let i in this.discs) {
                if(this.discs[i].genre === this.selected)
                    filterdisc.push(this.discs[i])
            }

            return filterdisc;
        }
    } 
})
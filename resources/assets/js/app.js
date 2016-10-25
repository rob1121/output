require('./bootstrap');

import store from "./vuex/store";

const app = new Vue({
    el: '#app',

    store,

    components: {
        'output-table': require("./components/OutputTable.vue"),
        'datepicker': require("./components/datePicker.vue")
    },

    created() {
        this.getOutput("output");
    },

    computed: {
        output() {
            return store.state.outputStore.output;
        }
    },

    methods: {
        getOutput(line) {

            this.$http.get("/output", {
                params: { line }
            }).then(
                response => store.commit('GET_OUTPUT', response.data),
                error    => console.log( "error" )
            );
        }
    }
});

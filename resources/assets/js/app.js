require('./bootstrap');

import { getOutput } from "./modules/resources";

const app = new Vue({
    el: '#app',

    data: {
        data: {}
    },

    components: {
        'output-table': require("./OutputTable.vue")
    },

    mounted() {
        this.getOutput("output");
    },

    methods: {
        getOutput // set data object
    }
});

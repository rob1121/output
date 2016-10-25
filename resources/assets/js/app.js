require('./bootstrap');

import { getOutput } from "./modules/resources";
import store from "./vuex/store";
const app = new Vue({
    el: '#app',
    store,
    data: {
        data: {}
    },
    components: {
        'output-table': require("./OutputTable.vue"),
        'datepicker': require("./datePicker.vue")
    },

    mounted() {
        console.log(store.state.outputStore.output_date);

        this.getOutput("output");
    },

    methods: {
        getOutput, // set data object
    }
});

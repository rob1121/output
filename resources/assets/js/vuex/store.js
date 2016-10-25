import Vue from "vue";
import Vuex from "vuex";

import outputStore from "./outputStore";

Vue.use(Vuex);
export default new Vuex.Store({
    modules: {
        outputStore
    }
});

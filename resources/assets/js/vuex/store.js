import Vue from "vue";
import Vuex from "vuex";
import outputStore from "./outputStore";

Vue.config.debug = true;
Vue.use(Vuex);

const debug = process.NODE_ENV !== 'production';

export default new Vuex.Store({
    modules: {
        outputStore
    },
    strict: debug
});

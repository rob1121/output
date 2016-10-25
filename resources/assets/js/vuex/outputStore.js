const moment = require('momentjs');
const state = {
    output_date: moment().format("YYYY-MM-DD"),
    output: []
}

const mutations = {
    GET_DATE (state, output_date ) {
        state.output_date = output_date;
    },

    GET_OUTPUT (state, collections ) {
        state.output = collections;
    }
}

const actions = {
    getOutputDate ({commit}, output_date )
    {
        commit('GET_DATE', output_date);
    }
}

export default {
    state, mutations, actions
}
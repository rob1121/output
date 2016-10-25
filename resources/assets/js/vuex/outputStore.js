const state = {
    output_date: ""
}

const mutations = {
    GET_DATE (state, output_date ) {
        state.output_date = output_date;
    }
}

export default {
    state, mutations
}
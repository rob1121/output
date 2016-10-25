const getOutput = function(line)
{
    this.$http.get("/output", {
        params: { line }
    }).then(
        response => store.commit('GET_OUTPUT', response.data),
        error    => console.log( "error" )
    );
};

export {
    getOutput
}
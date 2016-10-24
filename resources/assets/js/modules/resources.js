const getOutput = function(line = "")
{
    this.$http.get("/output", {
        params: { line }
    }).then(
        response => this.$set(this, 'data', response.data),
        error    => console.log( error )
    );
};

export {
    getOutput
}
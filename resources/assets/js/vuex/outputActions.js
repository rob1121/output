export  const getOutputDate = function (output_date) {
    var dispatch = store.dispatch;
    dispatch('GET_DATE', output_date);
}
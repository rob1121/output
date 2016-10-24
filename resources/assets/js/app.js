require('./bootstrap');

import {
    numberFormat,
    numberSign
} from "./modules/numberFormats";

const app = new Vue({
    el: '#app',
    data: {
        datas: []
    },

    created() {
      this.$http.get("/output").then(
          response => {
              this.datas = response.data;
          },
          error => console.log(error)
      );
    },

    filters: {
        numberFormat,
        numberSign
    }
});

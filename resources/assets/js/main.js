
import Vue from 'vue';
import VueResource from 'vue-resource';

import ImageUpload from './components/ImageUpload.vue';

Vue.use(VueResource);

new Vue({

    el: '#app',

    components: { ImageUploadBox: ImageUpload},

});


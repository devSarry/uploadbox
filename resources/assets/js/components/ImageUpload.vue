<template>
        <form id="dropzone-area" class="dropzone">
            <div class="dropzone-text">
            <span class="dropzone-info"><slot></slot></span>
            </div>
        </form>
</template>

<script type="text/babel">
    import Dropzone from 'dropzone'
    var tmp_photo_name;

    export default {

        props: ['action'],
        data() {
            return {
                tmp_photo_name: 'sans'
            }
        },
        ready() {

            var self = this;
            const dropzone = new Dropzone('form#dropzone-area', {
                autoDiscover: false,
                url: this.action,
                maxFiles: 1,
                thumbnailWidth: 1000,
                thumbnailHeight: 500,
                addRemoveLinks: true,
                dictDefaultMessage: "<div class=\"dropzone-title\">Drop an image or click to select.</div>",

                init: function(){
                    console.log(this);
                    var myDropzone = this;

                    myDropzone.on("maxfilesexceeded", function(file) {
                        this.removeAllFiles();
                        this.addFile(file);
                    });
                    /*Here I'm trying to delete the file*/
                    myDropzone.on("removedfile", function(file){
                        console.log('deleting ' + tmp_photo_name);
                        console.log(self);
                        self.$http.get(this.action + 'delete' + tmp_photo_name);
                    })
                },

                success: function(file,response){
                    console.log(JSON.parse(response).tmp_photo_name);
                    console.log(tmp_photo_name = JSON.parse(response).tmp_photo_name);
                    console.log(tmp_photo_name);
                }
            });

        }

    }

</script>

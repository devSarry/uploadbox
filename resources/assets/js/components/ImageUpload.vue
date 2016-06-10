<template>
        <slot></slot>
        <div id="image-dropzone" class="dropzone">
            <div class="dropzone-previews form-group"></div> <!-- this is were the previews should be shown. -->

        </div>


</template>

<script type="text/babel">
    import Dropzone from 'dropzone'

    var $ = require ('jquery');

    var tmp_photo_name;


    export default {

        props: ['name'],
        data() {
            return {
                tmp_photo_name: 'sans'
            }
        },
        ready() {
            var self = this;

            let url = $('form').attr('action');

            const dropzone = new Dropzone('div#image-dropzone', {

                autoDiscover: false,
                url: url,
                maxFiles: 1,
                uploadMultiple: true,
                autoProcessQueue: false,
                parallelUploads: 100,
                thumbnailWidth: 1000,
                thumbnailHeight: 500,
                addRemoveLinks: true,
                dictDefaultMessage: "<div class=\"dropzone-title\">Drop an image or click to select.</div>",

                init: function () {
                    var myDropzone = this;

                    myDropzone.on("maxfilesexceeded", function (file) {
                        this.removeAllFiles();
                        this.addFile(file);
                    });

                    /*Here I'm trying to delete the file*/
                    myDropzone.on("removedfile", function (file) {
                        console.log(self.tmp_photo_name);
                        self.$http.get(self.action + '/' + self.tmp_photo_name + '/delete/');
                    });

                    $("button[type=submit]").click(function (e) {
                        // Make sure that the form isn't actually being sent.
                        e.preventDefault();
                        e.stopPropagation();

                        myDropzone.processQueue();
                    });

                    myDropzone.on('completemultiple', function () {
                        location.replace(url);
                    });
                },

                success: function (file, response) {
                    self.tmp_photo_name = JSON.parse(response).tmp_photo_name;


                    window.location.replace(this.url);
                },
                sending: function (file, xhr, formData) {
                    let $inputs = $('form :input');
                    $inputs.each(function(){
                        formData.append(this.name, $(this).val());
                    });
                }
            });

        }

    }

</script>

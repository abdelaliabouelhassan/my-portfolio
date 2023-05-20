<template>
    <lightgallery
        :settings="{ speed: 500, plugins: plugins }"
        :onInit="onInit"
        :onBeforeSlide="onBeforeSlide"
    >
       <slot></slot>
    </lightgallery>
</template>

<script  setup>
import Lightgallery from "lightgallery/vue";
import lgThumbnail from "lightgallery/plugins/thumbnail";
import lgZoom from "lightgallery/plugins/zoom";
// If you are using scss you can skip the css imports below and use scss instead
import "lightgallery/scss/lightgallery.scss";
import { onMounted } from "vue";

const onInit = () => {
    console.log("lightGallery has been initialized");
};
const onBeforeSlide = () => {
    console.log("calling before slide");
};

const plugins = [lgThumbnail, lgZoom];



</script>
<style>
@import "lightgallery/css/lightgallery.css";
@import "lightgallery/css/lg-thumbnail.css";
@import "lightgallery/css/lg-zoom.css";
</style>

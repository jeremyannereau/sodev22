require("./bootstrap");

require("alpinejs");
import "bootstrap";

require("trumbowyg");

// 1. On importe createApp
import { createApp } from "vue";


// 2. On importe AppComponent.vue
import librairieCode from "./components/librairieCode.vue";
import editeurCode from "./components/editeurCode.vue";

// 3. On monte l'application Vue sur l'élément #app
createApp(librairieCode).mount("#librairieCode");
createApp(editeurCode).mount("#editeurCode");

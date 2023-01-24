import { createApp } from "vue";
import './registerServiceWorker'
import App from "./vue/App.vue";
import router from "./router";
// const app =createApp({
//     components:{App}
//     methods:{

//     },
//     mounted(){
//         console.log("app mounted");
//     }
// });

createApp(App).use(router).mount("#app")

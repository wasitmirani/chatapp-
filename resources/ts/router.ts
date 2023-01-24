import {createRouter,createWebHistory,RouteRecordRaw,} from "vue-router";

console.log('loca', window.location.href)
const  getComponent=(file_name:string)=> {
    return import('./vue/backend/pages/'+file_name+'Component.vue');
  }
const prefix="/portal";
const setRoute=(url:string,name:string,path:string)=>{
console.log(path)
    return {
      path: url,
      name: name,
      component:async ()=> await getComponent(path),

    }
  }

  let routes =[
    {
        path: "/dashboard",
        redirect: { name: 'dashboard' }
    },
    {
        path: "/",
        redirect: { name: 'dashboard' }
    },
    setRoute('/:catchAll(.*)','404','error/404'),
    setRoute('/dashboard','dashboard','home/Home'),
];

let router = createRouter({
    history: createWebHistory(),
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active",
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
            return {
                selector: to.hash,
                behavior: 'smooth',
            }
        }
    },
});

router.beforeEach((to, from, next) => {

    next()

  });
export default router;

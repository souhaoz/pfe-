//
import Login from '../views/Login.vue'
import AppHeader from "../layout/AppHeader";
import Components from "../views/Components";
import AppFooter from "../layout/AppFooter";
import Landing from "../views/Landing";
import Register from "../views/Register";
import Logout from "../views/Logout";
import ListUser from "../views/ListUser";


const routes = [
    //{ path: '/', component: Home, meta: { requiresAuth: true } },
    { path: '/login',
        name:'login',
        props: true,
        components: {
            Login,
            header: AppHeader,
            default: Login,
        }
    },
    {
        path: "/",
        name: "home",
        components: {
            header: AppHeader,
            default: Landing,
            footer: AppFooter
        }
    },
    {
        path: "/register",
        name: "register",
        components: {
            header: AppHeader,
            default: Register,
            footer: AppFooter,
            meta: {
                requiresAuth: true,
                permissions: [
                    {
                        role: "ROLE_USER",
                        access: false,
                        redirect: "login"

                    }
                ]
            }

        }
    },
    {
        path: "/Logout",
        name: "Logout",
        components: {
            default: Logout
        }
    },
    {
        path: "/ListUser",
        name: "ListUser",
        components: {
            default: ListUser
        }},
]

export default routes
